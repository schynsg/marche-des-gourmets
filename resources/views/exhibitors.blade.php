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
                    <p>Nous avons sélectionnez une <b>trentaine d'exposants</b> pour vous accueillir au Marché des Gourmets, qu'ils soient producteurs, vignerons commerçants, épiciers,... Nous les avons sélectionnés pour la <b>passion</b> qu'ils transmettent dans leurs <b>produits de qualités</b>.</p>
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
        <div class="exhibitors">
            <div class="exhib__forms">
                <form action="#" class="exhib__search-form">
                    <label for="search">Rechercher un exposant</label>
                    <div>
                        <input type="text" name="search" id="search" placeholder="Mot-clé"><!--
                        --><input type="submit" value="rechercher" style=" background-image: url('{{asset('img/search.svg')}}');">
                    </div>
                </form>
                <form action="#" class="exhib__filter-form">
                    <label for="filter">Type de produits</label>
                    <select name="filter" id="filter">
                        <option value="all">Tout</option>
                        <option value="alcohol">Vins, Gins, Rhums,...</option>
                        <option value="cheese">Fromages</option>
                        <option value="meat">Charcuterie, salaisons,...</option>
                        <option value="grocery">Épicerie</option>
                        <option value="dessert">Pâtisserie, desserts,...</option>
                        <option value="other">Autres</option>
                    </select>
                </form>
            </div>
            <ul class="exhib__list">
                <li class="exhibitor">
                    <div class="exhibitor__infos">
                        <h3>Ferme D'artagnan</h3>
                        <p class="exhibitor__address">Rue de Tongres 77, 4684 Haccourt (BE)</p>
                        <p class="exhibitors__products">Foie gras, magrets, filets, rillettes, cuisses confites de canard et dérivés</p>
                    </div>
                    <a href="https://www.lafermedartagnan.be/" title="Vers le site de l'exposant">Visiter le site web</a>
                </li>
                <li class="exhibitor">
                    <div class="exhibitor__infos">
                        <h3 class="bio">Daphne Olive Oil</h3>
                        <p class="exhibitor__address">Avenue Félix Deblon 151, 4910 Theux (BE)</p>
                        <p class="exhibitors__products">Huile d'olives grecque (région de Kalamata)</p>
                    </div>
                    <a href="https://daphneoil.bio/fr/" title="Vers le site de l'exposant">Visiter le site web</a>
                </li>
                <li class="exhibitor">
                    <div class="exhibitor__infos">
                        <h3>Sweet Cuberdons - Bonbons à l'ancienne</h3>
                        <p class="exhibitor__address">Rue des Téris 56, 4100 Seraing (BE)</p>
                        <p class="exhibitors__products">Cuberdons artisanaux</p>
                    </div>
                    <a href="https://cuberdons.eu/" title="Vers le site de l'exposant">Visiter le site web</a>
                </li>
                <li class="exhibitor">
                    <div class="exhibitor__infos">
                        <h3 class="bio">La Boutique du Champignon</h3>
                        <p class="exhibitor__address">2b Rempart Nord, 68420 EGUISHEIM (FR)</p>
                        <p class="exhibitors__products">Produits gastronomiques autour de la thématique du champignon</p>
                    </div>
                    <a href="https://www.laboutiqueduchampignon.com/fr/" title="Vers le site de l'exposant">Visiter le site web</a>
                </li>
                <li class="exhibitor">
                    <div class="exhibitor__infos">
                        <h3 class="bio">La Boutique du Champignon</h3>
                        <p class="exhibitor__address">2b Rempart Nord, 68420 EGUISHEIM (FR)</p>
                        <p class="exhibitors__products">Produits gastronomiques autour de la thématique du champignon</p>
                    </div>
                    <a href="https://www.laboutiqueduchampignon.com/fr/" title="Vers le site de l'exposant">Visiter le site web</a>
                </li>
                <li class="exhibitor">
                    <div class="exhibitor__infos">
                        <h3>Sweet Cuberdons - Bonbons à l'ancienne</h3>
                        <p class="exhibitor__address">Rue des Téris 56, 4100 Seraing (BE)</p>
                        <p class="exhibitors__products">Cuberdons artisanaux</p>
                    </div>
                    <a href="https://cuberdons.eu/" title="Vers le site de l'exposant">Visiter le site web</a>
                </li>
            </ul>
            <div class="exhib__page-change">
                <a href="#">
                    <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.5 21" height="24" width="22"><defs><style>.cls-11{fill:#05000c;}</style></defs><path id="Icon_material-play-arrow" data-name="Icon material-play-arrow" class="cls-11" d="M3.44,11.37l16.5,10.51V.88Z" transform="translate(-3.44 -0.88)"/></svg>
                    Précédant
                </a>
                <a href="#">
                    Suivant
                    <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.5 21" height="24" width="22"><defs><style>.cls-11{fill:#05000c;}</style></defs><path id="Icon_material-play-arrow" data-name="Icon material-play-arrow" class="cls-11" d="M3.44.88v21l16.5-10.5Z" transform="translate(-3.44 -0.88)"/></svg>
                </a>
            </div>
            <a href="{{ url('/new-exhibitor') }}" class="exhib__new-link">Devenir exposant</a>
        </div>
    </div>
</main>
@include('components.footer')
</body>
</html>
