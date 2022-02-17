<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Residence Checkpoint Access')</title>

        <link rel="icon" href="{{ asset('img/favicon.ico') }}">

        <!-- Fonts -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <div class="">
                           <a href="{{ route('users.show', $user = Auth::user()->id) }}" class="p-4 text-gray-700 underline hover:text-red-900">
                                <div>{{ Auth::user()->name }}</div>
                           </a>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="flex justify-center items-center max-w-6xl mx-auto sm:px-6 lg:px-8">
                <img src="/img/favicon.ico" alt="logo">
                <div class="space-y-4">
                    <h1 class="text-4xl">The Residence Checkpoint Access</h1>
                    <p>The application provides access to the residential complex for residents and visitors. Once logged in, you can control the barrier and gate from any distance, as long as your phone has an internet connection.</p>
                </div>
            </div>
        </div>
    </body>
</html>
