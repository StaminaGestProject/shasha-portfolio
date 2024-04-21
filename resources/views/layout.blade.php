<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield("title")</title>
        @vite(["ressources/css/index.css"])
    </head>
    <body>
        <header>
            @include("partials/nav")
        </header>
        @yield("content")
        @include("partials/footer")
    </body>
</html>