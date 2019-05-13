<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Validator;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::all();
        return view('products.index', $data);
    }

    public function create()
    {
        $data['today'] = '';
        return view('products.create', $data);
    }

    public function store(Request $request)
    {
        /*$messages = [
            'required' => '!The :attribute field is required.',
            'unique' => '!The :attribute has already been taken.',
            'date' => '!The :attribute is not a valid date.',
            'max' => '!The :attribute may not be greater than :max characters.',
            'regex' => '!The :attribute format is invalid.',
        ];*/

        $validator = Validator::make($request->all(), $this->getValidateData('create'));
        $validator->setAttributeNames($this->getNiceNames('products'));

        if ($validator->fails()) {
            return redirect()->route('products.create')->withErrors($validator);
        }

        $result = Product::create($request->all());

        if (is_object($result)) {
            return redirect()->route('products.index');
        }
    }

    public function show(Product $product)
    {
        $data['product'] = $product;
        return view('products.show', $data);
    }

    public function edit(Product $product)
    {
        $data['product'] = $product;
        return view('products.edit', $data);
    }

    public function update(Product $product, Request $request)
    {
        $validator = Validator::make($request->all(), $this->getValidateData('update', $product->getKey()));
        $validator->setAttributeNames($this->getNiceNames('products'));

        if ($validator->fails()) {
            return redirect()->route('products.edit', ['product' => $product])->withErrors($validator);
        }

        $result = $product->fill($request->all())->save();

        if ($result) {
            return redirect()->route('products.index');
        }
    }

    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return redirect()->route('products.index');
        } catch (\Exception $e) {

        }
    }

    protected function getNiceNames($table): array
    {
        $comments = DB::table('information_schema.columns')
            ->where('table_schema', DB::raw('DATABASE()'))
            ->where('table_name', $table)
            ->pluck('column_comment', 'column_name')
            ->toArray();

        foreach ($comments as $key => $comment) {
            if ($comment === '') {$comments[$key] = $key;}
        }

        return $comments;
    }

    protected function getValidateData($type, $key = null): array
    {
        $data = [
            'code'    => 'required|regex:/^[0-9]+$/|max:20|unique:products',
            'name'    => 'required|max:50',
            'd_begin' => 'required|date',
            'd_end'   => 'required|date',
        ];

        if ($type === 'create') {
            return $data;
        }

        if ($type === 'update') {
            $data['code'] .= ',code,' . $key;
        }

        return $data;
    }

}
