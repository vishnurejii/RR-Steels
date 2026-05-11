<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Inquiry;
use App\Models\Review;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'products' => Product::count(),
            'categories' => Category::count(),
            'inquiries' => Inquiry::count(),
            'pending_inquiries' => Inquiry::where('status', 'pending')->count(),
            'reviews' => Review::count(),
            'pending_reviews' => Review::where('is_approved', false)->count(),
        ];

        $recentInquiries = Inquiry::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentInquiries'));
    }
}
