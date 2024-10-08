@props(['title'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> {{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-gray-900">
        <div class="max-w-screen-xl p-2 mx-auto min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('admin.layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="mt-2 bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                    <div class="flex justify-between items-center max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
                        {{ $header }}

                        <div class="text-sm text-gray-800 dark:text-gray-200 font-semibold">
                            <p>{{ auth()->user()->name }}</p>
                            <p>{{ auth()->user()->phone_number }}</p>
                        </div>
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
