<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'RR STEELSS - Premium Steel Retail')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Preconnect to image CDNs for faster inventory loads -->
    <link rel="preconnect" href="https://images.unsplash.com">
    <link rel="dns-prefetch" href="https://images.unsplash.com">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            overflow-x: hidden;
        }
        .industrial-gradient {
            background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
        }
        .steel-accent {
            background: linear-gradient(90deg, #9ca3af 0%, #4b5563 100%);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 antialiased selection:bg-gray-900 selection:text-white">
    <div class="min-h-screen flex flex-col">
        <x-navbar />

        <main class="flex-grow">
            @yield('content')
        </main>

        <x-footer />
    </div>

    <!-- GSAP for 3D Scroll Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/919846656868" target="_blank" class="fixed bottom-8 right-8 bg-green-500 text-white p-4 rounded-full shadow-2xl hover:scale-110 transition-transform z-50">
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.588-5.946 0-6.556 5.332-11.891 11.891-11.891 3.181 0 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.481 8.403 0 6.556-5.332 11.891-11.891 11.891-2.011 0-3.986-.51-5.747-1.474l-6.246 1.692zm6.108-3.413l.363.216c1.554.921 3.35 1.408 5.183 1.408 5.617 0 10.187-4.57 10.187-10.187 0-2.721-1.06-5.28-2.983-7.203-1.924-1.923-4.481-2.984-7.204-2.984-5.617 0-10.187-4.57-10.187 10.188 0 2.008.529 3.969 1.529 5.672l.237.406-1.01 3.693 3.785-1.029zm10.741-7.14c-.302-.15-1.786-.881-2.062-1.015-.277-.133-.478-.2-.678.1-.2.3-.778 1-.954 1.2-.176.2-.352.226-.654.076-.302-.15-1.276-.47-2.43-1.499-.899-.801-1.505-1.791-1.681-2.091-.176-.3-.019-.462.132-.611.135-.134.302-.35.452-.525.151-.175.202-.3.302-.5.101-.2.05-.375-.025-.525-.075-.15-.678-1.635-.93-2.245-.244-.595-.491-.513-.678-.523-.176-.01-.377-.013-.578-.013-.2 0-.527.075-.803.375-.276.3-1.054 1.03-1.054 2.512s1.08 2.912 1.23 3.112c.15.2 2.126 3.245 5.15 4.554.72.31 1.28.496 1.718.635.723.23 1.381.197 1.9.12.58-.087 1.786-.73 2.038-1.435.252-.705.252-1.31.176-1.435-.075-.125-.277-.2-.579-.35z"/></svg>
    </a>
</body>
</html>
