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
                                onclick="window.location.href='{{ route('read', $book['id']) }}'"
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


        <!-- FOOTER -->
        <footer class="bg-white border-t border-gray-200 p-4 text-center text-sm text-gray-500">
            &copy; 2026 Literalink. All rights reserved.
        </footer>

    </div>

</div>

</body>
</html>
