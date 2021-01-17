<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Merci | Marché des Gourmets</title>
    <link href="{{asset('css/app.css?v=').time()}}" rel="stylesheet">
</head>
<body>
@include('components.header')
<main class="success__main">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" height= 100 width= 100>
        <ellipse style="fill:#D87D1A;" cx="256" cy="256" rx="256" ry="255.832"/>
        <polygon style="fill:#FFFFFF;" points="235.472,392.08 114.432,297.784 148.848,253.616 223.176,311.52 345.848,134.504
	391.88,166.392 "/>
    </svg>
    <p class="p_success">Merci pour votre achat ! Nous vous avons envoyé un email de confirmation comprenant vos tickets.</p>
    <a href="{{ url('/') }}" class="a_success">Retour à l'accueil</a>
</main>
@include('components.footer')
</body>
</html>


