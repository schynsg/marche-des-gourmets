<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nos exposants - Marché des Gourmets</title>
    <link href="{{asset('css/app.css?v=').time()}}" rel="stylesheet">
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
    <div class="exhib__content">
        <h2>Liste de nos exposants</h2>
        @if(count($exhibitors))
        <div class="exhibitors">
            <div class="exhib__forms">
                <form action="#" class="exhib__search-form">
                    <label for="search">Rechercher un exposant</label>
                    <div>
                        <input type="text" name="search" id="search" placeholder="Mot-clé"><!--
                        --><input type="submit" value="rechercher" style=" background-image: url('{{asset('img/search.svg')}}');">
                    </div>
                </form>
                @if(count($filters))
                <form action="#" class="exhib__filter-form">
                    <label for="filter">Type de produits</label>
                    <select name="filter" id="filter">
                        <option value="all">Tout</option>
                        @foreach($filters as $filter)
                            <option value="{{$filter->value}}">{{$filter->text}}</option>
                        @endforeach
                    </select>
                </form>
                @endif
            </div>
            <ul class="exhib__list">
                @foreach($exhibitors as $exhibitor)
                <li class="exhibitor">
                    <div class="exhibitor__infos">
                        <h3 @if($exhibitor->is_bio)class="bio"@endif>{{$exhibitor->name}}</h3>
                        <p class="exhibitor__address">{{$exhibitor->address}}, {{$exhibitor->postal_code}} {{$exhibitor->city}} ({{$exhibitor->country}})</p>
                        <p class="exhibitors__products">{{$exhibitor->description}}</p>
                    </div>
                    @if($exhibitor->website !== "")<a href="{{$exhibitor->website}}" title="Vers le site de l'exposant">Visiter le site web</a>@endif
                </li>
                @endforeach
            </ul>
            {{$exhibitors->links()}}
            <a href="{{ url('/new-exhibitor') }}" class="exhib__new-link">Devenir exposant</a>
        </div>
        @else
        <p>Malheureusement, nous n'avons pas encore d'exposant à vous montrer pour l'instant.</p>
        @endif
    </div>
</main>
@include('components.footer')
</body>
</html>
