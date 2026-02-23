<!-- Sidebar -->
<aside class="w-64 bg-white shadow-md hidden md:flex md:flex-col">

    <!-- App Name -->
    <div class="h-16 flex items-center px-6 border-b">
        <a href="{{ route('home') }}" class="text-xl font-bold text-gray-800">
            LaravelDynamicForms
        </a>
    </div>

    <!-- Menu -->
    <nav class="flex-1 p-4 space-y-2">

        <a href="#"
            class="block px-4 py-2 rounded-lg bg-gray-900 text-white font-medium">
            Dashboard
        </a>

        <!-- Menu 1 -->
        <div x-data="{ open: false }" class="space-y-1">
            <button @click="open = !open"
                class="w-full flex items-center justify-between px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-100">
                <span>Menu 1</span>
                <svg class="h-4 w-4 transition transform"
                    :class="open ? 'rotate-180' : ''"
                    fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div x-show="open" x-transition class="pl-6 space-y-1">
                <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100 rounded-lg">
                    Submenu 1
                </a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100 rounded-lg">
                    Submenu 2
                </a>
            </div>
        </div>

        <!-- Menu 2 -->
        <div x-data="{ open: false }" class="space-y-1">
            <button @click="open = !open"
                class="w-full flex items-center justify-between px-4 py-2 rounded-lg text-gray-700 hover:bg-gray-100">
                <span>Menu 2</span>
                <svg class="h-4 w-4 transition transform"
                    :class="open ? 'rotate-180' : ''"
                    fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div x-show="open" x-transition class="pl-6 space-y-1">
                <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100 rounded-lg">
                    Submenu A
                </a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100 rounded-lg">
                    Submenu B
                </a>
            </div>
        </div>

    </nav>

</aside>