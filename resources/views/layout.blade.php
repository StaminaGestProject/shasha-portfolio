<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield("title")</title>
        @vite(['resources/css/index.css','resources/css/bootstrap.css','resources/css/bootstrap_icon.css'])
    </head>
    <body>
        <header>
            @include("partials/nav")
        </header>
        @yield("content")
        @include("partials/footer")
        @vite('resources/js/index.js')
    </body>
</html>