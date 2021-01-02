<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informations pratiques - Marché des Gourmets</title>
    <link href="{{asset('css/app.css?v=').time()}}" rel="stylesheet">
</head>
<body>
@include('components.header')
<main class="about__main">
    <div class="about__intro">
        <div class="intro__text">
            <h2 class="infos__title">Informations pratiques</h2>
        </div>
        <div class="intro__img">
            <img src="{{URL::asset('img/Infos_MarcheDesGourmets.jpg')}}" alt="Marché des Gourmets" height="516" width="560">
        </div>
        <div class="intro__background"></div>
    </div>
    <div class="infos__content">
        <div>
            <h3>Où ?</h3>
            <p>Chateau du Val Saint Lambert</p>
            <p>Esplanade du Val,</p>
            <p>4100 Seraing</p>
        </div>
        <div>
            <h3>Quand ?</h3>
            <p>Le samedi 27 mars 2021 de 11h00 à 20h00</p>
            <p>Le dimanche 28 mars 2020 de 10h00 à 19h00</p>
        </div>
        <div>
            <h3>Prix</h3>
            <p>Entrée : 6,00€</p>
            <p>Entrée gratuite pour les moins de 16 ans</p>
        </div>
        <a href="{{ url('/ticketing') }}">Acheter des billets</a>
    </div>
</main>
@include('components.footer')
</body>
</html>
