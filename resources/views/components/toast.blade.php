@if(session('success'))
<div
    x-data="{ show: true }"
    x-init="setTimeout(() => show = false, 3000)"
    x-show="show"
    x-transition:enter="transform ease-out duration-300"
    x-transition:enter-start="translate-x-full opacity-0"
    x-transition:enter-end="translate-x-0 opacity-100"
    x-transition:leave="transform ease-in duration-200"
    x-transition:leave-start="translate-x-0 opacity-100"
    x-transition:leave-end="translate-x-full opacity-0"
    class="fixed top-5 right-5 z-50 w-full max-w-sm">
    <div class="rounded-lg border border-green-200 bg-green-50 p-4 text-green-800 shadow-lg">
        <div class="flex items-start justify-between gap-4">

            <div class="flex items-start gap-3">
                <svg class="h-5 w-5 text-green-600 mt-0.5" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5 13l4 4L19 7" />
                </svg>
                <p class="text-sm font-medium">
                    {{ session('success') }}
                </p>
            </div>

            <button
                type="button"
                @click="show = false"
                class="text-green-600 hover:text-green-800 transition">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

        </div>
    </div>
</div>
@endif