<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>À Porpos - Marché des Gourmets</title>
    <link href="{{asset('css/app.css?v=').time()}}" rel="stylesheet">
</head>
<body>
@include('components.header')
<main class="about__main">
    <div class="about__intro">
        <div class="intro__text">
            <h2>À propos du Marché des Gourmets</h2>
        </div>
        <div class="intro__img">
            <img src="{{URL::asset('img/About_MarcheDesGourmets.jpg')}}" alt="Marché des Gourmets" height="516" width="560">
        </div>
        <div class="intro__background"></div>
    </div>
    <div class="about__content">
        <div class="about-market">
            <p>{!!nl2br($texts->where('title', '=', 'About the event')->first()->content)!!}</p>
        </div>
        @if(count($extras))
        <div class="extras">
            <h3>Nos petits plus</h3>
            <ul class="extras__list">
                @foreach($extras as $extra)
                <li class="extra">
                    <div class="extra__icon">{!!nl2br($extra->svg)!!}</div>
                    <div class="extra__content">
                        <p>{!!nl2br($extra->content)!!}</p>
                    </div>
                </li>
                @endforeach
            </ul>
            <a href="{{ url('/ticketing') }}">Acheter des billets</a>
        </div>
        @endif
        <div class="about-rotary">
            <div class="rotary__intro">
                <div class="intro__text">
                    <h2>À propos du Rotary Club de Flémalle</h2>
                </div>
                <div class="intro__img">
                    <img src="{{URL::asset('img/About-Rotary_MarcheDesGourmets.jpg')}}" alt="Marché des Gourmets" height="516" width="560">
                </div>
            </div>
            <div class="rotary__content">
                <p>{!!nl2br($texts->where('title', '=', 'About the club')->first()->content)!!}</p>
                <a href="{{ url('/contact') }}">Contactez-nous</a>
            </div>
        </div>
    </div>
</main>
@include('components.footer')
</body>
</html>
