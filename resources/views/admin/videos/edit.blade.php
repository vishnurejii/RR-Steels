@extends('layouts.admin')

@section('content')
<div class="mb-12">
    <a href="{{ route('admin.videos.index') }}" class="text-gray-400 font-black text-xs uppercase tracking-widest hover:text-gray-900 transition-colors">&larr; Back to Videos</a>
    <h1 class="text-4xl font-black uppercase italic tracking-tighter mt-4">Edit <span class="text-gray-400">Video</span></h1>
</div>

<div class="max-w-2xl bg-white rounded-3xl shadow-sm border border-gray-100 p-12">
    <form action="{{ route('admin.videos.update', $video) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="space-y-8">
            <div>
                <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2">Company Name</label>
                <input type="text" name="company_name" value="{{ old('company_name', $video->company_name) }}" required 
                    class="w-full bg-gray-50 border-2 border-gray-100 rounded-xl px-4 py-3 focus:border-gray-900 outline-none transition-all">
                @error('company_name') <p class="mt-2 text-xs text-red-500 font-bold uppercase">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2">YouTube URL</label>
                <input type="url" name="video_url" value="{{ old('video_url', $video->video_url) }}" required placeholder="https://youtu.be/..."
                    class="w-full bg-gray-50 border-2 border-gray-100 rounded-xl px-4 py-3 focus:border-gray-900 outline-none transition-all">
                <p class="mt-2 text-[10px] text-gray-400 font-bold uppercase tracking-widest italic">Supports youtu.be and youtube.com/watch links</p>
                @error('video_url') <p class="mt-2 text-xs text-red-500 font-bold uppercase">{{ $message }}</p> @enderror
            </div>

            <div class="flex items-center gap-3">
                <input type="hidden" name="is_active" value="0">
                <input type="checkbox" name="is_active" value="1" id="is_active" {{ $video->is_active ? 'checked' : '' }} 
                    class="w-5 h-5 text-gray-900 border-gray-300 rounded focus:ring-gray-900">
                <label for="is_active" class="text-sm font-bold uppercase tracking-widest text-gray-600">Active (Visible on Homepage)</label>
            </div>

            <div class="pt-4">
                <button type="submit" class="w-full bg-gray-900 text-white py-4 rounded-xl font-black uppercase tracking-widest text-sm hover:bg-gray-800 transition-colors shadow-lg shadow-gray-200">
                    Update Product Video
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
