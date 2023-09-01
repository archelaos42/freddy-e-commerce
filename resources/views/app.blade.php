<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4/css/metro-all.min.css">
        <title inertia>{{ config('app.name', 'Laravel') }}</title>
{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--        <meta http-equiv="Content-Security-Policy" content="default-src *; style-src 'self' http://* 'unsafe-inline'; script-src 'self' http://* 'unsafe-inline' 'unsafe-eval'" />--}}
{{--        <meta http-equiv="Content-Security-Policy" content="default-src *; style-src 'self' http://* 'unsafe-inline'; script-src 'self' http://* 'unsafe-inline' 'unsafe-eval'" />--}}
        <!-- Fonts -->
{{--        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Ropa:wght@400;600;700&display=swap">--}}

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js'])
        @inertiaHead


        <script type="text/javascript" src="https://js.stripe.com/v3" defer></script>
    </head>
    <body class="font-sans antialiased">
        @inertia
        <script src="https://cdn.korzh.com/metroui/v4/js/metro.min.js"></script>
    </body>
</html>
