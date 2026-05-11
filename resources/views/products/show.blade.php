@extends('layouts.app')

@section('title', $product->name . ' - R R Steels')

@section('content')
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumbs -->
        <nav class="flex mb-8 text-xs font-bold uppercase tracking-widest text-gray-400">
            <a href="{{ route('home') }}" class="hover:text-gray-900 transition-colors">Home</a>
            <span class="mx-2">/</span>
            <a href="{{ route('products.index') }}" class="hover:text-gray-900 transition-colors">Products</a>
            <span class="mx-2">/</span>
            <span class="text-gray-900">{{ $product->name }}</span>
        </nav>

        <div class="flex flex-col lg:flex-row gap-16">
            <!-- Image Gallery -->
            <div class="w-full lg:w-1/2">
                <div class="bg-gray-100 rounded-3xl overflow-hidden aspect-square shadow-inner">
                    <img src="{{ $product->image ?? 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=1000' }}" class="w-full h-full object-cover" alt="{{ $product->name }}">
                </div>
            </div>

            <!-- Product Details -->
            <div class="w-full lg:w-1/2">
                <span class="text-sm font-black text-gray-400 uppercase tracking-[0.3em]">{{ $product->category->name }}</span>
                <h1 class="text-5xl font-black uppercase italic tracking-tighter mt-4 leading-tight">{{ $product->name }}</h1>
                
                <div class="mt-8 space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-2 h-10 bg-gray-900"></div>
                        <span class="text-2xl font-bold uppercase italic text-gray-400">Specification Overview</span>
                    </div>
                    
                    <p class="text-gray-600 leading-relaxed text-lg font-light">
                        {{ $product->description }}
                    </p>

                    @if($product->sizes)
                    <div class="py-8 border-y border-gray-100">
                        <h4 class="text-sm font-black uppercase tracking-widest text-gray-900 mb-4">Available Sizes</h4>
                        <div class="flex flex-wrap gap-3">
                            @foreach($product->sizes as $size)
                            <span class="px-4 py-2 bg-gray-50 border-2 border-gray-100 rounded-xl text-sm font-bold text-gray-700 uppercase tracking-widest">{{ $size }}</span>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <div class="py-8">
                        <p class="text-sm text-gray-400 uppercase tracking-widest font-bold mb-6">Interested in this product?</p>
                        <a href="{{ route('quote.request', ['product_id' => $product->id]) }}" class="btn-primary w-full flex items-center justify-center space-x-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <span>Request Pricing & Details</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products -->
@if($relatedProducts->count() > 0)
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-black uppercase italic tracking-tighter mb-12">Related <span class="text-gray-400">Products</span></h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($relatedProducts as $item)
            <div class="industrial-card group">
                <div class="h-48 overflow-hidden bg-gray-200">
                    <img src="{{ $item->image ?? 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=1000' }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="{{ $item->name }}">
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-bold uppercase">{{ $item->name }}</h3>
                    <a href="{{ route('products.show', $item->slug) }}" class="mt-4 inline-block text-gray-900 font-black text-sm uppercase tracking-tighter hover:underline italic">View &rarr;</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
