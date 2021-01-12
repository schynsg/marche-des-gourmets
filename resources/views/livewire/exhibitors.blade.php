<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nos exposants - Marché des Gourmets</title>
    @livewireStyles
    <link href="{{asset('css/app.css?v=')}}" rel="stylesheet">
</head>
<body>
@include('components.header')
<main class="exhib__main">
    <div class="exhib__intro">
        <div>
            <div class="intro__text">
                <div class="intro__title">
                    <h2>Découvrez nos exposants</h2>
                </div>
                <div class="intro__content">
                    <p>{!!nl2br($texts->where('title', '=', 'Exhibitors page introduction')->first()->content)!!}</p>
                </div>
            </div>
        </div>
        <div class="intro__img">
            <img src="{{URL::asset('img/Exhibitors_MarcheDesGourmets.jpg')}}" alt="Présentation de nos exposants" height="516" width="560">
        </div>
        <div class="intro__background"></div>
    </div>
    @livewire('exhib')
</main>
@include('components.footer')
</body>
@livewireScripts
</html>
