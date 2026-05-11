<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('is_featured', true)->take(4)->get();
        $categories = Category::all();
        $productVideos = \App\Models\ProductVideo::where('is_active', true)->get();
        $reviews = \App\Models\Review::where('is_approved', true)->latest()->get();
        return view('home', compact('featuredProducts', 'categories', 'productVideos', 'reviews'));
    }

    public function about()
    {
        $productVideos = \App\Models\ProductVideo::where('is_active', true)->latest()->get();
        return view('about', compact('productVideos'));
    }

    public function contact()
    {
        return view('contact');
    }
}
