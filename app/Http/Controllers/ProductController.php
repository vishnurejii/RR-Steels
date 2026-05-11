<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->has('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $products = $query->with('category')->paginate(12);
        $categories = Category::all();

        // Fetch hardware goods for a dedicated section if no category is selected
        $hardwareGoods = null;
        if (!$request->has('category') && !$request->has('search')) {
            $hardwareGoods = Product::whereHas('category', function ($q) {
                $q->where('slug', 'other-hardware-goods');
            })->take(4)->get();
        }

        return view('products.index', compact('products', 'categories', 'hardwareGoods'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->with('category')->firstOrFail();
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('products.show', compact('product', 'relatedProducts'));
    }
}
