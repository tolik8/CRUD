<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Product;
use Validator;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::all();
        return view('products.index', $data);
    }

    public function create()
    {
        return view('products.create', ['today' => '']);
    }

    public function store(ProductStoreRequest $request)
    {
        /*$validator = Validator::make($request->all(), $this->getValidateData());
        $validator->setAttributeNames($this->getNiceNames('products'));

        if ($validator->fails()) {
            return redirect()->route('products.create')->withErrors($validator);
        }*/

        $result = Product::create($request->validated());

        if (is_object($result)) {
            return redirect()->route('products.index');
        }

        return redirect()->route('products.create');
    }

    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, ProductUpdateRequest $request)
    {
        /*$validator = Validator::make($request->all(), $this->getValidateDataForUpdate($product->getKey()));
        $validator->setAttributeNames($this->getNiceNames('products'));

        if ($validator->fails()) {
            return redirect()->route('products.edit', ['product' => $product])->withErrors($validator);
        }*/

        $result = $product->fill($request->validated())->save();

        if ($result) {
            return redirect()->route('products.index');
        }

        return redirect()->route('products.edit', ['product' => $product]);
    }

    public function destroy(Product $product)
    {
        try {
            $product->delete();
        } catch (\Exception $e) {

        }
        return redirect()->route('products.index');
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

    /*protected function getValidateData(): array
    {
        return [
            'code'    => 'required|regex:/^[0-9]+$/|max:20|unique:products',
            'name'    => 'required|max:50',
            'd_begin' => 'required|date',
            'd_end'   => 'required|date',
        ];
    }

    protected function getValidateDataForUpdate($key): array
    {
        $data = $this->getValidateData();
        $data['code'] .= ',code,' . $key;
        return $data;
    }*/

}
