@extends('layouts.admin')

@section('content')
<div class="mb-12 flex justify-between items-center">
    <h1 class="text-4xl font-black uppercase italic tracking-tighter">Manage <span class="text-gray-400">Videos</span></h1>
    <a href="{{ route('admin.videos.create') }}" class="bg-gray-900 text-white py-3 px-6 rounded-xl font-bold uppercase tracking-widest text-sm hover:bg-gray-800 transition-colors">Add New Video</a>
</div>

@if(session('success'))
<div class="mb-8 bg-green-50 text-green-600 p-4 rounded-xl font-bold uppercase tracking-widest text-xs">
    {{ session('success') }}
</div>
@endif

<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-gray-50 text-xs font-black uppercase tracking-widest text-gray-400">
                <tr>
                    <th class="px-8 py-4">Company</th>
                    <th class="px-8 py-4">URL</th>
                    <th class="px-8 py-4">Status</th>
                    <th class="px-8 py-4">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($videos as $video)
                <tr>
                    <td class="px-8 py-6">
                        <div class="font-bold text-gray-900">{{ $video->company_name }}</div>
                    </td>
                    <td class="px-8 py-6 text-sm text-gray-500">
                        <a href="{{ $video->video_url }}" target="_blank" class="hover:underline">{{ $video->video_url }}</a>
                    </td>
                    <td class="px-8 py-6">
                        @if($video->is_active)
                        <span class="bg-green-50 text-green-600 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full">Active</span>
                        @else
                        <span class="bg-gray-50 text-gray-400 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full">Inactive</span>
                        @endif
                    </td>
                    <td class="px-8 py-6 flex space-x-4">
                        <a href="{{ route('admin.videos.edit', $video) }}" class="text-gray-900 font-black text-xs uppercase tracking-widest hover:underline italic">Edit</a>
                        <form action="{{ route('admin.videos.destroy', $video) }}" method="POST" onsubmit="return confirm('Delete this video?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-500 font-black text-xs uppercase tracking-widest hover:underline italic">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
