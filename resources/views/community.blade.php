<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Literalink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">

<div class="min-h-screen flex">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white border-r border-gray-200 flex flex-col sticky top-0 h-screen">
        <!-- Logo -->
        <div class="px-6 py-4 flex items-center justify-center border-b border-gray-200">
            <img src="{{ asset('images/LogoLiteralink.png') }}" alt="Literalink" class="h-18 w-auto">
        </div>

        <!-- Navigation -->
        <nav class="flex-1 px-2 py-4 space-y-2">
            <a href="{{ route(name: 'explorebooks') }}"
                class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100">
                Explore Books
            </a>
            <a href="{{ route('savedbooks') }}"
                class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100">
                Saved Books
            </a>
            <a href="{{ route('activity') }}"
                class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100">
                Activity
            </a>
            <a href="{{ route('community') }}"
                class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100
                bg-blue-100 border-l-4 border-blue-600">
                Community
            </a>
        </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="flex-1 flex flex-col">

        <!-- HEADER -->
        <header class="flex items-center justify-between px-6 py-4 bg-white border-b border-gray-200 sticky top-0 z-10">
            
            <!-- Search bar -->
            <div class="flex-1">
                <input type="text"
                       placeholder="Search books..."
                       class="w-full rounded-lg border border-gray-300 px-4 py-2
                              focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Action buttons -->
            <div class="flex items-center gap-4 ml-4">
                <!-- Theme toggle -->
                <button class="p-2 rounded-lg hover:bg-gray-100">
                    🌙
                </button>

                <!-- Notifications -->
                <button class="p-2 rounded-lg hover:bg-gray-100 relative">
                    🔔
                    <span class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-500 rounded-full"></span>
                </button>

                <!-- Profile dropdown -->
                <div class="relative">
                    <button class="flex items-center gap-2 rounded-lg hover:bg-gray-100 px-2 py-1">
                        <img src="{{ asset('images/Avatars.png') }}" alt="Profile" class="h-16 w-16 rounded-full">
                        <div class="hidden md:flex flex-col text-left">
                            <span class="text-sm font-medium">Vira Sare</span>
                            <span class="text-xs text-gray-500">vira@example.com</span>
                        </div>
                        ▼
                    </button>

                    <!-- Dropdown menu -->
                    <div class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg hidden group-hover:block">
                        <a href="#"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Edit Profile
                        </a>
                        <a href="#"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            Settings
                        </a>
                        <a href="#"
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                            About Us
                        </a>
                        <a href="#"
                           class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                            Log out
                        </a>
                    </div>
                </div>

            </div>
        </header>

        <!-- PAGE CONTENT -->
        <main class="flex-1 overflow-y-auto p-6">
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
        </main>

        <!-- FOOTER -->
        <footer class="bg-white border-t border-gray-200 p-4 text-center text-sm text-gray-500">
            &copy; 2026 Literalink. All rights reserved.
        </footer>

    </div>

</div>

</body>
</html>
