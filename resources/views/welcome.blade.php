<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LaravelDynamicForms - Dynamic Form Builder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-800">

    <!-- Navbar -->
    <header class="fixed top-0 left-0 w-full bg-white/80 backdrop-blur border-b z-50">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-900">
                LaravelDynamicForms
            </a>

            <!-- Auth Links -->
            <div class="flex items-center gap-6">
                @if(!Auth::check())
                <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900 font-medium transition">
                    Login
                </a>
                <a href="{{ route('register') }}"
                    class="px-4 py-2 rounded-lg bg-gray-900 text-white font-medium hover:bg-gray-800 transition">
                    Register
                </a>
                @else
                <a href="{{ route('dashboard') }}"
                    class="px-4 py-2 rounded-lg bg-gray-900 text-white font-medium hover:bg-gray-800 transition">
                    Dashboard
                </a>
                @endif
            </div>


        </div>
    </header>

    <!-- Hero Section -->
    <section class="pt-32 pb-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-6 text-center">

            <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-gray-900 leading-tight">
                Build Dynamic Forms <br class="hidden md:block"> Without Code
            </h1>

            <p class="mt-6 text-lg text-gray-600 max-w-2xl mx-auto">
                LaravelDynamicForms is an open-source dynamic form builder that lets you create, manage,
                and deploy powerful forms in minutes.
            </p>

            <div class="mt-10 flex justify-center gap-4">
                <a href="{{ route('register') }}"
                    class="px-6 py-3 rounded-lg bg-gray-900 text-white font-semibold hover:bg-gray-800 transition shadow">
                    Get Started Free
                </a>

                <a href="{{ route('login') }}"
                    class="px-6 py-3 rounded-lg border border-gray-300 text-gray-700 font-semibold hover:bg-gray-100 transition">
                    Login
                </a>
            </div>

        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900">
                    Everything You Need to Build Forms
                </h2>
                <p class="mt-4 text-gray-600">
                    Powerful features designed for developers and teams.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="p-8 rounded-2xl border hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-3">Dynamic Fields</h3>
                    <p class="text-gray-600">
                        Add text, select, checkbox, radio, file upload and more with a flexible builder interface.
                    </p>
                </div>

                <div class="p-8 rounded-2xl border hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-3">Instant Deployment</h3>
                    <p class="text-gray-600">
                        Publish forms instantly and embed them anywhere in your applications.
                    </p>
                </div>

                <div class="p-8 rounded-2xl border hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-3">Open Source</h3>
                    <p class="text-gray-600">
                        Fully open source and customizable to fit your workflow and business needs.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-gray-900 text-white text-center">
        <div class="max-w-3xl mx-auto px-6">

            <h2 class="text-3xl md:text-4xl font-bold">
                Start Building Forms Today
            </h2>

            <p class="mt-4 text-gray-300">
                Join developers using LaravelDynamicForms to power their dynamic form workflows.
            </p>

            <div class="mt-8">
                <a href="{{ route('register') }}"
                    class="px-8 py-4 rounded-lg bg-white text-gray-900 font-semibold hover:bg-gray-200 transition shadow">
                    Create Free Account
                </a>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="py-10 bg-gray-50 border-t">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4">

            <p class="text-sm text-gray-500">
                © {{ date('Y') }} LaravelDynamicForms. Open Source Dynamic Form Builder.
            </p>

            <div class="flex gap-6 text-sm text-gray-600">
                <a href="#" class="hover:text-gray-900 transition">Documentation</a>
                <a href="https://github.com/bbt-shivam/LaravelDynamicForms" class="hover:text-gray-900 transition">GitHub</a>
                <a href="#" class="hover:text-gray-900 transition">Contact</a>
            </div>

        </div>
    </footer>

</body>

</html>