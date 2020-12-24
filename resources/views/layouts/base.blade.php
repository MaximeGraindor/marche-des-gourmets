<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <title>@yield('title') - Marché des Gourmets</title>

        <meta name="description" content="Le Marché des Gourmets est un événement annuel organisé par le Rotary Club de Flémalle sur le prestigieux site de l'abbaye de la Paix-Dieu afin d'obtenir des fonds pour aider les plus démunis." >

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        @livewireStyles
        <link rel="icon" type="image/png" href="/favicon.png">

        <script src="https://js.stripe.com/v3/"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>

        {{-- Social Meta --}}
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ URL::current() }}">
        <meta property="og:title" content="@yield('title')">
        <meta property="og:image" content="https://example.com/favicon.png">
        <meta property="og:description" content="">
        <meta property="og:site_name" content="Marché des Gourmets">
        <meta property="og:locale" content="fr">

    </head>

    <body>
        @yield('content')
        <script src="{{ asset('/js/app.js') }}" defer></script>
        @livewireScripts
    </body>
</html>
