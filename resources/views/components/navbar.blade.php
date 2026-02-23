<!-- Navbar -->
<header class="h-16 bg-white shadow-sm flex items-center justify-between px-6">

    <h1 class="text-lg font-semibold text-gray-800">
        Dashboard
    </h1>

    <!-- Profile Dropdown -->
    <div x-data="{ open: false }" class="relative">
        <button @click="open = !open"
            class="flex items-center gap-2 bg-gray-100 hover:bg-gray-200 px-3 py-2 rounded-lg transition">
            <svg class="h-5 w-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5.121 17.804A9 9 0 1118.879 17.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span class="text-sm font-medium text-gray-700">
                {{ auth()->user()->name ?? 'User' }}
            </span>
        </button>

        <div x-show="open"
            x-cloak
            @click.away="open = false"
            x-transition
            class="absolute right-0 mt-2 w-44 bg-white border rounded-lg shadow-lg py-2">

            <a href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                Profile
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                    Logout
                </button>
            </form>

        </div>
    </div>

</header>