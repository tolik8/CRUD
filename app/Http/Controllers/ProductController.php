<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Validator;

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
        $product = new Product;

        $validator = Validator::make($request->all(), $product->getValidateData('create'));
        /** @noinspection PhpUndefinedMethodInspection */
        $validator->setAttributeNames($product->getNiceNames('products'));

        if ($validator->fails()) {
            return redirect()->route('products.create')->withErrors($validator);
        }

        $result = Product::create($request->all());

        if (is_object($result)) {
            return redirect()->route('products.index');
        }

        return redirect()->route('products.create');
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
        $validator = Validator::make($request->all(), $product->getValidateData('update', $product->getKey()));
        /** @noinspection PhpUndefinedMethodInspection */
        $validator->setAttributeNames($product->getNiceNames('products'));

        if ($validator->fails()) {
            return redirect()->route('products.edit', ['product' => $product])->withErrors($validator);
        }

        $result = $product->fill($request->all())->save();

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

}
