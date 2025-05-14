<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Aplikasi Event Organizer')</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Jika pakai Vite -->
</head>
<body class="bg-gray-300 font-serif">

    <!-- Navbar -->
    @include('components.navbar-riwayat')

    <!-- Konten -->
    <main class="p-6">
        @yield('content')
    </main>

</body>
</html>
