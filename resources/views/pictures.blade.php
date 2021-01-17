<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photos - Marché des Gourmets</title>
    <link href="{{asset('css/app.css?v=').time()}}" rel="stylesheet">
</head>
<body>
@include('components.header')
<main class="about__main">
    <div class="about__intro">
        <div class="intro__text">
            <h2 class="infos__title">Nos photos</h2>
        </div>
        <div class="intro__img">
            <img src="{{URL::asset('img/Pictures_MarcheDesGourmets.jpg')}}" alt="Marché des Gourmets" height="516" width="560">
        </div>
        <div class="intro__background"></div>
    </div>
    <div class="infos__content">
            <div>
                <h3>Quelques photos d'archive</h3>
                @foreach($images as $image)
                    <div class="image__div">
                        <img src="../storage/{{$image->file_name}}" alt="{{$image->alternative}}" height="215" width="320">
                    </div>
                @endforeach
            </div>
        {{$images->links()}}
    </div>
</main>
@include('components.footer')
</body>
</html>

