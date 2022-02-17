<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Residence Checkpoint Access')</title>
        <link rel="icon" href="{{ asset('img/favicon.ico') }}">

        <!-- Fonts -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="bg-gray-100">
        <div class="font-sans text-gray-900 antialiased">
            @guest
                <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                    @if (Route::get('login'))
                        <a href="{{ route('register') }}" class="ml-4 text-gray-700 underline">Register</a>
                    @endif

                    @if (Route::get('register'))
                        <a href="{{ route('login') }}" class="text-gray-700 underline">Log in</a>
                    @endif
                </div>
            @endguest

            <div class="my-24">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
