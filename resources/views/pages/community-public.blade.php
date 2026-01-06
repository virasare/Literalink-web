<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Explore Books</title>
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
                <!-- Sign Up (text only) -->
                <a href="#"
                class="text-sm font-semibold text-gray-700 hover:text-gray-900">
                    Sign up
                </a>

                <!-- Login (button) -->
                <a href="#"
                class="rounded-md bg-blue-600 px-4 py-2
                        text-sm font-semibold text-white
                        hover:bg-blue-700 transition">
                    Log in
                </a>
            </div>

        </nav>
    </header>

    <div class="mx-auto max-w-2xl px-6 py-12 space-y-6">

    {{-- Post Card --}}
    <div class="rounded-xl border border-gray-200 bg-white p-4">

        <!-- Header -->
        <div class="flex items-start justify-between">
            <div class="flex gap-3">
                <img src="https://i.pravatar.cc/40"
                     class="h-10 w-10 rounded-full"
                     alt="Profile">

                <div>
                    <p class="text-sm font-semibold">Ayu Lestari</p>
                    <p class="text-xs text-gray-500">@ayulstr</p>
                </div>
            </div>

            <!-- More -->
            <button class="text-gray-400 hover:text-gray-600">
                ⋯
            </button>
        </div>

        <!-- Content -->
        <p class="mt-4 text-sm text-gray-800">
            Baru selesai baca <b>Atomic Habits</b> 📖  
            Parah sih, mindset soal kebiasaan kecil tuh kena banget.
        </p>

        <!-- Image (optional) -->
        <img src="https://source.unsplash.com/600x400/?book"
             class="mt-4 rounded-lg"
             alt="Post Image">

        <!-- Actions -->
        <div class="mt-4 flex items-center justify-between text-sm text-gray-500">

            <div class="flex gap-6">
                <button class="flex items-center gap-1 hover:text-red-500">
                    ❤️ <span>24</span>
                </button>

                <button class="flex items-center gap-1 hover:text-indigo-500">
                    💬 <span>5</span>
                </button>

                <button class="flex items-center gap-1 hover:text-green-500">
                    🔁
                </button>
            </div>

        </div>

    </div>

    <div class="rounded-xl border border-gray-200 bg-white p-4">

        <!-- Header -->
        <div class="flex items-start justify-between">
            <div class="flex gap-3">
                <img src="https://i.pravatar.cc/40"
                     class="h-10 w-10 rounded-full"
                     alt="Profile">

                <div>
                    <p class="text-sm font-semibold">Ayu Lestari</p>
                    <p class="text-xs text-gray-500">@ayulstr</p>
                </div>
            </div>

            <!-- More -->
            <button class="text-gray-400 hover:text-gray-600">
                ⋯
            </button>
        </div>

        <!-- Content -->
        <p class="mt-4 text-sm text-gray-800">
            Baru selesai baca <b>Atomic Habits</b> 📖  
            Parah sih, mindset soal kebiasaan kecil tuh kena banget.
        </p>

        <!-- Image (optional) -->
        <img src="https://source.unsplash.com/600x400/?book"
             class="mt-4 rounded-lg"
             alt="Post Image">

        <!-- Actions -->
        <div class="mt-4 flex items-center justify-between text-sm text-gray-500">

            <div class="flex gap-6">
                <button class="flex items-center gap-1 hover:text-red-500">
                    ❤️ <span>24</span>
                </button>

                <button class="flex items-center gap-1 hover:text-indigo-500">
                    💬 <span>5</span>
                </button>

                <button class="flex items-center gap-1 hover:text-green-500">
                    🔁
                </button>
            </div>

        </div>

    </div>

    <div class="rounded-xl border border-gray-200 bg-white p-4">

        <!-- Header -->
        <div class="flex items-start justify-between">
            <div class="flex gap-3">
                <img src="https://i.pravatar.cc/40"
                     class="h-10 w-10 rounded-full"
                     alt="Profile">

                <div>
                    <p class="text-sm font-semibold">Ayu Lestari</p>
                    <p class="text-xs text-gray-500">@ayulstr</p>
                </div>
            </div>

            <!-- More -->
            <button class="text-gray-400 hover:text-gray-600">
                ⋯
            </button>
        </div>

        <!-- Content -->
        <p class="mt-4 text-sm text-gray-800">
            Baru selesai baca <b>Atomic Habits</b> 📖  
            Parah sih, mindset soal kebiasaan kecil tuh kena banget.
        </p>

        <!-- Image (optional) -->
        <img src="https://source.unsplash.com/600x400/?book"
             class="mt-4 rounded-lg"
             alt="Post Image">

        <!-- Actions -->
        <div class="mt-4 flex items-center justify-between text-sm text-gray-500">

            <div class="flex gap-6">
                <button class="flex items-center gap-1 hover:text-red-500">
                    ❤️ <span>24</span>
                </button>

                <button class="flex items-center gap-1 hover:text-indigo-500">
                    💬 <span>5</span>
                </button>

                <button class="flex items-center gap-1 hover:text-green-500">
                    🔁
                </button>
            </div>

        </div>

    </div>

    <div class="rounded-xl border border-gray-200 bg-white p-4">

        <!-- Header -->
        <div class="flex items-start justify-between">
            <div class="flex gap-3">
                <img src="https://i.pravatar.cc/40"
                     class="h-10 w-10 rounded-full"
                     alt="Profile">

                <div>
                    <p class="text-sm font-semibold">Ayu Lestari</p>
                    <p class="text-xs text-gray-500">@ayulstr</p>
                </div>
            </div>

            <!-- More -->
            <button class="text-gray-400 hover:text-gray-600">
                ⋯
            </button>
        </div>

        <!-- Content -->
        <p class="mt-4 text-sm text-gray-800">
            Baru selesai baca <b>Atomic Habits</b> 📖  
            Parah sih, mindset soal kebiasaan kecil tuh kena banget.
        </p>

        <!-- Image (optional) -->
        <img src="https://source.unsplash.com/600x400/?book"
             class="mt-4 rounded-lg"
             alt="Post Image">

        <!-- Actions -->
        <div class="mt-4 flex items-center justify-between text-sm text-gray-500">

            <div class="flex gap-6">
                <button class="flex items-center gap-1 hover:text-red-500">
                    ❤️ <span>24</span>
                </button>

                <button class="flex items-center gap-1 hover:text-indigo-500">
                    💬 <span>5</span>
                </button>

                <button class="flex items-center gap-1 hover:text-green-500">
                    🔁
                </button>
            </div>

        </div>

    </div>

    <div class="rounded-xl border border-gray-200 bg-white p-4">

        <!-- Header -->
        <div class="flex items-start justify-between">
            <div class="flex gap-3">
                <img src="https://i.pravatar.cc/40"
                     class="h-10 w-10 rounded-full"
                     alt="Profile">

                <div>
                    <p class="text-sm font-semibold">Ayu Lestari</p>
                    <p class="text-xs text-gray-500">@ayulstr</p>
                </div>
            </div>

            <!-- More -->
            <button class="text-gray-400 hover:text-gray-600">
                ⋯
            </button>
        </div>

        <!-- Content -->
        <p class="mt-4 text-sm text-gray-800">
            Baru selesai baca <b>Atomic Habits</b> 📖  
            Parah sih, mindset soal kebiasaan kecil tuh kena banget.
        </p>

        <!-- Image (optional) -->
        <img src="https://source.unsplash.com/600x400/?book"
             class="mt-4 rounded-lg"
             alt="Post Image">

        <!-- Actions -->
        <div class="mt-4 flex items-center justify-between text-sm text-gray-500">

            <div class="flex gap-6">
                <button class="flex items-center gap-1 hover:text-red-500">
                    ❤️ <span>24</span>
                </button>

                <button class="flex items-center gap-1 hover:text-indigo-500">
                    💬 <span>5</span>
                </button>

                <button class="flex items-center gap-1 hover:text-green-500">
                    🔁
                </button>
            </div>

        </div>

    </div>

    <div class="rounded-xl border border-gray-200 bg-white p-4">

        <!-- Header -->
        <div class="flex items-start justify-between">
            <div class="flex gap-3">
                <img src="https://i.pravatar.cc/40"
                     class="h-10 w-10 rounded-full"
                     alt="Profile">

                <div>
                    <p class="text-sm font-semibold">Ayu Lestari</p>
                    <p class="text-xs text-gray-500">@ayulstr</p>
                </div>
            </div>

            <!-- More -->
            <button class="text-gray-400 hover:text-gray-600">
                ⋯
            </button>
        </div>

        <!-- Content -->
        <p class="mt-4 text-sm text-gray-800">
            Baru selesai baca <b>Atomic Habits</b> 📖  
            Parah sih, mindset soal kebiasaan kecil tuh kena banget.
        </p>

        <!-- Image (optional) -->
        <img src="https://source.unsplash.com/600x400/?book"
             class="mt-4 rounded-lg"
             alt="Post Image">

        <!-- Actions -->
        <div class="mt-4 flex items-center justify-between text-sm text-gray-500">

            <div class="flex gap-6">
                <button class="flex items-center gap-1 hover:text-red-500">
                    ❤️ <span>24</span>
                </button>

                <button class="flex items-center gap-1 hover:text-indigo-500">
                    💬 <span>5</span>
                </button>

                <button class="flex items-center gap-1 hover:text-green-500">
                    🔁
                </button>
            </div>

        </div>

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