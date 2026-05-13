@extends('layouts.admin')

@section('content')
<div class="mb-12">
    <a href="{{ route('admin.products.index') }}" class="text-gray-400 font-black text-xs uppercase tracking-widest hover:text-gray-900 transition-colors">&larr; Back to Products</a>
    <h1 class="text-4xl font-black uppercase italic tracking-tighter mt-4">Edit <span class="text-gray-400">Product</span></h1>
</div>

<div class="max-w-4xl bg-white rounded-3xl shadow-sm border border-gray-100 p-12">
    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="space-y-8">
                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2">Product Name</label>
                    <input type="text" name="name" value="{{ old('name', $product->name) }}" required 
                        class="w-full bg-gray-50 border-2 border-gray-100 rounded-xl px-4 py-3 focus:border-gray-900 outline-none transition-all">
                    @error('name') <p class="mt-2 text-xs text-red-500 font-bold uppercase">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2">Category</label>
                    <select name="category_id" required class="w-full bg-gray-50 border-2 border-gray-100 rounded-xl px-4 py-3 focus:border-gray-900 outline-none transition-all">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->_id }}" {{ $product->category_id == $category->_id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id') <p class="mt-2 text-xs text-red-500 font-bold uppercase">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2">Price (Optional)</label>
                    <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" 
                        class="w-full bg-gray-50 border-2 border-gray-100 rounded-xl px-4 py-3 focus:border-gray-900 outline-none transition-all">
                </div>

                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2">Upload New Image (Optional)</label>
                    <input type="file" name="image_file" class="w-full bg-gray-50 border-2 border-gray-100 rounded-xl px-4 py-3 focus:border-gray-900 outline-none transition-all">
                </div>

                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2">OR New Image URL</label>
                    <input type="url" name="image_url" placeholder="https://..." class="w-full bg-gray-50 border-2 border-gray-100 rounded-xl px-4 py-3 focus:border-gray-900 outline-none transition-all">
                </div>

                <div class="flex items-center gap-3">
                    <input type="checkbox" name="is_featured" value="1" id="is_featured" {{ $product->is_featured ? 'checked' : '' }} class="w-5 h-5 text-gray-900 border-gray-300 rounded focus:ring-gray-900">
                    <label for="is_featured" class="text-sm font-bold uppercase tracking-widest text-gray-600">Featured Product</label>
                </div>
            </div>

            <div class="space-y-8">
                <div>
                    <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2">Description</label>
                    <textarea name="description" rows="8" required 
                        class="w-full bg-gray-50 border-2 border-gray-100 rounded-xl px-4 py-3 focus:border-gray-900 outline-none transition-all">{{ old('description', $product->description) }}</textarea>
                    @error('description') <p class="mt-2 text-xs text-red-500 font-bold uppercase">{{ $message }}</p> @enderror
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-gray-900 text-white py-4 rounded-xl font-black uppercase tracking-widest text-sm hover:bg-teal-600 transition-colors shadow-lg shadow-gray-200">
                        Update Product
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
