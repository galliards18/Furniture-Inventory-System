<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string',
            'price' => 'required|string',
        ]);

        Product::create($request->all());
        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required|string',
            'price' => 'required|string',
        ]);

        $product->update($request->all());
        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}
