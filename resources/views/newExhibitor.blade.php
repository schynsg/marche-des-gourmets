<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devenir exposant - Marché des Gourmets</title>
    <link href="{{asset('css/app.css?v=').time()}}" rel="stylesheet">
</head>
<body>
@include('components.header')
<main class="exhib__main">
    <div class="exhib__intro">
        <div>
            <div class="intro__text">
                <div class="intro__title">
                    <h2>Devenir exposant</h2>
                </div>
                <div class="intro__content">
                    <p>Vous êtes producteurs, vignerons, commerçants, épiciers,... Vous pouvez compléter ce formulaire afin de nous soumettre votre <b>inscription</b>. Veuillez noter que, au vu des <b>places limitées</b>, nous sommes obligés de limiter le nombre d'exposants. Nous reviendrons donc vers vous après votre inscription.</p>
                </div>
            </div>
        </div>
        <div class="intro__img">
            <img src="{{URL::asset('img/Exhibitors_MarcheDesGourmets.jpg')}}" alt="Présentation de nos exposants" height="516" width="560">
        </div>
        <div class="intro__background"></div>
    </div>
    <div class="new-exhib__content">
        <h2>Formulaire d'inscription</h2>
        <form action="/newApplication" method="post" class="new-exhib__form">
            {{csrf_field()}}
            <div>
                <label for="name">Nom de la société</label>
                <input type="text" id="name" name="name" placeholder="Nom de la société" class="@error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="phone">Téléphone</label>
                <input type="tel" name="phone" id="phone" placeholder="Votre téléphone" class="@error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="website">Site internet</label>
                <input type="url" name="website" id="website" placeholder="Votre site internet"  class="@error('website') is-invalid @enderror" value="{{ old('website') }}">
                @error('website')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="street">Rue et numéro</label>
                <input type="text" name="street" id="name" placeholder="Votre rue et numéro" class="@error('street') is-invalid @enderror" value="{{ old('street') }}">
                @error('street')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="postal">Code postal</label>
                <input type="text" name="postal" id="postal" placeholder="Votre code postal" class="@error('postal') is-invalid @enderror" value="{{ old('postal') }}">
                @error('postal')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="city">Votre ville</label>
                <input type="text" name="city" id="city" placeholder="Votre ville" class="@error('city') is-invalid @enderror" value="{{ old('city') }}">
                @error('city')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="country">Pays</label>
                <input type="text" name="country" id="country" placeholder="Votre pays">
            </div>

            @if(count($filters))
                <div class="products__choices">
                    <p>Types de produits</p>
                    <div class="choices">
                        @foreach($filters as $filter)
                        <div>
                            <input type="checkbox" id="{{$filter->value}}" name="{{$filter->value}}" value="{{$filter->value}}">
                            <label for="{{$filter->value}}" class="products__label">{{$filter->text}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
            @endif
            <div>
                <label for="description">Descriptif de vos produits</label>
                <textarea name="description" id="description" rows="6" placeholder="Vos produits" class="@error('desctiption') is-invalid @enderror">{{ old('description') }}</textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <input type="checkbox" name="bio" id="bio">
                <label for="bio" class="bio">Je propose des produits bio</label>
            </div>
            <input type="submit" value="Envoyer l'inscription">
        </form>
    </div>
</main>
@include('components.footer')
</body>
</html>
