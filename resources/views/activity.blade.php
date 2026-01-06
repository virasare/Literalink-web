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
                class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-100
                bg-blue-100 border-l-4 border-blue-600">
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

        <h1 class="text-2xl font-bold text-gray-900 mb-6">Activity</h1>

        <!-- TAB BUTTONS -->
        <div class="flex gap-6 mb-6">
            <button data-tab="highlights"
            class="tab-btn pb-3 border-b-2 border-indigo-600 text-indigo-600 font-semibold">
            Highlights
            </button>

            <button data-tab="finished"
            class="tab-btn pb-3 text-gray-500 hover:text-gray-700">
            Finished
            </button>

            <button data-tab="other"
            class="tab-btn pb-3 text-gray-500 hover:text-gray-700">
            Other
            </button>
        </div>

        <!-- TAB CONTENT -->

        <!-- HIGHLIGHTS -->
        <div id="highlights" class="tab-content space-y-4">

            <div class="rounded-xl border bg-white p-5 hover:shadow-sm transition">
            <p class="text-sm text-gray-800 italic">
                “You do not rise to the level of your goals…”
            </p>

            <div class="mt-3 flex items-center justify-between text-xs text-gray-500">
                <span>Atomic Habits · Chapter 2</span>
                <span>12 Jan 2026</span>
            </div>
            </div>

            <div class="rounded-xl border bg-white p-5">
            <p class="text-sm text-gray-800 italic">
                “Focus on systems instead of goals.”
            </p>

            <div class="mt-3 flex justify-between text-xs text-gray-500">
                <span>Atomic Habits · Chapter 3</span>
                <span>15 Jan 2026</span>
            </div>
            </div>

        </div>

        <!-- FINISHED -->
        <div id="finished" class="tab-content space-y-4 hidden">

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-white">
            <img src="/images/books/atomic-habits.jpg"
                class="w-16 h-24 rounded-md object-cover">

            <div class="flex-1">
                <h3 class="font-semibold text-gray-900">Atomic Habits</h3>
                <p class="text-sm text-gray-500">James Clear</p>
                <p class="text-xs text-green-600 mt-1">Finished · 10 Jan 2026</p>
            </div>
            </div>

        </div>

        <!-- OTHER -->
        <div id="other" class="tab-content space-y-4 hidden">

            <div class="p-4 border rounded-xl bg-white">
            <h3 class="font-semibold text-gray-900">
                Deep Work
            </h3>
            <p class="text-sm text-gray-500">
                Last read: Chapter 4
            </p>

            <button class="mt-3 text-sm text-indigo-600 hover:underline">
                Continue Reading
            </button>
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

<script>
  const tabButtons = document.querySelectorAll('.tab-btn');
  const tabContents = document.querySelectorAll('.tab-content');

  tabButtons.forEach(button => {
    button.addEventListener('click', () => {
      const target = button.dataset.tab;

      // reset button style
      tabButtons.forEach(btn => {
        btn.classList.remove(
          'border-b-2',
          'border-indigo-600',
          'text-indigo-600',
          'font-semibold'
        );
        btn.classList.add('text-gray-500');
      });

      // hide all content
      tabContents.forEach(content => {
        content.classList.add('hidden');
      });

      // activate button
      button.classList.add(
        'border-b-2',
        'border-indigo-600',
        'text-indigo-600',
        'font-semibold'
      );
      button.classList.remove('text-gray-500');

      // show content
      document.getElementById(target).classList.remove('hidden');
    });
  });
</script>

</html>
