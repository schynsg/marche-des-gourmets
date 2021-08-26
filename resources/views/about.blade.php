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
            <p>Le Marché des Gourmets est un événement annuel organisé par le <b>Rotary Club de Flémalle</b> dans le merveilleux cadre du <b>Val Saint Lambert</b> afin d'obtenir des fonds pour aider les plus démunis.</p>
            <p>En 2002 nous accueillions une étape du <b>terroir de Wallonie</b> organisée avec la participation de l'Office des Produits Wallons.</p>
            <p>En 2003 nous inaugurions, en collaboration avec <b>la Province de Liège</b>, notre 1ère année du marché des produits des terroirs européens en accueillant notre 1er invité d'honneur, <b>la Province du Frioul</b>.</p>
            <p>Depuis lors, la fréquentation n'a cessé d'augmenter pour atteindre <b>4000 visiteurs</b> et plusieurs pays et régions se sont succédés comme Invité d'honneur : l'Irlande, le Portugal, l'Italie, Les Pays-Bas, l'Espagne, l'Alsace, le terroir de Wallonie qui est revenu pour notre 10ème édition, le tour des terroirs de France, la Communauté Germanophone de Belgique, la Province de Liège dans le cadre du « Circuit Court », la Grèce.</p>
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
                <p>Le Rotary Club de Flémalle, composé de <b>36 membres</b>, fait partie du réseau des <b>34.164 clubs</b> du Rotary International, fort de <b>1.223.083 membres</b> répartis dans le <b>monde entier</b>. Conscient des difficultés présentes dans notre société, il a inscrit dans ses objectifs <b>l’aide en faveur de la jeunesse et des plus démunis</b>.</p>
                <p>Le Rotary Club de Flémalle est animé à 100% par des <b>bénévoles</b> qui préparent des activités destinées à récolter des fonds pour les œuvres soutenues par le club. Les bénéfices ainsi dégagés sont <b>intégralement</b> distribués aux associations que nous aidons. Ce soutien peut prendre la forme d’une <b>aide financière ou de dons matériels</b>. Une étude préalable est toujours réalisée.</p>
                <p>Citons, pour celle-ci :</p>
                <ul>
                    <li>La Traille, à Engis</li>
                    <li>Le Foyer d’Accueil, à Grâce-Hollogne</li>
                    <li>Le Télé-Service, à Flémalle</li>
                    <li>Thermos, à Liège</li>
                    <li>La Vie par un Fil, à Montegnée</li>
                    <li>etc,...</li>
                </ul>
                <a href="{{ url('/contact') }}">Contactez-nous</a>
            </div>
        </div>
    </div>
</main>
@include('components.footer')
</body>
</html>
