<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Erreur 404 | Marché des Gourmets</title>
    <link href="{{asset('css/app.css?v=').time()}}" rel="stylesheet">
</head>
<body>
@include('components.header')
<main class="error__main">
    <h1 class="error_404">404</h1>
    <p class="p_404">Il semblerait que la page que vous recherchez n'existe malheureusement pas.</p>
    <a href="{{ url('/') }}" class="a_404">Retour à l'accueil</a>
</main>
@include('components.footer')
</body>
</html>

