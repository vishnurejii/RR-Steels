@extends('layouts.app')

@section('title', 'Request a Quote - R R Steels')

@section('content')
<section class="py-24 bg-gray-50 min-h-screen">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-black uppercase italic tracking-tighter">Request a <span class="text-gray-400">Quote</span></h1>
            <p class="text-gray-500 mt-4 uppercase tracking-widest text-sm font-bold">Fill out the form below and we'll get back to you within 24 hours.</p>
        </div>

        <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 border border-gray-100">
            @if(session('success'))
            <div class="mb-8 p-6 bg-green-50 border-l-4 border-green-500 text-green-700 rounded-xl flex items-center space-x-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <p class="font-bold uppercase tracking-widest text-sm">{{ session('success') }}</p>
            </div>
            @endif

            <form action="{{ route('inquiries.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label class="text-xs font-black uppercase tracking-widest text-gray-400">Full Name</label>
                        <input type="text" name="name" required class="w-full bg-gray-50 border-2 border-gray-100 rounded-2xl px-6 py-4 focus:border-gray-900 outline-none transition-all" placeholder="John Doe">
                    </div>
                    
                    <div class="space-y-2">
                        <label class="text-xs font-black uppercase tracking-widest text-gray-400">Phone Number</label>
                        <input type="text" name="phone" required class="w-full bg-gray-50 border-2 border-gray-100 rounded-2xl px-6 py-4 focus:border-gray-900 outline-none transition-all" placeholder="+1 (234) 567-890">
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-black uppercase tracking-widest text-gray-400">Target Product</label>
                        <select name="product_id" class="w-full bg-gray-50 border-2 border-gray-100 rounded-2xl px-6 py-4 focus:border-gray-900 outline-none transition-all appearance-none">
                            <option value="">General Inquiry</option>
                            @php $allProducts = \App\Models\Product::all(); @endphp
                            @foreach($allProducts as $p)
                            <option value="{{ $p->id }}" {{ (isset($product) && $product->id == $p->id) ? 'selected' : '' }}>{{ $p->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-black uppercase tracking-widest text-gray-400">Approximate Quantity (Optional)</label>
                        <input type="number" name="quantity" class="w-full bg-gray-50 border-2 border-gray-100 rounded-2xl px-6 py-4 focus:border-gray-900 outline-none transition-all" placeholder="e.g. 100">
                    </div>

                    <div class="col-span-1 md:col-span-2 space-y-2">
                        <label class="text-xs font-black uppercase tracking-widest text-gray-400">Your Message / Requirements</label>
                        <textarea name="message" rows="5" required class="w-full bg-gray-50 border-2 border-gray-100 rounded-2xl px-6 py-4 focus:border-gray-900 outline-none transition-all" placeholder="Tell us more about your project needs..."></textarea>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <button type="submit" class="btn-primary px-16">Submit Inquiry</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
