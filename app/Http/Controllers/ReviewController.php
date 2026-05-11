<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Public: Store a new review submission.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:1000',
        ]);

        Review::create([
            'customer_name' => $validated['customer_name'],
            'company_name' => $validated['company_name'] ?? 'Customer',
            'rating' => $validated['rating'],
            'comment' => $validated['comment'],
            'is_approved' => false, // Requires admin approval
            'avatar_url' => 'https://ui-avatars.com/api/?name=' . urlencode($validated['customer_name']) . '&background=random',
        ]);

        return back()->with('success', 'Thank you for your review! It will be visible once approved by our team.');
    }

    /**
     * Admin: List all reviews for moderation.
     */
    public function adminIndex()
    {
        $reviews = Review::latest()->paginate(10);
        return view('admin.reviews.index', compact('reviews'));
    }

    /**
     * Admin: Approve a review.
     */
    public function approve(Review $review)
    {
        $review->update(['is_approved' => true]);
        return back()->with('success', 'Review approved successfully!');
    }

    /**
     * Admin: Delete a review.
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return back()->with('success', 'Review deleted successfully!');
    }
}
