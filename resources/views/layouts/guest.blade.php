<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
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
    <body class="font-sans text-gray-900 antialiased">
                <!-- to display register nav link to guests only -->
        <nav class="bg-white border-b border-gray-100 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex justify-between h-24">

            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ url('/') }}">
                    <x-application-logo class="h-28 w-auto" />
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden sm:flex sm:items-center space-x-8">

                <a href="{{ url('/') }}"
                   class="text-lg font-medium text-gray-700 hover:text-blue-600 transition">
                    Home
                </a>

                <a href="{{ url('/about') }}"
                   class="text-lg font-medium text-gray-700 hover:text-blue-600 transition">
                    About Us
                </a>

                <a href="{{ url('/activities') }}"
                   class="text-lg font-medium text-gray-700 hover:text-blue-600 transition">
                    Activities
                </a>

                <a href="{{ url('/contact') }}"
                   class="text-lg font-medium text-gray-700 hover:text-blue-600 transition">
                    Contact Us
                </a>

                <a href="{{ route('login') }}"
                   class="text-lg font-medium text-gray-700 hover:text-blue-600 transition">
                    Login
                </a>

                <a href="{{ route('register') }}"
                   class="text-lg font-medium text-blue-600">
                    Register
                </a>

            </div>

        </div>
    </div>
</nav>


        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
           <!-- I deleted this block because the logo is now inside the navbar. -->
            <!--
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div> -->

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
