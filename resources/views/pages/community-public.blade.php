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