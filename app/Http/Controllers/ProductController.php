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
        return view('products.create', ['today' => '']);
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
        return view('products.edit', ['product' => $product]);
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
