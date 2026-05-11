<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - R R Steels</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 antialiased">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white flex-shrink-0">
            <div class="p-8">
                <span class="text-xl font-black tracking-tighter uppercase italic">
                    R R <span class="text-gray-500">STEELS</span> ADMIN
                </span>
            </div>
            <nav class="mt-8 px-4 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-3 rounded-xl hover:bg-gray-800 transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-gray-800 font-bold' : '' }}">Dashboard</a>
                <a href="{{ route('admin.products.index') }}" class="block px-4 py-3 rounded-xl hover:bg-gray-800 transition-colors {{ request()->routeIs('admin.products.*') ? 'bg-gray-800 font-bold' : '' }}">Products</a>
                <a href="{{ route('admin.categories.index') }}" class="block px-4 py-3 rounded-xl hover:bg-gray-800 transition-colors {{ request()->routeIs('admin.categories.*') ? 'bg-gray-800 font-bold' : '' }}">Categories</a>
                <a href="{{ route('admin.inquiries.index') }}" class="block px-4 py-3 rounded-xl hover:bg-gray-800 transition-colors {{ request()->routeIs('admin.inquiries.*') ? 'bg-gray-800 font-bold' : '' }}">Inquiries</a>
                <a href="{{ route('admin.videos.index') }}" class="block px-4 py-3 rounded-xl hover:bg-gray-800 transition-colors {{ request()->routeIs('admin.videos.*') ? 'bg-gray-800 font-bold' : '' }}">Videos</a>
                <div class="pt-8 border-t border-gray-800 mt-8">
                    <a href="{{ route('home') }}" class="block px-4 py-3 rounded-xl hover:bg-gray-800 transition-colors text-gray-500">View Website</a>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-grow p-12">
            @yield('content')
        </main>
    </div>
</body>
</html>
