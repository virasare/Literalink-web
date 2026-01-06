<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login – Literalink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
</head>
<body class="bg-white">

<div class="min-h-screen grid grid-cols-1 lg:grid-cols-2">
    <!-- LEFT : Illustration -->
    <div class="hidden lg:flex items-center justify-center bg-gray-50">
        <img src="{{ asset('images/login.png') }}"
             alt="Login Illustration"
             class="max-w-md w-full">
    </div>

    <!-- RIGHT : Login Form -->
    <div class="flex items-center justify-center px-6">
        <div class="w-full max-w-md">
            <!-- Title -->
            <h1 class="text-3xl font-bold text-gray-900">
                Login
            </h1>
            <p class="mt-2 text-sm text-gray-600">
                Welcome back, please login to your account
            </p>

            <!-- Form -->
            <form class="mt-8 space-y-4">
                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Email
                    </label>
                    <input type="email"
                           placeholder="you@example.com"
                           class="mt-1 w-full rounded-lg border border-gray-300 px-4 py-3
                                  focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Password
                    </label>
                    <input type="password"
                           placeholder="••••••••"
                           class="mt-1 w-full rounded-lg border border-gray-300 px-4 py-3
                                  focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <!-- Forgot password -->
                <div class="flex justify-end">
                    <a href="#" class="text-sm text-indigo-600 hover:underline">
                        Forgot password?
                    </a>
                </div>

                <!-- Login Button -->
                <button type="button"
                        onclick="window.location.href='{{ route('explorebooks') }}'"
                        class="w-full rounded-lg bg-indigo-600 py-3 text-white
                            font-semibold hover:bg-indigo-700 transition">
                    Log in
                </button>

            </form>

            <!-- Social Login, Sign up, etc… -->
        </div>
    </div>
</div>

</body>
</html>
