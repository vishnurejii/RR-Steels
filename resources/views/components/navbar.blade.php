<nav id="navbar" class="w-full z-50 transition-all duration-500 {{ request()->routeIs('home') ? 'fixed top-0 bg-transparent' : 'sticky top-0 bg-gray-900 shadow-xl' }} text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <span class="text-2xl font-extrabold tracking-tighter uppercase italic">
                        R R <span class="text-gray-400">STEELS</span>
                    </span>
                    <div class="w-2 h-8 bg-gray-500 transform -skew-x-12"></div>
                </a>
            </div>
            
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="font-semibold hover:text-gray-400 transition-colors">HOME</a>
                <a href="{{ route('products.index') }}" class="font-semibold hover:text-gray-400 transition-colors">PRODUCTS</a>
                <a href="{{ route('about') }}" class="font-semibold hover:text-gray-400 transition-colors">ABOUT US</a>
                <a href="{{ route('contact') }}" class="font-semibold hover:text-gray-400 transition-colors">CONTACT</a>
                <a href="{{ route('quote.request') }}" class="bg-gray-700 hover:bg-gray-600 px-6 py-2 rounded-full font-bold transition-all transform hover:scale-105">REQUEST QUOTE</a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button type="button" class="text-gray-400 hover:text-white focus:outline-none">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
