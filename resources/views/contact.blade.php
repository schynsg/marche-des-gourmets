<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact - Marché des Gourmets</title>
    <link href="{{asset('css/app.css?v=').time()}}" rel="stylesheet">
</head>
<body>
@include('components.header')
<main class="about__main">
    <div class="about__intro">
        <div class="intro__text">
            <h2 class="infos__title">Contactez-nous</h2>
        </div>
        <div class="intro__img">
            <img src="{{URL::asset('img/Contact_MarcheDesGourmets.jpg')}}" alt="Marché des Gourmets" height="516" width="560">
        </div>
        <div class="intro__background"></div>
    </div>
    <div class="contact__content">
        <div>
            <h3>Marché des Gourmets</h3>
            <p>Philippe Vanstalle</p>
            <p>Quai de Rome, 10/23</p>
            <p>4000 Liège</p>
        </div>
        <div>
            <h3>Formulaire de contact</h3>
            <form action="#" class="contact__form">
                <div>
                    <label for="name">Nom et prénom</label>
                    <input type="text" id="name" name="name" placeholder="Votre nom et prénom">
                </div>
                <div>
                    <label for="email">Votre adresse e-mail</label>
                    <input type="email" name="email" id="email" placeholder="Votre adresse e-mail">
                </div>
                <div>
                    <label for="message">Votre message</label>
                    <textarea name="message" id="message" rows="10" placeholder="Bonjour,..."></textarea>
                </div>
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </div>
</main>
@include('components.footer')
</body>
</html>

