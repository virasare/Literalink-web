<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Literalink</title>
</head>
    <body>
    {{--  Wadah utama dengan warna latar belakang  --}}
    <div class="background-color">
        {{--  Bar navigasi dengan padding dan layout horizontal  --}}
            <nav class="flex items-center justify-between bg-F9F9F9 border-b border-gray-200  shadow-sm p-6 lg:px-8" aria-label="Global">
                <!-- Logo and company name section -->
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Literalink</span>
                        <img 
                            class="h-12 w-auto"  
                            src="{{ asset('images/LogoLiteralink.png') }}"
                            alt="Literalink Logo"
                        >
                    </a>
                </div>
                <!-- Navigation links for larger screens -->
                <div class="hidden lg:flex lg:gap-x-10">
                    <!-- Explore Books -->
                    <a href="{{ route('explorebooks-public') }}"
                        class="text-sm font-semibold {{ request()->routeIs('explorebooks-public') ? 'text-gray-900 border-b-2 border-indigo-600 pb-1' : 'text-gray-600 hover:text-gray-900' }}">
                        Explore Books
                    </a>

                    <!-- Community ACTIVE -->
                    <a href="{{ route('community-public') }}"
                        class="text-sm font-semibold {{ request()->routeIs('community-public') ? 'text-indigo-600 border-b-2 border-indigo-600 pb-1' : 'text-gray-600 hover:text-gray-900' }}">
                        Community
                    </a>
                </div>

            <!-- Login link for larger screens -->
            <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:items-center lg:gap-x-4">
                <a href="{{ route('register') }}"
                    class="text-sm font-semibold text-gray-700 hover:text-gray-900">
                    Sign up
                </a>

                <!-- Login (button) -->
                <a href="{{ route('login') }}"
                    class="rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700 transition">
                    Log in
                </a>
            </div>

        </nav>
    </header>

    <div class="mx-auto max-w-2xl px-6 py-12 space-y-6">

    <main class="flex-1 overflow-y-auto p-6">
    
            <div class="max-w-6xl mx-auto px-6 py-8">
                {{-- <!-- BREADCRUMB -->
                <nav class="text-sm text-gray-500 mb-6">
                <ol class="flex items-center gap-2">
                    <li>
                    <a href="/explore" class="hover:text-blue-600">Explore Books</a>
                    </li>
                    <li>/</li>
                    <li>
                    <a href="/explore/self-improvement" class="hover:text-blue-600">
                        Self Improvement
                    </a>
                    </li>
                    <li>/</li>
                    <li class="text-gray-900 font-medium">
                    Atomic Habits
                    </li>
                </ol>
                </nav> --}}

            <!-- HERO -->
            <div class="flex gap-8">

                <!-- Cover -->
                <img src="/images/books/atomic-habits.jpg"
                    class="w-48 h-72 rounded-lg object-cover shadow"
                    alt="Book Cover">

                <!-- Info -->
                <div class="flex flex-col gap-3">
                <h1 class="text-3xl font-bold text-gray-900">
                    Atomic Habits
                </h1>

                <p class="text-gray-600">
                    by James Clear
                </p>

                <!-- Rating -->
                <div class="flex items-center gap-1 text-yellow-400">
                    ★★★★★
                    <span class="ml-2 text-sm text-gray-600">4.8</span>
                </div>

                <!-- Genre -->
                <div class="flex gap-2 text-sm">
                    <span class="px-2 py-1 bg-blue-100 text-blue-600 rounded">
                    Self Improvement
                    </span>
                    <span class="px-2 py-1 bg-green-100 text-green-600 rounded">
                    Free
                    </span>
                </div>

                <!-- CTA -->
                <button type="button"
                    onclick="window.location.href='{{ route('read') }}'"
                    class="mt-4 w-fit bg-blue-600 text-white px-6 py-3 rounded-lg
                                font-semibold hover:bg-blue-700 transition">
                    Read Now
                </button>
                </div>

            </div>

              <!-- SYNOPSIS -->
            <div class="mt-12">
                <h2 class="text-xl font-semibold text-gray-900 mb-3">
                Synopsis
                </h2>
                <p class="text-gray-700 leading-relaxed">
                Atomic Habits is a practical guide on how small changes
                can lead to remarkable results...
                </p>
            </div>

            <!-- ABOUT -->
            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-900 mb-3">
                About
                </h2>
                <p class="text-gray-700 leading-relaxed">
                Written by James Clear, Atomic Habits focuses on building
                good habits and breaking bad ones...
                </p>
            </div>

              <!-- NEXT SERIES -->
            <div class="mt-14">
                <h2 class="text-xl font-semibold text-gray-900 mb-4">
                Next in Series
                </h2>

                <div class="flex gap-4">
                <div class="w-40">
                    <img src="/images/books/series-2.jpg"
                        class="h-56 w-full object-cover rounded-lg">
                    <h3 class="mt-2 text-sm font-semibold">
                    Atomic Habits 2
                    </h3>
                </div>

                <div class="w-40">
                    <img src="/images/books/series-3.jpg"
                        class="h-56 w-full object-cover rounded-lg">
                    <h3 class="mt-2 text-sm font-semibold">
                    Atomic Habits 3
                    </h3>
                </div>
                </div>
            </div>
            
              <!-- REVIEWS -->
            <div class="mt-14">
                <h2 class="text-xl font-semibold text-gray-900 mb-4">
                Reviews
                </h2>

                <div class="space-y-4">

                <div class="border rounded-lg p-4">
                    <div class="flex items-center gap-3 mb-2">
                    <img src="/images/avatar.png"
                        class="w-8 h-8 rounded-full">
                    <div>
                        <p class="font-semibold text-sm">vira ariv</p>
                        <p class="text-yellow-400 text-xs">★★★★★</p>
                    </div>
                    </div>
                    <p class="text-gray-700 text-sm">
                    Buku ini bener-bener ngerubah cara aku bangun kebiasaan.
                    </p>
                </div>

                </div>
            </div>

            </div> <!-- END max-w -->


        </main>

    <footer class="bg-gray-75 border-t border-gray-200 mt-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-12">

            <div class="grid grid-cols-1 gap-12 md:grid-cols-3">
                
                <!-- LEFT -->
                <div>
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/LogoLiteralink.png') }}" class="h-8 w-20" alt="Literalink">
                        <span class="text-lg font-bold text-gray-900">Literalink</span>
                    </div>
                    <p class="mt-4 text-sm text-gray-600 max-w-xs">
                        A cozy place to explore, read, and share stories.
                    </p>
                </div>

                <!-- MIDDLE -->
                <div class="flex gap-16">
                    <div>
                        <h4 class="text-sm font-semibold text-gray-900">
                            Explore
                        </h4>
                        <ul class="mt-4 space-y-2 text-sm text-gray-600">
                            <li><a href="#" class="hover:text-gray-900">Books</a></li>
                            <li><a href="#" class="hover:text-gray-900">Community</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-sm font-semibold text-gray-900">
                            Legal
                        </h4>
                        <ul class="mt-4 space-y-2 text-sm text-gray-600">
                            <li><a href="#" class="hover:text-gray-900">Privacy Policy</a></li>
                            <li><a href="#" class="hover:text-gray-900">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>

                <!-- RIGHT -->
                <div class="text-sm text-gray-500 md:text-right">
                    <p>© 2026 Literalink</p>
                    <p class="mt-2">All rights reserved</p>
                </div>

            </div>

        </div>
    </footer>

    <script>js/script.cs</script>
</body>
</html>