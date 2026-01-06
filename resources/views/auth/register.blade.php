<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register – Literalink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-white">

<div class="min-h-screen grid grid-cols-1 lg:grid-cols-2">

    <!-- LEFT -->
    <div class="hidden lg:flex items-center justify-center bg-gray-50">
        <img src="{{ asset('images/signup.png') }}"
             class="max-w-sm w-full"
             alt="Register Illustration">
    </div>

    <!-- RIGHT -->
    <div class="flex items-center justify-center px-4 py-10 overflow-y-auto">
        <div class="w-full max-w-sm">

            <h1 class="text-2xl font-bold text-gray-900">
                Create Account
            </h1>
            <p class="mt-1 text-sm text-gray-600">
                Start your reading journey with Literalink
            </p>

            <form class="mt-6 space-y-3">

                <div>
                    <label class="text-sm text-gray-700">Full Name</label>
                    <input type="text"
                        class="mt-1 w-full rounded-md border px-3 py-2 text-sm
                            focus:border-indigo-500 focus:ring-indigo-500"
                        placeholder="Your name">
                </div>

                <div>
                    <label class="text-sm text-gray-700">Email</label>
                    <input type="email"
                        class="mt-1 w-full rounded-md border px-3 py-2 text-sm
                            focus:border-indigo-500 focus:ring-indigo-500"
                        placeholder="you@example.com">
                </div>

                <div>
                    <label class="text-sm text-gray-700">Password</label>
                    <input type="password"
                        class="mt-1 w-full rounded-md border px-3 py-2 text-sm
                            focus:border-indigo-500 focus:ring-indigo-500"
                        placeholder="••••••••">
                </div>

                <div>
                    <label class="text-sm text-gray-700">Confirm Password</label>
                    <input type="password"
                        class="mt-1 w-full rounded-md border px-3 py-2 text-sm
                            focus:border-indigo-500 focus:ring-indigo-500"
                        placeholder="••••••••">
                </div>

                <button type="button"
                    onclick="window.location.href='{{ route('explorebooks') }}'"
                    class="w-full mt-2 rounded-md bg-indigo-600 py-2.5 text-sm
                        font-semibold text-white hover:bg-indigo-700 transition">
                    Sign Up
                </button>
            </form>

            <!-- Divider -->
            <div class="my-5 flex items-center gap-3">
                <div class="h-px flex-1 bg-gray-200"></div>
                <span class="text-xs text-gray-400">OR</span>
                <div class="h-px flex-1 bg-gray-200"></div>
            </div>

            <!-- Social -->
            <div class="space-y-3">

            <!-- Google -->
            <button
                class="w-full flex items-center justify-center gap-3
                    rounded-md border py-2 text-sm
                    hover:bg-gray-50 transition">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg"
                    alt="Google"
                    class="h-5 w-5">
                <span>Continue with Google</span>
            </button>

            <!-- Facebook -->
            <button
                class="w-full flex items-center justify-center gap-3
                    rounded-md border py-2 text-sm
                    hover:bg-gray-50 transition">
                <img src="https://www.svgrepo.com/show/475647/facebook-color.svg"
                    alt="Facebook"
                    class="h-5 w-5">
                <span>Continue with Facebook</span>
            </button>

        </div>


            <p class="mt-5 text-center text-sm text-gray-600">
                Sudah punya akun?
                <a href="{{ route('login') }}"
                class="text-indigo-600 font-medium hover:underline">
                    Login
                </a>
            </p>

        </div>
    </div>

</div>

</body>
</html>
