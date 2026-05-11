@extends('layouts.admin')

@section('content')
<div class="mb-12">
    <h1 class="text-4xl font-black uppercase italic tracking-tighter">Manage <span class="text-gray-400">Inquiries</span></h1>
</div>

<div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-gray-50 text-xs font-black uppercase tracking-widest text-gray-400">
                <tr>
                    <th class="px-8 py-4">Customer</th>
                    <th class="px-8 py-4">Product</th>
                    <th class="px-8 py-4">Quantity</th>
                    <th class="px-8 py-4">Message</th>
                    <th class="px-8 py-4">Status</th>
                    <th class="px-8 py-4">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($inquiries as $inquiry)
                <tr>
                    <td class="px-8 py-6">
                        <div class="font-bold text-gray-900">{{ $inquiry->name }}</div>
                        <div class="text-xs text-gray-400 uppercase tracking-widest font-bold">{{ $inquiry->phone }}</div>
                    </td>
                    <td class="px-8 py-6">
                        <span class="text-sm font-medium text-gray-600">{{ $inquiry->product ? $inquiry->product->name : 'General' }}</span>
                    </td>
                    <td class="px-8 py-6 text-sm text-gray-500 font-bold">
                        {{ $inquiry->quantity ?? '-' }}
                    </td>
                    <td class="px-8 py-6">
                        <p class="text-sm text-gray-500 line-clamp-1 max-w-xs">{{ $inquiry->message }}</p>
                    </td>
                    <td class="px-8 py-6">
                        <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest {{ $inquiry->status == 'pending' ? 'bg-red-50 text-red-600' : 'bg-green-50 text-green-600' }}">
                            {{ $inquiry->status }}
                        </span>
                    </td>
                    <td class="px-8 py-6">
                        <button class="text-gray-900 font-black text-xs uppercase tracking-widest hover:underline italic">Details</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
