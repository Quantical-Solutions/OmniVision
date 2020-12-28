<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
        <meta name="referrer" content="origin-when-cross-origin">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>OmniVision{{ setTitle(Route::currentRouteName()) }}</title>
        <link rel="canonical" href="{{ config('app.url') }}">
        <link rel="icon" href="/storage/media/images/favicon.png">
        <link rel="stylesheet" href="/css/app.css" type="text/css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

        @livewire('navigation-dropdown')
        @isset($welcome)
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
