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
    @if(count($infos))
    <div class="infos__content">
        @foreach($infos as $info)
        <div>
            <h3>{{$info->title}}</h3>
            <p>{!!nl2br($info->content)!!}</p>
        </div>
        @endforeach
        <a href="{{ url('/ticketing') }}">Acheter des billets</a>
    </div>
    @endif
</main>
@include('components.footer')
</body>
</html>
