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
            <!-- Active button style: bg-blue-100 border-l-4 border-blue-600 -->
            <a href="#"
               class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100
                bg-blue-100 border-l-4 border-blue-600">
                Explore Books
            </a>
            <a href="#"
               class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100">
                Saved Books
            </a>
            <a href="#"
               class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100">
                Activity
            </a>
            <a href="#"
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
                        <a href="/detail"
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

                        <a href="/detail"
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

                        <a href="/detail"
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

                        <a href="/detail"
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

                        <a href="/detail"
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

                        <a href="/detail"
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
                        <a href="/detail"
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

                        <a href="/detail"
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

                        <a href="/detail"
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

                        <a href="/detail"
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

                        <a href="/detail"
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

                        <a href="/detail"
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
                        <a href="/detail"
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

                        <a href="/detail"
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

                        <a href="/detail"
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

                        <a href="/detail"
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

                        <a href="/detail"
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

                        <a href="/detail"
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

        </main>

        <!-- FOOTER -->
        <footer class="bg-white border-t border-gray-200 p-4 text-center text-sm text-gray-500">
            &copy; 2026 Literalink. All rights reserved.
        </footer>

    </div>

</div>

</body>
</html>
