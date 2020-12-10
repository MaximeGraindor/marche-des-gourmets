<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <title>@yield('title') - Marché des Gourmets</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles

        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="icon" type="image/png" href="/favicon.png">

        {{-- Social Meta --}}
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ URL::current() }}">
        <meta property="og:title" content="@yield('title')">
        <meta property="og:image" content="https://example.com/favicon.png">
        <meta property="og:description" content=""> //TODO Add description of each page
        <meta property="og:site_name" content="Marché des Gourmets">
        <meta property="og:locale" content="fr">

    </head>

    <body>
        @yield('content')

        @livewireScripts
    </body>
</html>
