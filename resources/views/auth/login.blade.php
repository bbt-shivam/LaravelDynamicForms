<x-layouts.auth>
    <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-8">

        <!-- Logo / Title -->
        <div class="text-center mb-8">
            <a href="{{ route('home') }}"
                class="text-2xl font-semibold text-gray-800 hover:text-gray-600 transition">
                Welcome Back
            </a>
            <p class="text-sm text-gray-500 mt-2">Sign in to your account</p>
        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Email Address
                </label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-800
                           focus:outline-none focus:ring-2 focus:ring-gray-300 transition"
                    required>

                @error('email')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Password
                </label>
                <input
                    type="password"
                    name="password"
                    class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-800
                           focus:outline-none focus:ring-2 focus:ring-gray-300 transition"
                    required>
            </div>

            <!-- Remember Me + Forgot -->
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2 text-gray-600">
                    <input
                        type="checkbox"
                        name="remember"
                        class="h-4 w-4 rounded border-gray-300 text-gray-800 focus:ring-gray-400">
                    Remember me
                </label>

                {{-- <a href="{{ route('password.request') }}"
                class="text-gray-500 hover:text-gray-700 transition">
                Forgot password?
                </a> --}}
            </div>

            <!-- Login Button -->
            <button
                type="submit"
                class="w-full py-3 rounded-lg bg-gray-900 text-white font-medium
                       hover:bg-gray-800 transition shadow-md">
                Sign In
            </button>

            <!-- Create Account Button -->
            <a href="{{ route('register') }}"
                class="block text-center w-full py-3 rounded-lg border border-gray-300
                      text-gray-700 font-medium hover:bg-gray-100 transition">
                Create Account
            </a>

        </form>

    </div>
</x-layouts.auth>