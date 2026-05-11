@extends('layouts.admin')

@section('content')
<div class="mb-12">
    <h1 class="text-4xl font-black uppercase italic tracking-tighter">Dashboard <span class="text-gray-400">Overview</span></h1>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8 mb-12">
    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
        <span class="text-xs font-black uppercase tracking-widest text-gray-400">Products</span>
        <div class="text-4xl font-black mt-2">{{ $stats['products'] }}</div>
    </div>
    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
        <span class="text-xs font-black uppercase tracking-widest text-gray-400">Categories</span>
        <div class="text-4xl font-black mt-2">{{ $stats['categories'] }}</div>
    </div>
    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
        <span class="text-xs font-black uppercase tracking-widest text-gray-400">Inquiries</span>
        <div class="text-4xl font-black mt-2">{{ $stats['inquiries'] }}</div>
    </div>
    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 relative group">
        <span class="text-xs font-black uppercase tracking-widest text-gray-400">Reviews</span>
        <div class="text-4xl font-black mt-2">{{ $stats['reviews'] }}</div>
        <a href="{{ route('admin.reviews.index') }}" class="absolute inset-0"></a>
    </div>
    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 relative group">
        <span class="text-xs font-black uppercase tracking-widest text-gray-400">Pending Reviews</span>
        <div class="text-4xl font-black mt-2 {{ $stats['pending_reviews'] > 0 ? 'text-blue-600' : '' }}">{{ $stats['pending_reviews'] }}</div>
        <a href="{{ route('admin.reviews.index') }}" class="absolute inset-0"></a>
    </div>
</div>

<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="px-8 py-6 border-b border-gray-100 flex justify-between items-center">
        <h3 class="text-lg font-black uppercase italic">Recent Inquiries</h3>
        <a href="{{ route('admin.inquiries.index') }}" class="text-xs font-bold uppercase tracking-widest hover:underline">View All</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-gray-50 text-xs font-black uppercase tracking-widest text-gray-400">
                <tr>
                    <th class="px-8 py-4">Customer</th>
                    <th class="px-8 py-4">Product</th>
                    <th class="px-8 py-4">Date</th>
                    <th class="px-8 py-4">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($recentInquiries as $inquiry)
                <tr>
                    <td class="px-8 py-6">
                        <div class="font-bold">{{ $inquiry->name }}</div>
                        <div class="text-xs text-gray-400">{{ $inquiry->phone }}</div>
                    </td>
                    <td class="px-8 py-6">
                        {{ $inquiry->product ? $inquiry->product->name : 'General Inquiry' }}
                    </td>
                    <td class="px-8 py-6 text-sm text-gray-500">
                        {{ $inquiry->created_at->diffForHumans() }}
                    </td>
                    <td class="px-8 py-6">
                        <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest {{ $inquiry->status == 'pending' ? 'bg-red-50 text-red-600' : 'bg-green-50 text-green-600' }}">
                            {{ $inquiry->status }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
