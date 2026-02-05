<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <header
        class="container flex justify-between items-center bg-white dark:bg-gray-800 shadow-md p-4 rounded-lg mt-4 mx-auto">
        <a href="{{ route('home') }}">
            <h1 class="text-2xl font-bold dark:text-gray-200">Blog</h1>
        </a>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-800 dark:text-gray-200">About
                        us</a></li>
                <li><a href="{{ route('contact') }}"
                        class="text-gray-600 hover:text-gray-800 dark:text-gray-200">Contact</a></li>
            </ul>
        </nav>
    </header>
    @isset($slot)
        {{ $slot }}
    @endisset
    @yield('content')
    <footer class="mt-10 py-6 bg-white dark:bg-gray-800 text-center shadow-md">
        <p class="text-gray-600 dark:text-gray-200">&copy; 2025 Blog. All rights reserved.</p>
    </footer>
</body>

</html>
