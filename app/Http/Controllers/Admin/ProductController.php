<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'category_id' => 'required|string',
            'description' => 'required|string',
            'price'       => 'nullable|numeric',
            'is_featured' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($request->name);
        $validated['is_featured'] = $request->has('is_featured');
        
        // Mocking image for now
        $validated['image'] = 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=1000';

        Product::create($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'category_id' => 'required|string',
            'description' => 'required|string',
            'price'       => 'nullable|numeric',
        ]);

        $validated['is_featured'] = $request->has('is_featured');
        $product->update($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success', 'Product deleted.');
    }
}
