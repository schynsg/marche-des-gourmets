<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marché des Gourmets - Accueil</title>
    <link href="{{asset('css/app.css?v=').time()}}" rel="stylesheet">
</head>
<body>
    @include('components.header')
    <main class="index__main"  itemscope itemtype="https://schema.org/Event">
        <div class="index__intro">
            <div>
                <div class="intro__text">
                    <div class="intro__title">
                        <h2 itemprop="about">{{$texts->where('title', '=', 'Edition number')->first()->content}}<sup>e</sup> Marché des Gourmets</h2>
                        <p itemprop="startDate">{{$texts->where('title', '=', 'Date')->first()->content}}</p>
                    </div>
                    <div class="intro__content">
                        <p itemprop="organizer">Organisé par le Rotary Club de Flémalle</p>
                    </div>
                </div>
                <div class="intro__link">
                    <a href="{{ url('/exhibitors') }}">Découvir nos exposants</a>
                </div>
            </div>
            <div class="intro__img">
                <img src="{{URL::asset('img/Presentation_MarcheDesGourmets.jpg')}}" alt="Présentation du Marché des Gourmets" height="648" width="560" itemprop="image">
            </div>
            <div class="intro__background"></div>
        </div>
        <div class="index__welcome">
            <h2>Bienvenue sur le site du Marché des Gourmets</h2>
            <div class="welcome__text">
                <div>
                    <p>{!!nl2br($texts->where('title', '=', 'Index welcome first part')->first()->content)!!}</p>
                </div>
                <div>
                    <p>{!!nl2br($texts->where('title', '=', 'Index welcome second part')->first()->content)!!}</p>
                </div>
            </div>
            <a href="{{ url('/about') }}">Découvrir le marché</a>
        </div>
        <div class="partners">
            <h2>Nos partenaires</h2>
            <div>
                @foreach($parters as $partner)
                <div class="partner">
                    <h3>
                        <a href="{{$partner->website}}" class="partner__link">
                            <span class="helper"></span>
                            <img src="../storage/{{$partner->file_name}}" alt="{{$partner->name}}" width="210" height="88" itemprop="sponsor">
                        </a>
                    </h3>
                </div>
                @endforeach
            </div>
        </div>
    </main>
    @include('components.footer')
</body>
</html>
