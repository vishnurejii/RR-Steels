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
        $request->validate([
            'name'        => 'required|string|max:255',
            'category_id' => 'required|string',
            'description' => 'required|string',
            'price'       => 'nullable|numeric',
            'is_featured' => 'boolean',
            'image_url'   => 'nullable|url',
            'image_file'  => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->image_url;

        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/products'), $filename);
            $imagePath = '/uploads/products/' . $filename;
        }

        Product::create([
            'name'        => $request->name,
            'slug'        => \Illuminate\Support\Str::slug($request->name),
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price'       => $request->price,
            'is_featured' => $request->has('is_featured'),
            'image'       => $imagePath ?? 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=1000',
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'category_id' => 'required|string',
            'description' => 'required|string',
            'price'       => 'nullable|numeric',
            'image_url'   => 'nullable|url',
            'image_file'  => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $product->image;

        if ($request->image_url) {
            $imagePath = $request->image_url;
        }

        if ($request->hasFile('image_file')) {
            $file = $request->file('image_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/products'), $filename);
            $imagePath = '/uploads/products/' . $filename;
        }

        $product->update([
            'name'        => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price'       => $request->price,
            'is_featured' => $request->has('is_featured'),
            'image'       => $imagePath,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success', 'Product deleted.');
    }
}
