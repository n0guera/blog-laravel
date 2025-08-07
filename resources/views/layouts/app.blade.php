<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <header class="container flex justify-between items-center bg-white shadow-md p-4 rounded-lg mt-4 mx-auto">
        <a href="{{ route('home') }}">
            <h1 class="text-2xl font-bold">Blog</h1>
        </a>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-800">About us</a></li>
                <li><a href="{{ route('contact') }}" class="text-gray-600 hover:text-gray-800">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class="container mx-auto mt-10 px-6 text-center">
        @yield('content')
    </main>
    <footer class="mt-10 py-6 bg-white text-center shadow-md">
        <p class="text-gray-600">&copy; 2025 Blog. All rights reserved.</p>
    </footer>
</body>

</html>
