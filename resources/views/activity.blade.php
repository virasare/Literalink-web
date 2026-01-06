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
        <div class="flex gap-3 mb-8 bg-gray-100 p-1 rounded-xl w-fit">
            <button data-tab="highlights"
                class="tab-btn px-5 py-2 rounded-lg text-gray-500 hover:text-gray-700">
                ✨ Highlights
            </button>

            <button data-tab="finished"
                class="tab-btn px-5 py-2 rounded-lg text-gray-500 hover:text-gray-700">
                📚 Finished
            </button>

            <button data-tab="other"
                class="tab-btn px-5 py-2 rounded-lg text-gray-500 hover:text-gray-700">
                ⏳ Other
            </button>
        </div>



        <!-- TAB CONTENT -->

        <!-- HIGHLIGHTS -->
        <div id="highlights" class="tab-content space-y-6">

        <div class="relative rounded-2xl border bg-white p-6 shadow-sm">
            <span class="absolute top-4 right-4 text-indigo-100 text-5xl">“</span>

            <p class="text-gray-800 text-lg leading-relaxed italic">
                You do not rise to the level of your goals. You fall to the level of your systems.
            </p>

            <div class="mt-6 flex items-center justify-between text-sm text-gray-500">
                <span class="font-medium text-gray-700">
                    Atomic Habits · Chapter 2
                </span>
                <span>12 Jan 2026</span>
            </div>
        </div>

        <div class="relative rounded-2xl border bg-white p-6 shadow-sm">
            <span class="absolute top-4 right-4 text-indigo-100 text-5xl">“</span>

            <p class="text-gray-800 text-lg italic">
                Focus on systems instead of goals.
            </p>

            <div class="mt-6 flex justify-between text-sm text-gray-500">
                <span class="font-medium text-gray-700">
                    Atomic Habits · Chapter 3
                </span>
                <span>15 Jan 2026</span>
            </div>
        </div>

    </div>


        <!-- FINISHED -->
        <div id="finished" class="tab-content hidden space-y-4">

    <div class="flex items-center gap-5 p-5 border rounded-2xl bg-white hover:shadow-sm transition">
        <img src="/images/books/atomic-habits.jpg"
            class="w-20 h-28 rounded-lg object-cover shadow">

        <div class="flex-1">
            <h3 class="text-lg font-semibold text-gray-900">
                Atomic Habits
            </h3>
            <p class="text-sm text-gray-500">James Clear</p>

            <div class="mt-2 inline-flex items-center gap-2 text-xs text-green-700 bg-green-100 px-3 py-1 rounded-full">
                ✔ Finished · 10 Jan 2026
            </div>
        </div>

        <button class="text-sm text-indigo-600 hover:underline">
            View Details →
        </button>
    </div>

</div>


        <!-- OTHER -->
        <div id="other" class="tab-content hidden space-y-4">

        <div class="p-5 border rounded-2xl bg-white flex items-center justify-between hover:shadow-sm">
            <div>
                <h3 class="text-lg font-semibold text-gray-900">
                    Deep Work
                </h3>
                <p class="text-sm text-gray-500">
                    Last read: Chapter 4
                </p>
            </div>

            <button
                class="px-4 py-2 text-sm rounded-lg bg-indigo-600 text-white hover:bg-indigo-700">
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

<script>
  const tabButtons = document.querySelectorAll('.tab-btn');
  const tabContents = document.querySelectorAll('.tab-content');

  function setActiveTab(button) {
    // reset semua tab
    tabButtons.forEach(btn => {
      btn.classList.remove(
        'bg-white',
        'shadow',
        'text-indigo-600',
        'font-semibold'
      );
      btn.classList.add('text-gray-500');
    });

    // aktifkan tab
    button.classList.add(
      'bg-white',
      'shadow',
      'text-indigo-600',
      'font-semibold'
    );
    button.classList.remove('text-gray-500');
  }

  tabButtons.forEach(button => {
    button.addEventListener('click', () => {
      const target = button.dataset.tab;

      // set active tab UI
      setActiveTab(button);

      // hide all content
      tabContents.forEach(content => {
        content.classList.add('hidden');
      });

      // show active content
      document.getElementById(target).classList.remove('hidden');
    });
  });

  // default active tab saat load
  setActiveTab(tabButtons[0]);
</script>

</body>
</html>
