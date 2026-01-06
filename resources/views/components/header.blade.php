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