@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-4xl font-black uppercase italic tracking-tighter">Manage <span class="text-blue-600">Reviews</span></h1>
                <p class="text-gray-400 text-xs font-bold uppercase tracking-widest mt-2">Moderate customer feedback</p>
            </div>
            <a href="{{ route('admin.dashboard') }}" class="bg-white px-6 py-2 rounded-xl shadow-sm border border-gray-100 text-sm font-bold uppercase tracking-widest hover:bg-gray-50 transition-all">Back to Dashboard</a>
        </div>

        @if(session('success'))
            <div class="mb-8 p-4 bg-green-50 text-green-700 rounded-2xl font-bold">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-[40px] shadow-xl overflow-hidden border border-gray-100">
            <table class="w-full text-left">
                <thead class="bg-gray-900 text-white uppercase text-xs tracking-widest font-black">
                    <tr>
                        <th class="px-8 py-6">Customer</th>
                        <th class="px-8 py-6">Rating</th>
                        <th class="px-8 py-6">Comment</th>
                        <th class="px-8 py-6">Status</th>
                        <th class="px-8 py-6 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($reviews as $review)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-3">
                                <img src="{{ $review->avatar_url }}" class="w-10 h-10 rounded-full">
                                <div>
                                    <div class="font-black text-sm uppercase">{{ $review->customer_name }}</div>
                                    <div class="text-xs text-gray-400">{{ $review->company_name }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex text-yellow-400 text-xs">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star {{ $i <= $review->rating ? '' : 'text-gray-200' }}"></i>
                                @endfor
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <p class="text-sm text-gray-600 line-clamp-2">{{ $review->comment }}</p>
                        </td>
                        <td class="px-8 py-6">
                            @if($review->is_approved)
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-black uppercase tracking-widest">Live</span>
                            @else
                                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-[10px] font-black uppercase tracking-widest">Pending</span>
                            @endif
                        </td>
                        <td class="px-8 py-6 text-right space-x-2">
                            @if(!$review->is_approved)
                            <form action="{{ route('admin.reviews.approve', $review->id) }}" method="POST" class="inline">
                                @csrf
                                <button type="submit" class="text-green-600 hover:text-green-800 font-black uppercase text-[10px] tracking-widest">Approve</button>
                            </form>
                            @endif
                            <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 font-black uppercase text-[10px] tracking-widest" onclick="return confirm('Delete this review?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            @if($reviews->isEmpty())
                <div class="p-20 text-center text-gray-400 uppercase tracking-widest font-bold">
                    No reviews to show.
                </div>
            @endif
        </div>
        
        <div class="mt-8">
            {{ $reviews->links() }}
        </div>
    </div>
</div>
@endsection
