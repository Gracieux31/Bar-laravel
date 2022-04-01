<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        </style>
    </head>
    <body>
        <h1>Bonjour !</h1>
        <h2>Catégories</h2>
        <a href="{{ route('categories.show')  }}">Voir les catégories</a>
    </body>
</html>
