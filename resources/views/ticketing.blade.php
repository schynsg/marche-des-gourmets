<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billeterie - Marché des Gourmets</title>
    <link href="{{asset('css/app.css?v=').time()}}" rel="stylesheet">
    @include('components.favicon')
</head>
<body>
@include('components.header')
<main class="exhib__main">
    <div class="exhib__intro">
        <div>
            <div class="intro__text">
                <div class="intro__title">
                    <h2>Billeterie</h2>
                </div>
                <div class="intro__content">
                    <p>Merci de bien vouloir sélectionner le <b>nombre d'entrées</b> que vous désirez.</p>
                </div>
            </div>
        </div>
        <div class="intro__img">
            <img src="{{URL::asset('img/Ticketing_MarcheDesGourmets.jpg')}}" alt="Présentation de nos exposants" height="516" width="560">
        </div>
        <div class="intro__background"></div>
    </div>
    <div class="ticketing__content">
        @if($availableEntries > 0) {
            <form action="/payment" method="get" class="ticketing__form">
            <div>
                <label for="number">Entrées adultes (<?= number_format($price, 2, ',', ' ') ;?>€)</label>
                <input type="number" name="number" id="number" value="1" min="1" max="{{$availableEntries}}">
            </div>
            <p id="total_p" style="display: none">Total : <span class="total"></span></p>
            <div>
                <label for="number_kids">Entrées - {{$ageForFree}} ans (Gartuit)</label>
                <input type="number" name="number_kids" id="number_kids" value="0" min="0">
            </div>
            <div>
                <label for="first_name">Votre prénom</label>
                <input type="text" name="first_name" id="first_name" placeholder="Entrez ici votre prénom" required>
            </div>
            <div>
                <label for="last_name">Votre nom</label>
                <input type="text" name="last_name" id="last_name" placeholder="Entrez ici votre nom" required>
            </div>
            <input type="submit" value="Procéder au paiement">
        </form>
        @else
            <p>La prochaine édition du Marché des Gourmets est sold out. Veillez nous en excuser.</p>
        @endif
    </div>
</main>
@include('components.footer')
<script>
    const totalParagraph = document.getElementById('total_p');
    totalParagraph.style.display = "block";
    const ticketInput = document.getElementById('number');
    const price = {{$price}};
    const totalSpan = document.getElementsByClassName('total')[0];
    totalSpan.innerHTML = (price.toFixed(2) + '€');

    function changeNumber () {
        const ticketNumber = ticketInput.value;
        const totalPrice = ticketNumber * price;
        totalSpan.innerHTML = ((totalPrice).toFixed(2) + '€');
    }

    ticketInput.addEventListener('click', changeNumber);
</script>
</body>
</html>

