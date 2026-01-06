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

    <!-- PAGE CONTENT -->
    <main class="flex-1 overflow-y-auto p-6">
        <div class="max-w-6xl mx-auto px-6 py-8">

            <!-- HERO -->
            <div class="flex flex-col md:flex-row gap-8">

                <!-- Cover -->
                <img src="{{ $book['cover'] }}"
                    class="w-52 h-80 rounded-xl object-cover shadow-lg"
                    alt="{{ $book['title'] }}">

                <!-- Info -->
                <div class="flex flex-col gap-4 flex-1">

                    <div class="flex justify-between items-start">
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900">
                                {{ $book['title'] }}
                            </h1>

                            <p class="text-gray-600 mt-1">
                                by {{ $book['author'] }}
                            </p>
                        </div>

                        <!-- SAVE BUTTON -->
                        <button
                            class="text-xl p-2 rounded-full border
                                hover:bg-blue-50 hover:text-blue-600 transition"
                            title="Save Book">
                            💾
                        </button>
                    </div>

                    <!-- Rating -->
                    <div class="flex items-center gap-2 text-yellow-400">
                        {{ str_repeat('★', $book['rating']) }}
                        <span class="text-sm text-gray-500">
                            ({{ $book['rating'] }}/5)
                        </span>
                    </div>

                    <!-- Genre + Free -->
                    <div class="flex flex-wrap gap-2 text-sm">
                        @foreach ($book['genre'] as $g)
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full">
                                {{ $g }}
                            </span>
                        @endforeach

                        @if ($book['is_free'])
                            <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full">
                                Free
                            </span>
                        @endif
                    </div>

                    <!-- CTA -->
                    <div class="flex gap-4 mt-4">
                        <button
                            class="bg-blue-600 text-white px-6 py-3 rounded-lg
                                font-semibold hover:bg-blue-700 transition">
                            Read Now
                        </button>
                    </div>

                    <!-- Meta Info -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6 text-sm text-gray-600">
                        <div>
                            <p class="font-semibold">Pages</p>
                            <p>{{ $book['pages'] }}</p>
                        </div>
                        <div>
                            <p class="font-semibold">Language</p>
                            <p>{{ $book['language'] }}</p>
                        </div>
                        <div>
                            <p class="font-semibold">Publisher</p>
                            <p>{{ $book['publisher'] }}</p>
                        </div>
                        <div>
                            <p class="font-semibold">Year</p>
                            <p>{{ $book['published_year'] }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- SYNOPSIS -->
            <div class="mt-12">
                <h2 class="text-xl font-semibold text-gray-900 mb-3">
                    Synopsis
                </h2>
                <p class="text-gray-700 leading-relaxed">
                    {{ $book['synopsis'] }}
                </p>
            </div>

            <!-- ABOUT -->
            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-900 mb-3">
                    About This Book
                </h2>
                <p class="text-gray-700 leading-relaxed">
                    {{ $book['description'] }}
                </p>
            </div>

        </div>
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