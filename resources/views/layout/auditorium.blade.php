@include('components.headerauditorium')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Detail')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('styles/flowbite.min.js') }}"></script>
    <link href="{{ asset('styles/flowbite.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">

    <style>
        @keyframes fade-in-up {            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.7s ease-out forwards;
        }
    </style>
</head>
<body class="bg-black text-white">


    <main>
        @yield('content')
    </main>
</body>
</html>
