<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <x-toast />

    <div class="flex min-h-screen">
        <x-sidebar />

        <div class="flex-1 flex flex-col">
            <x-navbar />

            <main class="p-6">
                {{ $slot }}
            </main>
        </div>
    </div>

</body>
</html>