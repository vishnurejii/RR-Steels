@extends('layouts.app')

@section('title', 'Contact Us - RR STEELS')

@section('content')
<section class="bg-gray-900 py-24 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-5xl font-black uppercase italic tracking-tighter">Get In <span class="text-gray-500">Touch</span></h1>
        <p class="text-gray-400 mt-4 uppercase tracking-widest text-sm font-bold">We're here to answer your technical and sales queries</p>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
            <!-- Contact Details -->
            <div class="lg:col-span-1 space-y-12">
                <div>
                    <h4 class="text-lg font-black uppercase italic mb-6">Our Office</h4>
                    <p class="text-gray-500 leading-relaxed font-light">
                        RR STEELS, Kanamkulanghara Road,<br>
                        Koorkenchery, Thrissur, Kerala 680007
                    </p>
                </div>
                
                <div>
                    <h4 class="text-lg font-black uppercase italic mb-6">Sales & Support</h4>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-gray-50 rounded-xl flex items-center justify-center text-gray-900">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <span class="text-gray-600 font-bold">+91 98466 56868</span>
                        </div>
                        <div class="flex items-center space-x-4 pl-14 text-sm opacity-70">
                            <span class="text-gray-500 font-medium">Sec: 8089187504</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-gray-50 rounded-xl flex items-center justify-center text-gray-900">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <span class="text-gray-600 font-bold">rrsteelk16@gmail.com</span>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-black uppercase italic mb-6">Business Hours</h4>
                    <ul class="space-y-2 text-sm text-gray-500 font-bold uppercase tracking-widest">
                        <li class="flex justify-between"><span>Mon - Sat</span> <span>09:00 - 18:30</span></li>
                        <li class="flex justify-between"><span>Sunday</span> <span class="text-red-500">Closed</span></li>
                    </ul>
                </div>
            </div>

            <!-- Map & Contact Link -->
            <div class="lg:col-span-2 space-y-8">
                <div class="bg-gray-100 rounded-3xl h-[400px] overflow-hidden shadow-inner grayscale contrast-125">
                    <!-- Placeholder for Map -->
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.90074211111!2d76.2113837!3d10.5085075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7ef79866eebb9%3A0x46358b186f32baef!2sRR%20Steels!5e0!3m2!1sen!2sin!4v1715360946123!5m2!1sen!2sin" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
                
                <div class="bg-gray-900 p-8 rounded-3xl text-white flex flex-col md:flex-row items-center justify-between gap-8">
                    <div>
                        <h4 class="text-2xl font-black uppercase italic tracking-tighter">Need a quick answer?</h4>
                        <p class="text-gray-400 font-light mt-2">Chat with our sales team instantly on WhatsApp.</p>
                    </div>
                    <a href="https://wa.me/919846656868" target="_blank" class="bg-green-500 hover:bg-green-600 px-8 py-4 rounded-2xl font-black uppercase tracking-widest transition-all flex items-center space-x-3">
                        <span>WhatsApp Now</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
