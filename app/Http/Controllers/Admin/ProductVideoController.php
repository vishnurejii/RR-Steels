<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductVideo;
use Illuminate\Http\Request;

class ProductVideoController extends Controller
{
    public function index()
    {
        $videos = ProductVideo::latest()->get();
        return view('admin.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'video_url'    => 'required|url',
        ]);

        ProductVideo::create([
            'company_name' => $request->company_name,
            'video_url'    => $request->video_url,
            'is_active'    => $request->has('is_active'),
        ]);

        return redirect()->route('admin.videos.index')->with('success', 'Video added successfully.');
    }

    public function edit(ProductVideo $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    public function update(Request $request, ProductVideo $video)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'video_url'    => 'required|url',
        ]);

        $video->update([
            'company_name' => $request->company_name,
            'video_url'    => $request->video_url,
            'is_active'    => $request->has('is_active'),
        ]);

        return redirect()->route('admin.videos.index')->with('success', 'Video updated successfully.');
    }

    public function destroy(ProductVideo $video)
    {
        $video->delete();
        return redirect()->route('admin.videos.index')->with('success', 'Video deleted successfully.');
    }
}
