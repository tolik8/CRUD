<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::all();
        return view('products.index', $data);
    }

    public function create()
    {
        $product = new Product;
        $data = [
            'today' => '',
            'col' => $product->getColumnsTranslate(),
        ];
        return view('products.create', $data);
    }

    public function store(ProductRequest $request)
    {
        $result = Product::create($request->validated());

        if (!is_object($result)) {
            return redirect()->route('products.create');
        }

        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        $data = [
            'col' => $product->getColumnsTranslate(),
            'product' => $product
        ];
        return view('products.edit', $data);
    }

    public function update(Product $product, ProductRequest $request)
    {
        $result = $product->fill($request->validated())->save();

        if (!$result) {
            return redirect()->route('products.edit', ['product' => $product]);
        }

        return redirect()->route('products.index');
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
