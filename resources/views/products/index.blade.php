@extends('layouts.app')

@section('title', 'Product Catalogue - R R Steels')

@section('content')
<section class="bg-gray-900 py-24 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-5xl font-black uppercase italic tracking-tighter">Product <span class="text-gray-500">Catalogue</span></h1>
        <p class="text-gray-400 mt-4 uppercase tracking-widest text-sm font-bold">Comprehensive range of industrial steel</p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Filters Sidebar -->
            <aside class="w-full lg:w-1/4">
                <div class="sticky top-32">
                    <div class="mb-8">
                        <h4 class="text-lg font-black uppercase italic mb-6">Search</h4>
                        <form action="{{ route('products.index') }}" method="GET">
                            <div class="relative">
                                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search products..." class="w-full bg-gray-50 border-2 border-gray-100 rounded-xl px-4 py-3 focus:border-gray-900 outline-none transition-all">
                                <button type="submit" class="absolute right-3 top-3.5 text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="mb-8">
                        <h4 class="text-lg font-black uppercase italic mb-6">Categories</h4>
                        <div class="space-y-3">
                            <a href="{{ route('products.index') }}" class="block px-4 py-3 rounded-xl {{ !request('category') ? 'bg-gray-900 text-white font-bold' : 'bg-gray-50 text-gray-600 hover:bg-gray-100' }} transition-all">
                                All Products
                            </a>
                            @foreach($categories as $category)
                            <a href="{{ route('products.index', ['category' => $category->slug]) }}" class="block px-4 py-3 rounded-xl {{ request('category') == $category->slug ? 'bg-gray-900 text-white font-bold' : 'bg-gray-50 text-gray-600 hover:bg-gray-100' }} transition-all">
                                {{ $category->name }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Product Grid -->
            <div class="w-full lg:w-3/4">
                @if($products->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($products as $product)
                    <div class="industrial-card group">
                        <div class="h-56 overflow-hidden bg-gray-200">
                            <img src="{{ $product->image ?? 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?q=80&w=1000' }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="{{ $product->name }}">
                        </div>
                        <div class="p-6">
                            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ $product->category->name ?? 'Uncategorized' }}</span>
                            <h3 class="text-lg font-bold mt-1 uppercase">{{ $product->name }}</h3>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="text-gray-400 text-sm italic font-medium">Contact for price</span>
                                <a href="{{ route('products.show', $product->slug) }}" class="text-gray-900 font-black text-sm uppercase tracking-tighter hover:underline italic">Details &rarr;</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <div class="mt-16">
                    {{ $products->links() }}
                </div>
                @else
                <div class="text-center py-24 bg-gray-50 rounded-3xl">
                    <svg class="w-16 h-16 text-gray-200 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <p class="text-gray-500 uppercase tracking-widest font-bold">No products found matching your criteria.</p>
                    <a href="{{ route('products.index') }}" class="mt-6 inline-block text-gray-900 font-black hover:underline italic uppercase">Reset Filters</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

@if(isset($hardwareGoods) && $hardwareGoods->count() > 0)
<section class="py-24 bg-gray-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-end justify-between mb-12">
            <div>
                <h2 class="text-4xl font-black uppercase italic tracking-tighter">Other <span class="text-gray-400">Hardware Goods</span></h2>
                <p class="text-gray-500 mt-2 uppercase tracking-widest text-xs font-bold">Essential Industrial Components</p>
            </div>
            <a href="{{ route('products.index', ['category' => 'other-hardware-goods']) }}" class="text-gray-900 font-black uppercase italic hover:underline">View All &rarr;</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($hardwareGoods as $item)
            <div class="bg-white p-8 rounded-[40px] border border-gray-100 shadow-sm hover:shadow-xl transition-all group relative overflow-hidden">
                <div class="absolute top-0 right-0 p-6 opacity-5 group-hover:opacity-10 transition-opacity">
                    <svg class="w-24 h-24 text-gray-900" fill="currentColor" viewBox="0 0 24 24"><path d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6.5 6.5 9 1.7 4.2C.6 6.6 1 9.6 3 11.6c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.3-2.3c.4-.4.4-1.1 0-1.5z"/></svg>
                </div>
                <span class="text-[10px] font-bold text-orange-500 uppercase tracking-widest">Hardware</span>
                <h3 class="text-xl font-bold mt-2 uppercase leading-tight">{{ $item->name }}</h3>
                <p class="text-gray-500 text-sm mt-4 line-clamp-2">{{ $item->description }}</p>
                <div class="mt-8">
                    <a href="{{ route('products.show', $item->slug) }}" class="inline-flex items-center text-xs font-black uppercase tracking-tighter hover:gap-2 transition-all italic">
                        Details <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
