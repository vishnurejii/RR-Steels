@extends('layouts.app')

@section('content')
<!-- Section 1: Cinematic Full-Screen Hero (Pinned) -->
<section id="hero" class="relative h-screen w-full flex items-center justify-center overflow-hidden bg-black text-white">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0" id="hero-bg">
        <img src="/assets/images/hero-steel.jpg" class="w-full h-full object-cover opacity-60" alt="Steel Foundry">
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    
    <!-- Centered Content -->
    <div class="relative z-10 text-center px-4" id="hero-content">
        <h1 class="text-4xl md:text-9xl font-black uppercase italic tracking-tighter" id="hero-title">
            RR <span class="text-transparent stroke-white" style="-webkit-text-stroke: 2px white;">STEELS</span>
        </h1>
        <p class="mt-6 text-xl md:text-3xl text-gray-300 font-light max-w-3xl mx-auto" id="hero-desc">
            Forging the future with premium industrial strength.
        </p>
        
        <!-- Scroll Down Indicator -->
        <div class="absolute -bottom-32 left-1/2 transform -translate-x-1/2 flex flex-col items-center opacity-0" id="scroll-indicator">
            <span class="text-xs uppercase tracking-[0.3em] font-bold text-gray-400 mb-4">Scroll Down</span>
            <div class="w-[2px] h-16 bg-gray-600 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1/2 bg-white animate-scroll-down"></div>
            </div>
        </div>
    </div>
</section>

<!-- Wrapper for the rest of the content to slide over the hero -->
<div class="relative z-20 bg-white" id="main-content">

    <!-- Section 1.2: Industrial Excellence (Stats & Building) -->
    <section class="py-32 bg-white overflow-hidden" id="excellence-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-20">
                <!-- Left: Branding & Text -->
                <div class="w-full lg:w-5/12 space-y-10" id="excellence-text">
                    <div class="relative">
                        <h2 class="text-5xl md:text-6xl font-black uppercase tracking-tighter leading-none text-gray-900 relative z-10">
                            Wholesale &amp; Retail <br> <span class="text-teal-600">Steel Distribution</span>
                        </h2>
                    </div>
                    <div class="space-y-6">
                        <p class="text-xl text-gray-700 font-bold uppercase tracking-widest italic border-l-4 border-teal-600 pl-6">
                            Serving Thrissur's Construction &amp; Industrial needs.
                        </p>
                        <p class="text-lg text-gray-600 font-light leading-relaxed">
                            Established in 2016, RR STEELSS has built a reputation for providing reliable steel products and dependable customer service. We operate in both wholesale and retail markets, catering to companies, fabricators, and individual customers across Kerala.
                        </p>
                    </div>
                    <div class="pt-6 border-t border-gray-100 flex items-center space-x-4">
                        <span class="w-12 h-[2px] bg-teal-600"></span>
                        <p class="text-xs font-black uppercase tracking-widest text-teal-600">
                            Thrissur's Trusted Steel Partner
                        </p>
                    </div>
                </div>

                <!-- Right: Hexagon Stats & Building -->
                <div class="w-full lg:w-7/12 flex flex-col md:flex-row items-center gap-12">
                    <div class="w-full md:w-1/2 order-2 md:order-1" id="excellence-visual">
                        <div class="relative rounded-[40px] overflow-hidden shadow-2xl h-[400px] md:h-[550px]">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1000" class="w-full h-full object-cover" alt="Steel Architecture">
                            <div class="absolute inset-0 bg-teal-900/20 mix-blend-overlay"></div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 grid grid-cols-2 gap-y-4 order-1 md:order-2" id="excellence-stats">
                        <div class="flex flex-col gap-4">
                            <div class="hexagon bg-teal-600 p-4 md:p-6 text-white flex flex-col items-center justify-center text-center shadow-lg">
                                <span class="text-xl md:text-2xl font-black italic">2016</span>
                                <span class="text-[8px] uppercase font-bold tracking-widest mt-1">Established</span>
                            </div>
                            <div class="hexagon bg-teal-800 p-4 md:p-6 text-white flex flex-col items-center justify-center text-center shadow-lg transform translate-x-6 md:translate-x-12 -mt-12">
                                <span class="text-xl md:text-2xl font-black italic">Thrissur</span>
                                <span class="text-[8px] uppercase font-bold tracking-widest mt-1">Kerala</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4 -mt-8">
                            <div class="hexagon bg-teal-700 p-4 md:p-6 text-white flex flex-col items-center justify-center text-center shadow-lg">
                                <span class="text-xl md:text-2xl font-black italic">8+ Yrs</span>
                                <span class="text-[8px] uppercase font-bold tracking-widest mt-1">Trust</span>
                            </div>
                            <div class="hexagon bg-teal-600 p-4 md:p-6 text-white flex flex-col items-center justify-center text-center shadow-lg transform translate-x-6 md:translate-x-12 -mt-12">
                                <span class="text-xl md:text-2xl font-black italic">100%</span>
                                <span class="text-[8px] uppercase font-bold tracking-widest mt-1">Quality</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 1.3: Featured Inventory Products -->
    <section class="py-24 bg-gray-50 overflow-hidden" id="inventory-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
                <div id="inventory-header">
                    <span class="text-teal-600 font-black uppercase tracking-[0.3em] text-sm mb-4 block">PREMIUM STOCK</span>
                    <h2 class="text-5xl md:text-7xl font-black uppercase tracking-tighter leading-none text-gray-900">
                        FEATURED <br> <span class="text-teal-600">INVENTORY.</span>
                    </h2>
                </div>
                <a href="{{ route('products.index') }}" class="group flex items-center space-x-4 bg-gray-900 text-white px-8 py-4 rounded-full font-bold uppercase tracking-widest text-xs hover:bg-teal-600 transition-all duration-300">
                    <span>Explore All Products</span>
                    <svg class="w-4 h-4 transform group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($featuredProducts as $product)
                <a href="{{ route('products.show', $product->slug) }}" 
                   class="group relative bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 inventory-card block">
                    <div class="aspect-square overflow-hidden relative bg-gray-100 inv-img-wrap">
                        <img src="{{ $product->image ?? 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?q=80&w=600' }}" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 inv-img" 
                             alt="{{ $product->name }}"
                             loading="eager"
                             decoding="async"
                             width="600" height="600"
                             onload="this.classList.add('inv-img--loaded')">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/40 transition-colors duration-500 flex items-center justify-center">
                            <span class="opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500 bg-white text-gray-900 px-6 py-3 rounded-full font-bold uppercase tracking-widest text-[10px]">
                                View Details
                            </span>
                        </div>
                    </div>
                    <div class="p-8">
                        <span class="text-[10px] font-black uppercase tracking-widest text-teal-600 mb-2 block">{{ $product->category->name ?? 'Industrial Steel' }}</span>
                        <h3 class="text-xl font-black uppercase tracking-tighter text-gray-900 mb-4 group-hover:text-teal-600 transition-colors">
                            {{ $product->name }}
                        </h3>
                        <div class="flex items-center justify-between">
                            <div class="w-12 h-[1px] bg-gray-200 group-hover:w-full group-hover:bg-teal-600 transition-all duration-500"></div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section 1.5: Our Story (Pinned Background + Moving Box) -->
    <section class="relative h-[200vh] w-full" id="story-trigger">
        <!-- Fixed Background (Pinned by GSAP) -->
        <div class="sticky top-0 h-screen w-full overflow-hidden" id="story-fixed-bg">
            <img src="https://www.nulondon.ac.uk/wp-content/uploads/2022/08/Business_BSc-scaled.jpg" 
                 class="w-full h-full object-cover" 
                 alt="City in Fog">
            <div class="absolute inset-0 bg-black/20"></div>
            
            <!-- The Movable Box -->
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                <div class="w-full max-w-4xl bg-white p-12 md:p-24 shadow-[0_50px_100px_-20px_rgba(0,0,0,0.5)] transform pointer-events-auto opacity-0" id="story-movable-box">
                    <div class="text-center">
                        <span class="text-sm font-black uppercase tracking-[0.5em] text-gray-400 mb-4 block">OUR STORY</span>
                        <h3 class="text-3xl md:text-7xl font-black uppercase tracking-tighter text-gray-900 leading-none">
                            SHAPING A <br> <span class="text-orange-500">STEEL-STRONG</span> <br> TOMORROW
                        </h3>
                        <div class="mt-12 w-20 h-1 bg-orange-500 mx-auto"></div>
                        <p class="mt-12 text-xl text-gray-600 font-light leading-relaxed">
                            Since 2016, RR STEELSS has been providing reliable steel distribution and supply solutions in Thrissur. We don't just supply materials; we build lasting relationships based on trust, quality, and consistent service excellence.
                        </p>
                        <div class="mt-12 flex justify-center space-x-8">
                            <div class="text-left">
                                <span class="block text-3xl font-black italic">2016</span>
                                <span class="text-[10px] uppercase tracking-widest font-bold text-gray-400">Established</span>
                            </div>
                            <div class="text-left border-l border-gray-100 pl-8">
                                <span class="block text-3xl font-black italic text-orange-500">8+</span>
                                <span class="text-[10px] uppercase tracking-widest font-bold text-gray-400">Years of Growth</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: 3D Scroll Transformation -->
    <section class="py-32 relative" id="transformation-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-20">
                <div class="w-full lg:w-1/2 perspective-2000">
                    <div class="relative rounded-[40px] overflow-hidden shadow-[0_50px_100px_-20px_rgba(0,0,0,0.3)]" id="reveal-image">
                        <img src="https://innsulekx.com/wp-content/uploads/2023/06/home-about-us-1.jpg" class="w-full h-[600px] object-cover" alt="Steel Manufacturing">
                        <div class="absolute inset-0 bg-orange-500/10 mix-blend-overlay"></div>
                    </div>
                </div>
                
                <div class="w-full lg:w-1/2 space-y-8" id="reveal-text">
                    <h2 class="text-6xl font-black uppercase italic tracking-tighter leading-none">
                        Unmatched <br> <span class="text-gray-300">Precision.</span>
                    </h2>
                    <div class="w-20 h-2 bg-gray-900"></div>
                    <p class="text-xl text-gray-600 font-light leading-relaxed">
                        Our steel products undergo rigorous testing to ensure they meet the highest global standards. Whether it's high-rise infrastructure or heavy machinery, we provide the core stability.
                    </p>
                    <div class="grid grid-cols-2 gap-8 pt-8">
                        <div class="bg-gray-50 p-8 rounded-3xl border border-gray-100">
                            <span class="text-4xl font-black italic block mb-2">99.9%</span>
                            <span class="text-xs uppercase tracking-widest text-gray-400 font-bold">Purity Grade</span>
                        </div>
                        <div class="bg-gray-50 p-8 rounded-3xl border border-gray-100">
                            <span class="text-4xl font-black italic block mb-2">ISO</span>
                            <span class="text-xs uppercase tracking-widest text-gray-400 font-bold">Certified Quality</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Sustainability & Community Excellence -->
    <section class="py-32 bg-white overflow-hidden" id="mission-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-24">
                <!-- Left: Green Architecture Visual -->
                <div class="w-full lg:w-1/2" id="mission-visual">
                    <div class="relative rounded-[40px] overflow-hidden shadow-2xl h-[700px] transform -rotate-2">
                        <img src="https://images.stockcake.com/public/c/1/1/c11628f7-ef7e-455b-9ddf-0a4647ae3df3_large/green-covered-office-building-stockcake.jpg" class="w-full h-full object-cover" alt="Sustainable Architecture">
                        <div class="absolute inset-0 bg-teal-900/10 mix-blend-multiply"></div>
                    </div>
                </div>

                <!-- Right: Mission Content -->
                <div class="w-full lg:w-1/2 space-y-12 relative" id="mission-text">
                    <!-- Large Background Text (Stylized ESG/RRS) -->
                    <div class="absolute -top-32 -right-12 select-none pointer-events-none opacity-[0.03]">
                        <span class="text-[300px] font-black leading-none">ESG</span>
                    </div>

                    <div class="space-y-6">
                        <div class="w-20 h-1 bg-teal-600 mb-8"></div>
                        <h2 class="text-4xl md:text-7xl font-black uppercase tracking-tighter leading-[0.9] text-gray-900">
                            CULTIVATING <br> COMMUNITY <br> <span class="text-teal-600">EXCELLENCE.</span>
                        </h2>
                    </div>

                    <div class="space-y-8 text-xl text-gray-600 font-light leading-relaxed">
                        <p>
                            Our growth is rooted in our profound sense of unwavering responsibility — a commitment to nurturing our ecosystem, empowering our invaluable team members, and adhering to steadfast policies that propel our unwavering progress.
                        </p>
                        <p>
                            This is not just a promise; it's a resolute declaration that defines our ethos and propels us towards an unparalleled future where industry and environment coexist in harmony.
                        </p>
                    </div>

                    <div class="pt-8">
                        <a href="{{ route('about') }}" class="group flex items-center space-x-4 text-teal-600 font-black uppercase tracking-widest text-sm">
                            <span>Read More</span>
                            <div class="w-12 h-[2px] bg-teal-600 transform group-hover:scale-x-150 transition-transform origin-left"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Product Partners (Video Gallery) -->
    <section class="py-32 bg-white overflow-hidden" id="partners-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <h2 class="text-5xl font-black uppercase italic tracking-tighter">Our Product <span class="text-gray-300">Partners</span></h2>
                    <p class="text-gray-500 mt-4 uppercase tracking-widest text-sm font-bold">Trusted by industry leaders</p>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                @foreach($productVideos as $video)
                <div class="video-card group">
                    <div class="relative aspect-video rounded-[32px] overflow-hidden shadow-2xl bg-gray-900">
                        <iframe 
                            class="absolute inset-0 w-full h-full opacity-80 group-hover:opacity-100 transition-opacity duration-500" 
                            src="{{ $video->embed_url }}" 
                            title="{{ $video->company_name }}" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" 
                            allowfullscreen>
                        </iframe>
                        <div class="absolute inset-0 pointer-events-none border-2 border-gray-900/10 rounded-[32px]"></div>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <h3 class="text-xl font-black uppercase italic tracking-tight">{{ $video->company_name }}</h3>
                        <div class="w-12 h-[2px] bg-orange-500 transform origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Section 5: Customer Reviews -->
    <section class="py-32 bg-gray-50 overflow-hidden" id="reviews-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-24">
                <h2 class="text-5xl font-black uppercase italic tracking-tighter mb-4" id="reviews-header">
                    What Our <span class="text-blue-600">Clients</span> Say
                </h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($reviews as $review)
                <div class="review-card bg-white p-10 rounded-[40px] shadow-sm border border-gray-100 relative group hover:shadow-2xl transition-all duration-500">
                    <div class="absolute -top-6 left-10 w-12 h-12 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg shadow-blue-600/30">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="flex text-yellow-400 mb-6">
                        @for($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star {{ $i <= $review->rating ? '' : 'text-gray-200' }}"></i>
                        @endfor
                    </div>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8 italic">
                        "{{ $review->comment }}"
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-gray-200 overflow-hidden">
                            <img src="{{ $review->avatar_url }}" class="w-full h-full object-cover" alt="{{ $review->customer_name }}">
                        </div>
                        <div>
                            <h4 class="font-black uppercase text-sm tracking-tighter">{{ $review->customer_name }}</h4>
                            <p class="text-xs text-gray-400 uppercase font-bold">{{ $review->company_name }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

                @if($reviews->isEmpty())
                    <div class="col-span-full text-center py-20 bg-white rounded-[40px] border border-dashed border-gray-200">
                        <p class="text-gray-400 uppercase tracking-widest text-sm font-bold">No reviews yet. Be the first to share your experience!</p>
                    </div>
                @endif
            </div>

            <!-- Submit Review Form -->
            <div class="mt-32 max-w-2xl mx-auto bg-white p-12 rounded-[50px] shadow-2xl border border-gray-100" id="submit-review-form">
                <div class="text-center mb-10">
                    <h3 class="text-3xl font-black uppercase italic tracking-tighter mb-2">Share Your Experience</h3>
                    <p class="text-gray-400 text-sm font-bold uppercase tracking-widest">We value your feedback</p>
                </div>

                @if(session('success'))
                    <div class="mb-8 p-4 bg-green-50 text-green-700 rounded-2xl text-center font-bold">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('reviews.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2">Full Name</label>
                            <input type="text" name="customer_name" required class="w-full bg-gray-50 border-none rounded-2xl px-6 py-4 focus:ring-2 focus:ring-blue-600 transition-all" placeholder="Enter your name">
                        </div>
                        <div>
                            <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2">Company / Location</label>
                            <input type="text" name="company_name" class="w-full bg-gray-50 border-none rounded-2xl px-6 py-4 focus:ring-2 focus:ring-blue-600 transition-all" placeholder="e.g. SK Constructions">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2">Rating</label>
                        <div class="flex gap-4 items-center">
                            <div class="rating-input flex gap-2 text-2xl cursor-pointer">
                                <input type="hidden" name="rating" id="rating_value" value="5">
                                @for($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star text-yellow-400 star-btn" data-value="{{ $i }}"></i>
                                @endfor
                            </div>
                            <span class="text-sm font-bold text-gray-400 uppercase tracking-widest" id="rating_text">Excellent</span>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-black uppercase tracking-widest text-gray-400 mb-2">Your Review</label>
                        <textarea name="comment" rows="4" required class="w-full bg-gray-50 border-none rounded-2xl px-6 py-4 focus:ring-2 focus:ring-blue-600 transition-all" placeholder="Tell us what you think about our products and service..."></textarea>
                    </div>

                    <button type="submit" class="w-full bg-gray-900 text-white font-black uppercase tracking-widest py-5 rounded-2xl hover:bg-blue-600 transition-all transform hover:scale-[1.02] active:scale-95 shadow-xl">
                        Submit Review
                    </button>
                </form>
            </div>
        </div>
    </section>

    <script>
        // Star Rating Logic
        document.querySelectorAll('.star-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const val = this.dataset.value;
                document.getElementById('rating_value').value = val;
                
                // Update stars visual
                document.querySelectorAll('.star-btn').forEach((s, index) => {
                    if (index < val) {
                        s.classList.add('text-yellow-400');
                        s.classList.remove('text-gray-200');
                    } else {
                        s.classList.remove('text-yellow-400');
                        s.classList.add('text-gray-200');
                    }
                });

                // Update text
                const texts = ['Poor', 'Fair', 'Good', 'Very Good', 'Excellent'];
                document.getElementById('rating_text').innerText = texts[val - 1];
            });
        });
    </script>
        </div>
    </section>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        gsap.registerPlugin(ScrollTrigger);

        // Responsiveness: MatchMedia
        const mm = gsap.matchMedia();

        mm.add("(min-width: 1024px)", () => {
            // Pin the Hero Section on Desktop
            ScrollTrigger.create({
                trigger: "#hero",
                start: "top top",
                end: "+=100%",
                pin: true,
                pinSpacing: true,
            });

            // Parallax on the hero background while pinned
            gsap.to('#hero-bg', {
                scrollTrigger: {
                    trigger: "#hero",
                    start: "top top",
                    end: "+=100%",
                    scrub: true
                },
                y: 150,
                scale: 1.1
            });
        });

        // Initial Hero Animation (All devices)
        const tl = gsap.timeline();
        tl.from('#hero-title', { y: 100, opacity: 0, duration: 1.5, ease: 'power4.out' })
          .from('#hero-desc', { y: 50, opacity: 0, duration: 1.5, ease: 'power3.out' }, '-=1')
          .to('#scroll-indicator', { opacity: 1, y: -20, duration: 1, ease: 'power2.out' }, '-=0.5');

        // Excellence Section Animations
        gsap.from('#excellence-text', {
            scrollTrigger: {
                trigger: '#excellence-section',
                start: 'top 80%',
            },
            x: -100,
            opacity: 0,
            duration: 1.2,
            ease: 'power3.out'
        });

        gsap.from('#excellence-visual', {
            scrollTrigger: {
                trigger: '#excellence-section',
                start: 'top 80%',
            },
            scale: 0.8,
            opacity: 0,
            duration: 1.5,
            ease: 'back.out(1.7)'
        });

        gsap.from('.hexagon', {
            scrollTrigger: {
                trigger: '#excellence-stats',
                start: 'top 80%',
            },
            scale: 0,
            opacity: 0,
            stagger: 0.1,
            duration: 1,
            ease: 'elastic.out(1, 0.5)'
        });

        // Reveal the main content wrapper
        gsap.from('#main-content', {
            scrollTrigger: {
                trigger: "#main-content",
                start: "top bottom", 
                end: "top top",
                scrub: true
            },
            boxShadow: "0px -20px 50px rgba(0,0,0,0.5)"
        });

        // Inventory Section Animations
        gsap.from('#inventory-header', {
            scrollTrigger: {
                trigger: '#inventory-section',
                start: 'top 80%',
            },
            y: 50,
            opacity: 0,
            duration: 1,
            ease: 'power3.out'
        });

        gsap.fromTo('.inventory-card',
            { y: 30, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                stagger: 0.08,
                duration: 0.5,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: '#inventory-section',
                    start: 'top 90%',
                    toggleActions: 'play none none none',
                    invalidateOnRefresh: true,
                    onEnter: () => {
                        // Safety net: ensure all cards are visible even if GSAP stalls
                        document.querySelectorAll('.inventory-card').forEach(c => c.style.opacity = '');
                    }
                }
            }
        );

        // Our Story: Movable Box Animation
        const storyTl = gsap.timeline({
            scrollTrigger: {
                trigger: '#story-trigger',
                start: 'top top',
                end: 'bottom bottom',
                scrub: 1
            }
        });

        storyTl.fromTo('#story-movable-box', 
            { y: '100vh', opacity: 0 }, 
            { y: '0', opacity: 1, duration: 1 }
        )
        .to('#story-movable-box', { y: '-50vh', opacity: 0, duration: 1, delay: 0.5 });

        // Section 2: 3D Reveal
        gsap.from('#reveal-image', {
            scrollTrigger: {
                trigger: '#transformation-section',
                start: 'top 80%',
                end: 'top 30%',
                scrub: 1
            },
            rotateX: 20,
            rotateY: -20,
            scale: 0.9,
            opacity: 0
        });

        gsap.from('#reveal-text', {
            scrollTrigger: {
                trigger: '#transformation-section',
                start: 'top 70%',
            },
            x: 50,
            opacity: 0,
            duration: 1.2,
            ease: 'power3.out'
        });

        // Section 3: Mission Reveal
        gsap.from('#mission-visual', {
            scrollTrigger: {
                trigger: '#mission-section',
                start: 'top 80%',
            },
            x: -100,
            rotate: -10,
            opacity: 0,
            duration: 1.5,
            ease: 'power4.out'
        });

        gsap.from('#mission-text', {
            scrollTrigger: {
                trigger: '#mission-section',
                start: 'top 70%',
            },
            y: 100,
            opacity: 0,
            duration: 1.5,
            ease: 'power3.out'
        });

        // Section 4: Video Cards Reveal
        const videoCards = document.querySelectorAll('.video-card');
        videoCards.forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: '#partners-section',
                    start: 'top 70%',
                },
                y: 50,
                opacity: 0,
                duration: 1,
                ease: 'power3.out',
                delay: i * 0.1
            });
        });

        // Section 5: Reviews Reveal
        gsap.from('#reviews-header', {
            scrollTrigger: {
                trigger: '#reviews-section',
                start: 'top 80%',
            },
            y: 30,
            opacity: 0,
            duration: 1,
            ease: 'power3.out'
        });

        const reviewCards = document.querySelectorAll('.review-card');
        reviewCards.forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: '#reviews-section',
                    start: 'top 70%',
                },
                y: 60,
                opacity: 0,
                scale: 0.9,
                duration: 1,
                ease: 'power4.out',
                delay: i * 0.2
            });
        });

        // Navbar scroll effect
        ScrollTrigger.create({
            trigger: "#main-content",
            start: "top 80px",
            onEnter: () => {
                const nav = document.getElementById('navbar');
                if(nav) nav.classList.add('bg-gray-900', 'shadow-xl');
            },
            onLeaveBack: () => {
                const nav = document.getElementById('navbar');
                if(nav) nav.classList.remove('bg-gray-900', 'shadow-xl');
            }
        });
    });
</script>

<style>
    .hexagon {
        width: 160px;
        height: 180px;
        clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    }

    .perspective-2000 { perspective: 2000px; }
    .perspective-1000 { perspective: 1000px; }
    .translate-z-20 { transform: translateZ(20px); }
    .stroke-white { -webkit-text-stroke: 2px white; }
    
    @keyframes scroll-down {
        0% { transform: translateY(-100%); }
        100% { transform: translateY(200%); }
    }
    .animate-scroll-down {
        animation: scroll-down 2s infinite cubic-bezier(0.65, 0, 0.35, 1);
    }

    /* ── Inventory card: always visible by default (GSAP animates from this) ── */
    .inventory-card {
        opacity: 1;  /* CSS fallback — GSAP will override at runtime */
    }

    /* ── Inventory image fast-load styles ──────────────────── */
    /* Shimmer skeleton while image is fetching */
    .inv-img-wrap {
        background: linear-gradient(90deg, #e5e7eb 25%, #f3f4f6 50%, #e5e7eb 75%);
        background-size: 200% 100%;
        animation: inv-shimmer 1.2s infinite linear;
    }
    @keyframes inv-shimmer {
        0%   { background-position: 200% 0; }
        100% { background-position: -200% 0; }
    }
    /* Image starts invisible; fades in once loaded */
    .inv-img {
        opacity: 0;
        transition: opacity 0.35s ease;
    }
    .inv-img--loaded {
        opacity: 1;
    }
    /* Stop shimmer as soon as image is ready */
    .inv-img-wrap:has(.inv-img--loaded) {
        animation: none;
        background: #e5e7eb;
    }
</style>
@endsection
