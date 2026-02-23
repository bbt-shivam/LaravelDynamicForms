<x-layouts.auth>
    <div class="w-full max-w-lg bg-white shadow-xl rounded-2xl p-10">

        <!-- Title -->
        <div class="text-center mb-8">
            <a href="{{ route('home') }}"
                class="text-3xl font-semibold text-gray-800 hover:text-gray-600 transition">
                Create Account
            </a>
            <p class="text-sm text-gray-500 mt-2">Sign up to get started</p>
        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Full Name
                </label>
                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-800
                           focus:outline-none focus:ring-2 focus:ring-gray-300 transition">
                @error('name')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

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
                           focus:outline-none focus:ring-2 focus:ring-gray-300 transition">
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
                           focus:outline-none focus:ring-2 focus:ring-gray-300 transition">
                @error('password')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Confirm Password
                </label>
                <input
                    type="password"
                    name="password_confirmation"
                    class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-800
                           focus:outline-none focus:ring-2 focus:ring-gray-300 transition">
                @error('password_confirmation')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Register Button -->
            <button
                type="submit"
                class="w-full py-3 rounded-lg bg-gray-900 text-white font-medium
                       hover:bg-gray-800 transition shadow-md">
                Register
            </button>

            <!-- Login Link -->
            <p class="text-center text-sm text-gray-500">
                Already have an account?
                <a href="{{ route('login') }}"
                    class="text-gray-800 font-medium hover:underline">
                    Login here
                </a>
            </p>

        </form>

    </div>
</x-layouts.auth>