@extends('layouts.app')

@section('title', 'About Us - R R Steels')

@section('content')

{{-- ═══════════════════════════════════════════
     HERO BANNER
══════════════════════════════════════════════ --}}
<section class="relative h-[420px] overflow-hidden bg-gray-900">
    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1600"
         class="w-full h-full object-cover opacity-30" alt="R R Steels">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
        <span class="text-teal-400 font-black uppercase tracking-[0.4em] text-xs mb-4 block">Since 2016</span>
        <h1 class="text-6xl md:text-8xl font-black uppercase italic tracking-tighter text-white leading-none">
            About <span class="text-transparent" style="-webkit-text-stroke:2px #14b8a6;">RR STEELS</span>
        </h1>
        <p class="text-gray-400 mt-6 uppercase tracking-widest text-sm font-bold">
            Trusted Steel Distribution in Thrissur, Kerala
        </p>
    </div>
    <!-- Breadcrumb -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex items-center gap-2 text-xs text-gray-400 font-bold uppercase tracking-widest">
        <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
        <span>›</span>
        <span class="text-white">About</span>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     TAB NAVIGATION
══════════════════════════════════════════════ --}}
<nav class="sticky top-[72px] z-30 bg-white border-b border-gray-100 shadow-sm" id="about-tabs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex overflow-x-auto scrollbar-hide gap-0">
            <a href="#our-story"   class="about-tab active-tab" data-target="our-story">OUR STORY</a>
            <a href="#milestone"   class="about-tab"            data-target="milestone">MILESTONE</a>
            <a href="#brand-connect" class="about-tab"          data-target="brand-connect">BRAND CONNECT</a>
            <a href="#our-values"  class="about-tab"            data-target="our-values">OUR VALUES</a>
            <a href="#why-us"      class="about-tab"            data-target="why-us">WHY CHOOSE US</a>
            <a href="#certifications" class="about-tab"         data-target="certifications">CERTIFICATIONS</a>
            <a href="#contact-location" class="about-tab"       data-target="contact-location">CONTACT & LOCATION</a>
        </div>
    </div>
</nav>

{{-- ═══════════════════════════════════════════
     1. OUR STORY
══════════════════════════════════════════════ --}}
<section id="our-story" class="py-28 bg-white about-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-20 items-center">
            <!-- Image -->
            <div class="w-full lg:w-1/2 relative">
                <div class="absolute -top-6 -left-6 w-32 h-32 bg-teal-50 rounded-[2rem] -z-10"></div>
                <img src="/assets/images/about-1.jpeg"
                     class="rounded-[2rem] shadow-2xl w-full object-cover h-[500px]" alt="RR STEELS Warehouse"
                     loading="eager" decoding="async">
                <div class="absolute -bottom-8 -right-8 bg-gray-900 text-white p-8 rounded-[1.5rem] shadow-2xl hidden md:block">
                    <span class="block text-4xl font-black italic">8+</span>
                    <span class="text-[10px] font-black uppercase tracking-widest text-gray-400">Years of Growth</span>
                </div>
            </div>
            <!-- Text -->
            <div class="w-full lg:w-1/2 space-y-8">
                <div>
                    <span class="text-teal-600 font-black uppercase tracking-[0.3em] text-xs mb-3 block">Our Story</span>
                    <h2 class="text-5xl font-black uppercase italic tracking-tighter leading-none text-gray-900">
                        Built on <br><span class="text-teal-600">Strength &</span><br> Trust
                    </h2>
                </div>
                <div class="w-16 h-1 bg-teal-600"></div>
                <div class="space-y-5 text-gray-600 leading-relaxed text-lg font-light">
                    <p>Established in 2016 in Thrissur, Kerala, RR STEELS has built a reputation for providing reliable steel products and dependable customer service to a wide range of clients across the region. Operating in both wholesale and retail markets, we cater to construction companies, fabricators, contractors, and individual customers.</p>
                    <p>The business specializes in the distribution of quality steel materials used in infrastructure, manufacturing, and fabrication works. Over the years, we have focused on maintaining strong relationships with customers by ensuring product availability, competitive pricing, and timely delivery.</p>
                    <p>One of our key strengths is the ability to serve customers of different scales. Our wholesale division supports bulk supply for commercial projects, while our retail division provides flexible options for local builders and household customers.</p>
                </div>
                <div class="grid grid-cols-3 gap-6 pt-4 border-t border-gray-100">
                    <div>
                        <span class="block text-3xl font-black italic text-gray-900">2016</span>
                        <span class="text-[10px] font-black uppercase tracking-widest text-gray-400">Established</span>
                    </div>
                    <div class="border-l border-gray-100 pl-6">
                        <span class="block text-3xl font-black italic text-gray-900">Thrissur</span>
                        <span class="text-[10px] font-black uppercase tracking-widest text-gray-400">Location</span>
                    </div>
                    <div class="border-l border-gray-100 pl-6">
                        <span class="block text-3xl font-black italic text-gray-900">Wholesale</span>
                        <span class="text-[10px] font-black uppercase tracking-widest text-gray-400">&amp; Retail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     2. MILESTONE
══════════════════════════════════════════════ --}}
<section id="milestone" class="py-28 bg-gray-950 text-white about-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <span class="text-teal-400 font-black uppercase tracking-[0.3em] text-xs mb-3 block">Our Journey</span>
            <h2 class="text-6xl font-black uppercase italic tracking-tighter text-white">Key <span class="text-teal-400">Milestones</span></h2>
        </div>
        <!-- Timeline -->
        <div class="relative">
            <div class="absolute left-1/2 -translate-x-1/2 top-0 bottom-0 w-[2px] bg-gray-800 hidden md:block"></div>
            <div class="space-y-16">

                @php
                $milestones = [
                    ['year'=>'2016','title'=>'The Beginning','desc'=>'RR STEELSS established in Thrissur, Kerala, focusing on reliable steel distribution.','side'=>'left'],
                    ['year'=>'2018','title'=>'Market Expansion','desc'=>'Expanded presence in both wholesale and retail sectors across the Thrissur region.','side'=>'right'],
                    ['year'=>'2020','title'=>'Infrastructure Focus','desc'=>'Became a key supplier for major infrastructure and manufacturing projects in Kerala.','side'=>'left'],
                    ['year'=>'2022','title'=>'Customer Trust','desc'=>'Achieved significant growth through consistent service and competitive pricing strategies.','side'=>'right'],
                    ['year'=>'2024','title'=>'Digital Presence','desc'=>'Launched comprehensive online platform to better serve our diverse customer base.','side'=>'left'],
                ];
                @endphp

                @foreach($milestones as $m)
                <div class="flex flex-col md:flex-row items-center gap-8 {{ $m['side']==='right' ? 'md:flex-row-reverse' : '' }}">
                    <div class="w-full md:w-5/12 {{ $m['side']==='left' ? 'md:text-right' : 'md:text-left' }}">
                        <div class="inline-block bg-gray-900 border border-gray-800 rounded-[1.5rem] p-8 hover:border-teal-600 transition-colors duration-300">
                            <span class="text-teal-400 font-black text-xs uppercase tracking-widest block mb-2">{{ $m['year'] }}</span>
                            <h3 class="text-2xl font-black uppercase italic tracking-tight mb-3">{{ $m['title'] }}</h3>
                            <p class="text-gray-400 font-light leading-relaxed text-sm">{{ $m['desc'] }}</p>
                        </div>
                    </div>
                    <!-- Dot -->
                    <div class="hidden md:flex w-2/12 justify-center">
                        <div class="w-5 h-5 bg-teal-500 rounded-full border-4 border-gray-950 shadow-lg shadow-teal-500/30 z-10"></div>
                    </div>
                    <div class="w-full md:w-5/12"></div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     3. BRAND CONNECT
══════════════════════════════════════════════ --}}
<section id="brand-connect" class="py-28 bg-gray-50 about-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <span class="text-teal-600 font-black uppercase tracking-[0.3em] text-xs mb-3 block">Our Partners</span>
            <h2 class="text-6xl font-black uppercase italic tracking-tighter text-gray-900">Brand <span class="text-teal-600">Connect</span></h2>
            <p class="mt-6 text-gray-500 font-light max-w-2xl mx-auto text-lg">
                Watch the official brand stories of our steel partners — the manufacturers behind every bar, beam, and sheet we supply.
            </p>
        </div>

        @if($productVideos->isNotEmpty())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($productVideos as $video)
            <div class="group bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-1">
                {{-- YouTube embed --}}
                <div class="relative aspect-video bg-gray-900 rounded-t-[2rem] overflow-hidden">
                    <iframe
                        class="absolute inset-0 w-full h-full opacity-90 group-hover:opacity-100 transition-opacity duration-500"
                        src="{{ $video->embed_url }}?rel=0&modestbranding=1"
                        title="{{ $video->company_name }}"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen
                        loading="lazy">
                    </iframe>
                </div>

                {{-- Company name footer --}}
                <div class="p-6 flex items-center justify-between">
                    <div>
                        <span class="text-[10px] font-black uppercase tracking-widest text-teal-600 block mb-1">Brand Partner</span>
                        <h3 class="text-lg font-black uppercase italic tracking-tight text-gray-900 group-hover:text-teal-700 transition-colors">
                            {{ $video->company_name }}
                        </h3>
                    </div>
                    <div class="w-10 h-[2px] bg-orange-500 origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-20 text-gray-400">
            <svg class="w-16 h-16 mx-auto mb-4 opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.069A1 1 0 0121 8.882v6.236a1 1 0 01-1.447.894L15 14M3 8a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"/>
            </svg>
            <p class="font-black uppercase tracking-widest text-sm">No brand videos added yet.</p>
            <p class="text-xs mt-2">Admin can add brand partner videos from the dashboard.</p>
        </div>
        @endif
    </div>
</section>

{{-- ═══════════════════════════════════════════
     4. OUR VALUES
══════════════════════════════════════════════ --}}
<section id="our-values" class="py-28 bg-white about-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-20 items-center">
            <div class="w-full lg:w-1/2 space-y-8">
                <div>
                    <span class="text-teal-600 font-black uppercase tracking-[0.3em] text-xs mb-3 block">What We Stand For</span>
                    <h2 class="text-6xl font-black uppercase italic tracking-tighter leading-none text-gray-900">
                        Our Vision <br><span class="text-teal-600">&amp; Mission</span>
                    </h2>
                </div>
                <div class="w-16 h-1 bg-teal-600"></div>
                <p class="text-gray-500 font-light text-lg leading-relaxed">These principles aren't words on a wall — they are the DNA of every transaction, every delivery, and every relationship we build.</p>

                @php
                $values = [
                    ['title'=>'Vision','desc'=>'To become one of the most trusted and leading steel distribution companies in Kerala through quality products, strong customer relationships, and consistent service excellence.','icon'=>'👁️'],
                    ['title'=>'Mission','desc'=>'To deliver high-quality steel products at competitive prices while ensuring reliability, customer satisfaction, and long-term business relationships.','icon'=>'🚀'],
                    ['title'=>'Quality','desc'=>'Focus on delivering quality steel materials used in construction, infrastructure, and fabrication.','icon'=>'🏅'],
                    ['title'=>'Reliability','desc'=>'Building customer trust through market experience and commitment to consistent service standards.','icon'=>'🤝'],
                ];
                @endphp

                <div class="space-y-5">
                    @foreach($values as $v)
                    <div class="flex gap-5 p-6 rounded-2xl bg-gray-50 hover:bg-teal-50 transition-colors duration-300 group">
                        <div class="text-3xl shrink-0">{{ $v['icon'] }}</div>
                        <div>
                            <h4 class="font-black uppercase tracking-wide text-gray-900 mb-1 group-hover:text-teal-700 transition-colors">{{ $v['title'] }}</h4>
                            <p class="text-sm text-gray-500 font-light">{{ $v['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="w-full lg:w-1/2 relative">
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-teal-100 rounded-[2rem] -z-10"></div>
                <img src="/assets/images/about-2.jpeg"
                     class="rounded-[2rem] shadow-2xl w-full object-cover h-[540px]" alt="RR STEELS Facility"
                     loading="lazy" decoding="async">
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     5. WHY CHOOSE US
══════════════════════════════════════════════ --}}
<section id="why-us" class="py-28 bg-gray-950 text-white about-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <span class="text-teal-400 font-black uppercase tracking-[0.3em] text-xs mb-3 block">The R R Difference</span>
            <h2 class="text-6xl font-black uppercase italic tracking-tighter">Why <span class="text-teal-400">Choose Us?</span></h2>
        </div>

        @php
        $reasons = [
            ['no'=>'01','title'=>'Quality Products','desc'=>'We specialize in distributing premium steel materials for construction and fabrication.'],
            ['no'=>'02','title'=>'Competitive Pricing','desc'=>'Direct supply model ensures we offer the most competitive rates in the Thrissur market.'],
            ['no'=>'03','title'=>'Reliable Service','desc'=>'Maintaining strong relationships through availability and consistent service standards.'],
            ['no'=>'04','title'=>'Timely Delivery','desc'=>'Ensuring your projects stay on schedule with our dependable logistics and distribution.'],
            ['no'=>'05','title'=>'Wholesale & Retail','desc'=>'Flexible options for both bulk commercial orders and local household requirements.'],
            ['no'=>'06','title'=>'Market Experience','desc'=>'Growing steadily since 2016 through customer trust and deep market knowledge.'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($reasons as $r)
            <div class="group bg-gray-900 border border-gray-800 rounded-[2rem] p-8 hover:border-teal-600 hover:bg-gray-900/80 transition-all duration-300">
                <span class="text-teal-500 font-black text-4xl italic block mb-4">{{ $r['no'] }}</span>
                <h3 class="text-lg font-black uppercase tracking-tight text-white mb-3">{{ $r['title'] }}</h3>
                <div class="w-8 h-[2px] bg-teal-600 mb-4 group-hover:w-16 transition-all duration-300"></div>
                <p class="text-gray-400 font-light text-sm leading-relaxed">{{ $r['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     6. CERTIFICATIONS & STANDARDS
══════════════════════════════════════════════ --}}
<section id="certifications" class="py-28 bg-white about-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <span class="text-teal-600 font-black uppercase tracking-[0.3em] text-xs mb-3 block">Quality Assured</span>
            <h2 class="text-6xl font-black uppercase italic tracking-tighter text-gray-900">Certifications <br><span class="text-teal-600">&amp; Standards</span></h2>
            <p class="mt-6 text-gray-500 font-light max-w-xl mx-auto text-lg">Every product we stock and every process we follow is backed by internationally recognised quality standards.</p>
        </div>

        @php
        $certs = [
            ['title'=>'ISO 9001:2015','body'=>'Quality Management System','desc'=>'Certified quality management ensuring consistent product traceability and process compliance across all operations.','badge'=>'ISO'],
            ['title'=>'BIS / IS Standards','body'=>'Bureau of Indian Standards','desc'=>'All TMT bars, structural steel, and pipes comply with relevant Indian Standards for construction-grade material.','badge'=>'BIS'],
            ['title'=>'Mill Test Certificates','body'=>'Third-Party Verified','desc'=>'Every consignment is accompanied by original mill test certificates verifiable directly with the manufacturer.','badge'=>'MTC'],
            ['title'=>'GST Compliant','body'=>'Government of India','desc'=>'Fully GST registered and compliant — all invoices include HSN codes and proper tax documentation.','badge'=>'GST'],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            @foreach($certs as $c)
            <div class="flex gap-8 items-start p-8 rounded-[2rem] border border-gray-100 bg-gray-50 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 group">
                <div class="shrink-0 w-20 h-20 bg-teal-600 rounded-2xl flex items-center justify-center shadow-lg shadow-teal-600/20">
                    <span class="text-white font-black text-xs uppercase tracking-wider text-center leading-tight">{{ $c['badge'] }}</span>
                </div>
                <div>
                    <span class="text-teal-600 font-black uppercase tracking-widest text-[10px] block mb-1">{{ $c['body'] }}</span>
                    <h3 class="text-xl font-black uppercase tracking-tight text-gray-900 mb-2 group-hover:text-teal-700 transition-colors">{{ $c['title'] }}</h3>
                    <p class="text-gray-500 font-light text-sm leading-relaxed">{{ $c['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     7. CONTACT & LOCATION
══════════════════════════════════════════════ --}}
<section id="contact-location" class="py-28 bg-gray-50 about-section">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <span class="text-teal-600 font-black uppercase tracking-[0.3em] text-xs mb-3 block">Reach Us</span>
            <h2 class="text-6xl font-black uppercase italic tracking-tighter text-gray-900">Contact <span class="text-teal-600">&amp; Location</span></h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            <!-- Contact Cards -->
            <div class="space-y-6">
                @php
                $contacts = [
                    ['icon'=>'📍','label'=>'Address','value'=>'RR STEELSs, Kanamkulanghara Road, Koorkenchery, Thrissur, Kerala 680007'],
                    ['icon'=>'📞','label'=>'Phone','value'=>'+91 98466 56868 (WA) / 8089187504'],
                    ['icon'=>'✉️','label'=>'Email','value'=>'rrsteelk16@gmail.com'],
                    ['icon'=>'🕐','label'=>'Working Hours','value'=>'Monday – Saturday: 9:00 AM – 6:30 PM'],
                ];
                @endphp

                @foreach($contacts as $c)
                <div class="flex gap-6 items-start bg-white rounded-2xl p-7 border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300">
                    <span class="text-3xl shrink-0">{{ $c['icon'] }}</span>
                    <div>
                        <span class="text-[10px] font-black uppercase tracking-widest text-teal-600 block mb-1">{{ $c['label'] }}</span>
                        <p class="text-gray-700 font-medium leading-relaxed">{{ $c['value'] }}</p>
                    </div>
                </div>
                @endforeach

                <a href="{{ route('contact') }}" class="mt-4 inline-flex items-center gap-3 bg-gray-900 text-white px-8 py-4 rounded-full font-black uppercase tracking-widest text-xs hover:bg-teal-600 transition-all duration-300">
                    <span>Send an Enquiry</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <!-- Map Embed -->
            <div class="rounded-[2rem] overflow-hidden shadow-2xl border border-gray-100 h-[500px]">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.90074211111!2d76.2113837!3d10.5085075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7ef79866eebb9%3A0x46358b186f32baef!2sRR%20Steels!5e0!3m2!1sen!2sin!4v1715360946123!5m2!1sen!2sin"
                    class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     STYLES & SCRIPTS
══════════════════════════════════════════════ --}}
<style>
    .about-tab {
        display: inline-flex;
        align-items: center;
        padding: 1.1rem 1.5rem;
        font-size: 0.65rem;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 0.15em;
        color: #6b7280;
        border-bottom: 3px solid transparent;
        white-space: nowrap;
        transition: color 0.2s, border-color 0.2s;
        text-decoration: none;
    }
    .about-tab:hover,
    .about-tab.active-tab {
        color: #0d9488;
        border-bottom-color: #f97316;
    }
    /* hide scrollbar on tab nav */
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.about-tab');
    const sections = document.querySelectorAll('.about-section');
    const tabNav = document.getElementById('about-tabs');
    const offset = tabNav ? tabNav.offsetHeight + 72 : 120;

    // Smooth-scroll on tab click
    tabs.forEach(tab => {
        tab.addEventListener('click', e => {
            e.preventDefault();
            const target = document.getElementById(tab.dataset.target);
            if (target) {
                window.scrollTo({ top: target.offsetTop - offset, behavior: 'smooth' });
            }
        });
    });

    // Highlight active tab on scroll
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                tabs.forEach(t => t.classList.remove('active-tab'));
                const active = document.querySelector(`.about-tab[data-target="${entry.target.id}"]`);
                if (active) {
                    active.classList.add('active-tab');
                    active.scrollIntoView({ block: 'nearest', inline: 'center', behavior: 'smooth' });
                }
            }
        });
    }, { rootMargin: `-${offset}px 0px -60% 0px`, threshold: 0 });

    sections.forEach(s => observer.observe(s));
});
</script>

@endsection
