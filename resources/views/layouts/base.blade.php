<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <title>@yield('title') - Marché des Gourmets</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles

        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>

    <body>
        @yield('content')

        @livewireScripts
    </body>
</html>
