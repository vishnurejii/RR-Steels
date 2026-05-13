@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#0a0a0a] flex items-center justify-center px-4 py-12 relative overflow-hidden">
    <!-- Background Decorative Elements -->
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-blue-500/10 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-blue-600/10 rounded-full blur-[120px]"></div>
    </div>

    <div class="max-w-md w-full relative z-10" data-aos="fade-up">
        <!-- Logo Section -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold tracking-tighter text-white mb-2">
                RR <span class="text-blue-500">STEELS</span>
            </h1>
            <p class="text-gray-400 font-medium tracking-wide uppercase text-xs">Admin Portal Access</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white/[0.03] backdrop-blur-xl border border-white/10 rounded-2xl p-8 shadow-2xl">
            <form action="{{ route('login.post') }}" method="POST" class="space-y-6">
                @csrf
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50 transition-all"
                        placeholder="admin@rrsteels.in">
                    @error('email')
                        <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-2">Password</label>
                    <input type="password" name="password" id="password" required
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500/50 transition-all"
                        placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center text-gray-400 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded border-white/10 bg-white/5 text-blue-500 focus:ring-offset-[#0a0a0a]">
                        <span class="ml-2">Remember me</span>
                    </label>
                    <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">Forgot password?</a>
                </div>

                <button type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3 rounded-xl shadow-lg shadow-blue-600/20 transition-all active:scale-[0.98]">
                    Sign In to Dashboard
                </button>
            </form>
        </div>

        <!-- Footer -->
        <p class="text-center mt-8 text-gray-500 text-sm">
            &copy; {{ date('Y') }} RR STEELSS Thrissur. All rights reserved.
        </p>
    </div>
</div>

<style>
    body {
        background-color: #0a0a0a;
    }
    .navbar {
        display: none;
    }
</style>
@endsection
