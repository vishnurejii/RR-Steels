@extends('layouts.admin')

@section('content')
<div class="mb-12 flex justify-between items-center">
    <h1 class="text-4xl font-black uppercase italic tracking-tighter">Manage <span class="text-gray-400">Products</span></h1>
    <a href="{{ route('admin.products.create') }}" class="btn-primary py-3 px-6 text-sm">Add New Product</a>
</div>

<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-gray-50 text-xs font-black uppercase tracking-widest text-gray-400">
                <tr>
                    <th class="px-8 py-4">Product</th>
                    <th class="px-8 py-4">Category</th>
                    <th class="px-8 py-4">Price</th>
                    <th class="px-8 py-4">Featured</th>
                    <th class="px-8 py-4">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($products as $product)
                <tr>
                    <td class="px-8 py-6">
                        <div class="font-bold text-gray-900">{{ $product->name }}</div>
                        <div class="text-xs text-gray-400 font-bold uppercase tracking-widest">{{ $product->slug }}</div>
                    </td>
                    <td class="px-8 py-6 text-sm text-gray-600">
                        {{ \App\Models\Category::find($product->category_id)?->name ?? 'Uncategorized' }}
                    </td>
                    <td class="px-8 py-6 text-sm font-bold text-gray-900">
                        @if($product->price)
                            ₹{{ number_format((float)$product->price, 2) }}
                        @else
                            Contact for Price
                        @endif
                    </td>
                    <td class="px-8 py-6">
                        @if($product->is_featured)
                        <span class="bg-blue-50 text-blue-600 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full">Yes</span>
                        @else
                        <span class="bg-gray-50 text-gray-400 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full">No</span>
                        @endif
                    </td>
                    <td class="px-8 py-6 flex space-x-4">
                        <a href="{{ route('admin.products.edit', $product) }}" class="text-gray-900 font-black text-xs uppercase tracking-widest hover:underline italic">Edit</a>
                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Delete this product?')">
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
<div class="mt-8">
</div>
@endsection
