<nav id="navbar" class="w-full z-50 transition-all duration-500 {{ request()->routeIs('home') ? 'fixed top-0 bg-transparent' : 'sticky top-0 bg-gray-900 shadow-xl' }} text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between min-h-[110px] items-center">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center py-2">
                    <img src="/assets/logo/logo.png?v=3" alt="RR STEELS Logo" class="h-20 w-20 md:h-24 md:w-24 rounded-full object-cover border-2 border-teal-600 shadow-xl transition-transform hover:scale-105">
                    <div class="w-1 h-12 bg-gray-700 transform -skew-x-12 ml-4"></div>
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
                <button type="button" id="mobile-menu-btn" class="text-gray-400 hover:text-white focus:outline-none">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 bg-gray-900/95 z-[60] flex flex-col items-center justify-center space-y-8 transform translate-x-full transition-transform duration-500 ease-in-out md:hidden">
        <button id="close-menu-btn" class="absolute top-6 right-6 text-gray-400 hover:text-white">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <div class="mb-8">
            <img src="/assets/logo/logo.png?v=3" alt="RR STEELS Logo" class="h-24 w-24 rounded-full object-cover border-4 border-teal-600 shadow-2xl">
        </div>
        <a href="{{ route('home') }}" class="mobile-nav-link text-3xl font-black italic tracking-tighter uppercase">HOME</a>
        <a href="{{ route('products.index') }}" class="mobile-nav-link text-3xl font-black italic tracking-tighter uppercase">PRODUCTS</a>
        <a href="{{ route('about') }}" class="mobile-nav-link text-3xl font-black italic tracking-tighter uppercase">ABOUT US</a>
        <a href="{{ route('contact') }}" class="mobile-nav-link text-3xl font-black italic tracking-tighter uppercase">CONTACT</a>
        <a href="{{ route('quote.request') }}" class="bg-teal-600 px-10 py-4 rounded-full font-black uppercase tracking-widest text-sm">REQUEST QUOTE</a>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('close-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const body = document.body;
        const navLinks = document.querySelectorAll('.mobile-nav-link');

        const toggleMenu = (open) => {
            if (open) {
                menu.classList.remove('translate-x-full');
                body.classList.add('mobile-menu-open');
            } else {
                menu.classList.add('translate-x-full');
                body.classList.remove('mobile-menu-open');
            }
        };

        btn.addEventListener('click', () => toggleMenu(true));
        closeBtn.addEventListener('click', () => toggleMenu(false));
        navLinks.forEach(link => link.addEventListener('click', () => toggleMenu(false)));

        // Change navbar bg on scroll for home page
        @if(request()->routeIs('home'))
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('bg-gray-900', 'shadow-xl');
                navbar.classList.remove('bg-transparent');
            } else {
                navbar.classList.remove('bg-gray-900', 'shadow-xl');
                navbar.classList.add('bg-transparent');
            }
        });
        @endif
    });
</script>
