<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
        <link href="{{ asset('css/global.css') }}" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="fade-in font-sans text-gray-900 antialiased h-screen">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-0 h-full">
            <!--Left column -->
            <div class="flex items-center justify-center bg-gray-200 dark:bg-gray-800 h-full">
                <div class="bus-background h-full w-full">
                    <img src="{{ asset('images/bus-background-croped.png') }}" alt="Bus image" class="object-cover h-full w-full">
                </div>
            </div> 
            <!--Right Column-->
            <div class="flex flex-col items-center justify-start p-10 h-full bg-gray-200 dark:bg-gray-900">
                <p class="text-blue-600 text-5xl font-bold text-center">Bus Transportation Management System</p>
                <p class="text-blue-600 text-4xl mt-4 text-center">Core Transaction 1</p>
            
                <div class="w-full max-w-md p-8 bg-white dark:bg-gray-800 shadow-xl rounded-xl mt-10">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
    
</html>
