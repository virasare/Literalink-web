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
                    <!-- Explore Books (ACTIVE) -->
                    <a href="{{ route('explorebooks-public') }}"
                        class="text-sm font-semibold {{ request()->routeIs('explorebooks-public') ? 'text-indigo-600 border-b-2 border-indigo-600 pb-1' : 'text-gray-600 hover:text-gray-900' }}">
                        Explore Books
                    </a>

                    <!-- Community -->
                    <a href="{{ route('community-public') }}"
                        class="text-sm font-semibold {{ request()->routeIs('community-public') ? 'text-gray-900 border-b-2 border-indigo-600 pb-1' : 'text-gray-600 hover:text-gray-900' }}">
                        Community
                    </a>
                </div>

            <!-- Login link for larger screens -->
            <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:items-center lg:gap-x-4">
                <!-- Sign Up (text only) -->
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

    <!-- SECTION 1-->
   <section class="mt-16"> 
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 mt-16">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-bold text-gray-900">
                Trending Book
            </h2>
            <a href="#" class="text-sm font-semibold text-blue-600 hover:underline">
                See all
            </a>
        </div>

        <!-- GRID CARD -->
        <div class="mt-6 flex flex-wrap gap-x-4 gap-y-6">
            <!-- CARD -->
            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>

            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>

            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>

            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>

            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>

            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- SECTION 2-->
   <section class="mt-16"> 
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 mt-16">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-bold text-gray-900">
                Recommended for you
            </h2>
            <a href="#" class="text-sm font-semibold text-blue-600 hover:underline">
                See all
            </a>
        </div>

        <!-- GRID CARD -->
        <div class="mt-6 flex flex-wrap gap-x-4 gap-y-6">
            <!-- CARD -->
            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>

            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>

            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>

            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>

            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>

            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- SECTION 3-->
   <section class="mt-16"> 
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 mt-16">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-bold text-gray-900">
                New Releases
            </h2>
            <a href="#" class="text-sm font-semibold text-blue-600 hover:underline">
                See all
            </a>
        </div>

        <!-- GRID CARD -->
        <div class="mt-6 flex flex-wrap gap-x-4 gap-y-6">
            <!-- CARD -->
            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>

            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>

            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>

            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>

            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>

            <a href="/detail-public"
            class="group block w-40 flex-shrink-0 rounded-xl transition
                    hover:-translate-y-1 hover:shadow-lg focus:outline-none">

                <div class="relative">
                    <img src="https://picsum.photos/200/300"
                        class="h-60 w-full rounded-xl object-cover" />

                    <span
                        class="absolute top-2 left-2 rounded-full bg-green-600
                            px-2 py-0.5 text-xs font-semibold text-white">
                        Free
                    </span>
                </div>

                <div class="mt-3 px-1.5 pb-2">
                    <h3
                        class="text-sm font-semibold text-gray-900 line-clamp-2
                            group-hover:text-indigo-600">
                        Atomic Habits
                    </h3>

                    <p class="mt-1 text-xs text-gray-500">
                        James Clear
                    </p>

                    <div class="mt-2 text-sm text-yellow-500">
                        ⭐⭐⭐⭐☆
                    </div>
                </div>
            </a>
        </div>
    </section>

    </div>
    </div>

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