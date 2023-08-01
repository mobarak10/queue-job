<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-blue-800">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark-bg-gray-900 selection:bg-red-500 selection:text-white flex flex-col">
            <div class="font-semibold text-2xl text-blue-200">
                Welcome To Our Contest!
            </div>

            <form action="/contest" method="post">
                @csrf

                <input type="email" name="email">
                <button>Enter Now</button>
            </form>
        </div>
    </body>
</html>
