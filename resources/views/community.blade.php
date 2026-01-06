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
        <header class="flex items-center justify-between px-6 py-4 bg-[#F9F9F9] border-b border-gray-200 sticky top-0 z-10">
            
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
            <div class="mx-auto max-w-2xl px-6 py-12 space-y-6">

    <!-- POST 1 -->
    <div class="rounded-xl border bg-white p-4">
        <div class="flex justify-between">
            <div class="flex gap-3">
                <img src="https://i.pravatar.cc/40?img=12" class="h-10 w-10 rounded-full">
                <div>
                    <p class="text-sm font-semibold">Ayu Lestari</p>
                    <p class="text-xs text-gray-500">@ayulstr</p>
                </div>
            </div>
            <button>⋯</button>
        </div>

        <p class="mt-4 text-sm">
            Baru kelar baca <b>Atomic Habits</b> 📖  
            Insight kecil tapi konsisten tuh ternyata ngeri efeknya.
        </p>

        <img src="https://source.unsplash.com/600x400/?book,habit"
             class="mt-4 rounded-lg">

        <div class="mt-4 flex gap-6 text-sm text-gray-500">
            <button>❤️ 24</button>
            <button>💬 5</button>
            <button>🔁</button>
        </div>
    </div>

    <!-- POST 2 -->
    <div class="rounded-xl border bg-white p-4">
        <div class="flex justify-between">
            <div class="flex gap-3">
                <img src="https://i.pravatar.cc/40?img=32" class="h-10 w-10 rounded-full">
                <div>
                    <p class="text-sm font-semibold">Raka Putra</p>
                    <p class="text-xs text-gray-500">@rakabaca</p>
                </div>
            </div>
            <button>⋯</button>
        </div>

        <p class="mt-4 text-sm">
            Lagi baca <b>Deep Work</b>.  
            Fix, susah fokus di era notifikasi kayak gini 😵‍💫
        </p>

        <img src="https://source.unsplash.com/600x400/?reading,focus"
             class="mt-4 rounded-lg">

        <div class="mt-4 flex gap-6 text-sm text-gray-500">
            <button>❤️ 18</button>
            <button>💬 3</button>
            <button>🔁</button>
        </div>
    </div>

    <!-- POST 3 -->
    <div class="rounded-xl border bg-white p-4">
        <div class="flex justify-between">
            <div class="flex gap-3">
                <img src="https://i.pravatar.cc/40?img=45" class="h-10 w-10 rounded-full">
                <div>
                    <p class="text-sm font-semibold">Nabila</p>
                    <p class="text-xs text-gray-500">@nb.reads</p>
                </div>
            </div>
            <button>⋯</button>
        </div>

        <p class="mt-4 text-sm italic">
            “You don’t rise to the level of your goals,  
            you fall to the level of your systems.”
        </p>

        <img src="https://source.unsplash.com/600x400/?book,quote"
             class="mt-4 rounded-lg">

        <div class="mt-4 flex gap-6 text-sm text-gray-500">
            <button>❤️ 41</button>
            <button>💬 7</button>
            <button>🔁</button>
        </div>
    </div>

    <!-- POST 4 -->
    <div class="rounded-xl border bg-white p-4">
        <div class="flex justify-between">
            <div class="flex gap-3">
                <img src="https://i.pravatar.cc/40?img=22" class="h-10 w-10 rounded-full">
                <div>
                    <p class="text-sm font-semibold">Dimas Arya</p>
                    <p class="text-xs text-gray-500">@dim.s</p>
                </div>
            </div>
            <button>⋯</button>
        </div>

        <p class="mt-4 text-sm">
            Ada rekomendasi buku tentang <b>financial mindset</b> selain  
            The Psychology of Money?
        </p>

        <img src="https://source.unsplash.com/600x400/?finance,book"
             class="mt-4 rounded-lg">

        <div class="mt-4 flex gap-6 text-sm text-gray-500">
            <button>❤️ 12</button>
            <button>💬 9</button>
            <button>🔁</button>
        </div>
    </div>

    <!-- POST 5 -->
    <div class="rounded-xl border bg-white p-4">
        <div class="flex justify-between">
            <div class="flex gap-3">
                <img src="https://i.pravatar.cc/40?img=18" class="h-10 w-10 rounded-full">
                <div>
                    <p class="text-sm font-semibold">Sarah Wijaya</p>
                    <p class="text-xs text-gray-500">@sarahwj</p>
                </div>
            </div>
            <button>⋯</button>
        </div>

        <p class="mt-4 text-sm">
            Progress baca minggu ini:  
            ✅ 3 chapter  
            ❌ distraksi TikTok
        </p>

        <img src="https://source.unsplash.com/600x400/?coffee,reading"
             class="mt-4 rounded-lg">

        <div class="mt-4 flex gap-6 text-sm text-gray-500">
            <button>❤️ 29</button>
            <button>💬 4</button>
            <button>🔁</button>
        </div>
    </div>

    <!-- POST 6 -->
    <div class="rounded-xl border bg-white p-4">
        <div class="flex justify-between">
            <div class="flex gap-3">
                <img src="https://i.pravatar.cc/40?img=51" class="h-10 w-10 rounded-full">
                <div>
                    <p class="text-sm font-semibold">Yoga Pratama</p>
                    <p class="text-xs text-gray-500">@yogareads</p>
                </div>
            </div>
            <button>⋯</button>
        </div>

        <p class="mt-4 text-sm">
            Baru sadar pentingnya <b>slow reading</b>.  
            Nggak semua buku harus dikejar tamat cepat.
        </p>

        <img src="https://source.unsplash.com/600x400/?library,book"
             class="mt-4 rounded-lg">

        <div class="mt-4 flex gap-6 text-sm text-gray-500">
            <button>❤️ 35</button>
            <button>💬 6</button>
            <button>🔁</button>
        </div>
    </div>

    <!-- POST 7 -->
    <div class="rounded-xl border bg-white p-4">
        <div class="flex justify-between">
            <div class="flex gap-3">
                <img src="https://i.pravatar.cc/40?img=8" class="h-10 w-10 rounded-full">
                <div>
                    <p class="text-sm font-semibold">Putri Ananda</p>
                    <p class="text-xs text-gray-500">@putribaca</p>
                </div>
            </div>
            <button>⋯</button>
        </div>

        <p class="mt-4 text-sm">
            Ada yang suka highlight buku pas baca?  
            Aku ngerasa jadi lebih nyantol 🤍
        </p>

        <img src="https://source.unsplash.com/600x400/?highlight,notes"
             class="mt-4 rounded-lg">

        <div class="mt-4 flex gap-6 text-sm text-gray-500">
            <button>❤️ 22</button>
            <button>💬 8</button>
            <button>🔁</button>
        </div>
    </div>

    <!-- POST 8 -->
    <div class="rounded-xl border bg-white p-4">
        <div class="flex justify-between">
            <div class="flex gap-3">
                <img src="https://i.pravatar.cc/40?img=60" class="h-10 w-10 rounded-full">
                <div>
                    <p class="text-sm font-semibold">Kevin</p>
                    <p class="text-xs text-gray-500">@kevreads</p>
                </div>
            </div>
            <button>⋯</button>
        </div>

        <p class="mt-4 text-sm">
            Baca buku sambil hujan-hujanan sore = therapy gratis 🌧️📚
        </p>

        <img src="https://source.unsplash.com/600x400/?rain,reading"
             class="mt-4 rounded-lg">

        <div class="mt-4 flex gap-6 text-sm text-gray-500">
            <button>❤️ 40</button>
            <button>💬 2</button>
            <button>🔁</button>
        </div>
    </div>

    <!-- POST 9 -->
    <div class="rounded-xl border bg-white p-4">
        <div class="flex justify-between">
            <div class="flex gap-3">
                <img src="https://i.pravatar.cc/40?img=14" class="h-10 w-10 rounded-full">
                <div>
                    <p class="text-sm font-semibold">Fahri</p>
                    <p class="text-xs text-gray-500">@fahri.books</p>
                </div>
            </div>
            <button>⋯</button>
        </div>

        <p class="mt-4 text-sm">
            Target baca 20 buku tahun ini.  
            Baru 7, tapi gas terus 🔥
        </p>

        <img src="https://source.unsplash.com/600x400/?goals,planner"
             class="mt-4 rounded-lg">

        <div class="mt-4 flex gap-6 text-sm text-gray-500">
            <button>❤️ 19</button>
            <button>💬 1</button>
            <button>🔁</button>
        </div>
    </div>

    <!-- POST 10 -->
    <div class="rounded-xl border bg-white p-4">
        <div class="flex justify-between">
            <div class="flex gap-3">
                <img src="https://i.pravatar.cc/40?img=27" class="h-10 w-10 rounded-full">
                <div>
                    <p class="text-sm font-semibold">Lina Kusuma</p>
                    <p class="text-xs text-gray-500">@linak</p>
                </div>
            </div>
            <button>⋯</button>
        </div>

        <p class="mt-4 text-sm">
            Buku non-fiksi favorit kalian apa?  
            Lagi pengen eksplor genre baru 👀
        </p>

        <img src="https://source.unsplash.com/600x400/?bookshelf"
             class="mt-4 rounded-lg">

        <div class="mt-4 flex gap-6 text-sm text-gray-500">
            <button>❤️ 27</button>
            <button>💬 11</button>
            <button>🔁</button>
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
