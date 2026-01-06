<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login – Literalink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-white">

<div class="min-h-screen grid grid-cols-1 lg:grid-cols-2">

    <!-- LEFT -->
    <div class="hidden lg:flex items-center justify-center bg-gray-50">
        <img src="{{ asset('images/login.png') }}"
             class="max-w-sm w-full"
             alt="Login Illustration">
    </div>

    <!-- RIGHT -->
    <div class="flex items-center justify-center px-4 py-10 overflow-y-auto">
        <div class="w-full max-w-sm">

            <h1 class="text-2xl font-bold text-gray-900">
                Welcome Back
            </h1>
            <p class="mt-1 text-sm text-gray-600">
                Login to continue reading
            </p>

            <form class="mt-6 space-y-3">

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

                <div class="text-right">
                    <a href="#" class="text-xs text-indigo-600 hover:underline">
                        Forgot password?
                    </a>
                </div>

                <button type="button"
                    onclick="window.location.href='{{ route('explorebooks') }}'"
                    class="w-full rounded-md bg-indigo-600 py-2.5 text-sm
                    font-semibold text-white hover:bg-indigo-700 transition">
                    Log in
                </button>
            </form>

            <p class="mt-5 text-center text-sm text-gray-600">
                Belum punya akun?
                <a href="{{ route('register') }}"
                   class="text-indigo-600 font-medium hover:underline">
                    Sign up
                </a>
            </p>

        </div>
    </div>

</div>

</body>
</html>
