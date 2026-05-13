@extends('layouts.admin')

@section('content')
<div class="mb-12 flex justify-between items-center">
    <h1 class="text-4xl font-black uppercase italic tracking-tighter">Manage <span class="text-gray-400">Categories</span></h1>
    <button class="btn-primary py-3 px-6 text-sm">Add New Category</button>
</div>

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
                        <button class="text-gray-900 font-black text-xs uppercase tracking-widest hover:underline italic">Edit</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
