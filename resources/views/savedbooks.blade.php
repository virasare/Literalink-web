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
                class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100
                bg-blue-100 border-l-4 border-blue-600">
                Saved Books
            </a>
            <a href="{{ route('activity') }}"
                class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100">
                Activity
            </a>
            <a href="{{ route('community') }}"
                class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100">
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
            
            <div class="max-w-7xl mx-auto">

            <!-- PAGE TITLE -->
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-gray-900">
                Saved Books
                </h1>
                <p class="text-gray-600 text-sm mt-1">
                Continue reading your saved books
                </p>
            </div>

            <!-- BOOK GRID -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">

                <!-- CARD -->
                <div class="bg-white rounded-xl p-3 shadow-sm hover:shadow-md transition">

                <!-- Cover -->
                <img src="/images/books/atomic-habits.jpg"
                    alt="Atomic Habits"
                    class="w-full h-60 object-cover rounded-lg mb-3">

                <!-- Title -->
                <h3 class="text-sm font-semibold text-gray-900 leading-tight">
                    Atomic Habits
                </h3>

                <!-- Author -->
                <p class="text-xs text-gray-500 mt-1">
                    James Clear
                </p>

                <!-- Rating -->
                <div class="flex items-center gap-1 text-yellow-400 text-sm mt-1">
                    ★★★★☆
                    <span class="text-xs text-gray-500 ml-1">4.8</span>
                </div>

                <!-- Genre -->
                <span class="inline-block mt-2 px-2 py-1 text-xs
                            bg-blue-100 text-blue-600 rounded-full">
                    Self Improvement
                </span>

                <!-- CTA -->
                <button class="mt-3 w-full bg-blue-600 text-white
                                text-sm py-2 rounded-lg
                                hover:bg-blue-700 transition">
                    Continue Reading
                </button>

                </div>

                <!-- DUPLICATE CARD -->
                <div class="bg-white rounded-xl p-3 shadow-sm hover:shadow-md transition">

                <img src="/images/books/deep-work.jpg"
                    class="w-full h-60 object-cover rounded-lg mb-3">

                <h3 class="text-sm font-semibold">
                    Deep Work
                </h3>

                <p class="text-xs text-gray-500 mt-1">
                    Cal Newport
                </p>

                <div class="flex items-center gap-1 text-yellow-400 text-sm mt-1">
                    ★★★★☆
                    <span class="text-xs text-gray-500 ml-1">4.5</span>
                </div>

                <span class="inline-block mt-2 px-2 py-1 text-xs
                            bg-purple-100 text-purple-600 rounded-full">
                    Productivity
                </span>

                <button class="mt-3 w-full bg-blue-600 text-white
                                text-sm py-2 rounded-lg
                                hover:bg-blue-700 transition">
                    Continue Reading
                </button>

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
