@extends('layouts.admin')

@section('content')
<div class="mb-12 flex justify-between items-center">
    <h1 class="text-4xl font-black uppercase italic tracking-tighter">Manage <span class="text-gray-400">Categories</span></h1>
    <button onclick="document.getElementById('category-form').classList.toggle('hidden')" class="bg-gray-900 text-white py-3 px-6 rounded-xl font-bold uppercase tracking-widest text-sm hover:bg-gray-800 transition-colors">Add New Category</button>
</div>

<!-- Add Category Form (Hidden by default) -->
<div id="category-form" class="hidden mb-12 bg-white rounded-3xl shadow-sm border border-gray-100 p-8">
    <h3 class="text-xl font-black uppercase italic mb-6">Create New Category</h3>
    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2">Category Name</label>
                <input type="text" name="name" required class="w-full bg-gray-50 border-2 border-gray-100 rounded-xl px-4 py-3 focus:border-gray-900 outline-none transition-all">
            </div>
            <div>
                <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2">Description</label>
                <input type="text" name="description" required class="w-full bg-gray-50 border-2 border-gray-100 rounded-xl px-4 py-3 focus:border-gray-900 outline-none transition-all">
            </div>
            <div>
                <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2">Upload Image</label>
                <input type="file" name="image_file" class="w-full bg-gray-50 border-2 border-gray-100 rounded-xl px-4 py-3 focus:border-gray-900 outline-none transition-all">
            </div>
            <div>
                <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2">OR Image URL</label>
                <input type="url" name="image_url" placeholder="https://..." class="w-full bg-gray-50 border-2 border-gray-100 rounded-xl px-4 py-3 focus:border-gray-900 outline-none transition-all">
            </div>
        </div>
        <div class="mt-8">
            <button type="submit" class="bg-teal-600 text-white py-3 px-8 rounded-xl font-bold uppercase tracking-widest text-sm hover:bg-teal-700 transition-colors">Save Category</button>
        </div>
    </form>
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
                    <th class="px-8 py-4">Category</th>
                    <th class="px-8 py-4">Description</th>
                    <th class="px-8 py-4">Products Count</th>
                    <th class="px-8 py-4">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($categories as $category)
                <tr>
                    <td class="px-8 py-6">
                        <div class="font-bold text-gray-900">{{ $category->name }}</div>
                        <div class="text-xs text-gray-400 font-bold uppercase tracking-widest">{{ $category->slug }}</div>
                    </td>
                    <td class="px-8 py-6 text-sm text-gray-500 max-w-xs truncate">
                        {{ $category->description }}
                    </td>
                    <td class="px-8 py-6 text-sm font-bold text-gray-900">
                    {{ \App\Models\Product::where('category_id', (string)$category->_id)->count() }}
                    </td>
                    <td class="px-8 py-6 flex space-x-4">
                        <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Delete this category?')">
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
