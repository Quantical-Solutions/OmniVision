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
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

        @livewire('navigation-dropdown')

            {{ $header }}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @if(request()->routeIs('welcome') || request()->routeIs('demos') || request()->routeIs('docs') || request()->routeIs('pricing') || request()->routeIs('basket'))

            @include('layouts.footer')

        @endif

        @stack('modals')

        @livewireScripts
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
