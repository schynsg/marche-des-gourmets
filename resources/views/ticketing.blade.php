<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billeterie - Marché des Gourmets</title>
    <link href="{{asset('css/app.css?v=').time()}}" rel="stylesheet">
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
                    <p>{!!nl2br($texts->where('title', '=', 'Ticketing page introduction')->first()->content)!!}</p>
                </div>
            </div>
        </div>
        <div class="intro__img">
            <img src="{{URL::asset('img/Ticketing_MarcheDesGourmets.jpg')}}" alt="Présentation de nos exposants" height="516" width="560">
        </div>
        <div class="intro__background"></div>
    </div>
    <div class="ticketing__content">
        <form action="/payment" method="get" class="ticketing__form">
            <div>
                <label for="number">Entrée adulte (<?= number_format($price, 2, ',', ' ') ;?>€)</label>
                <input type="number" name="number" id="number" value="1" min="1">
            </div>
            <p class="ticketing__16-years">
                L'entrée est gratuite pour les moins de 16 ans. Merci de renseigner uniquement le nombre de personnes de plus de 16 ans.
            </p>
            <p id="total_p" style="display: none">Total : <span class="total"></span></p>
            <input type="submit" value="Procéder au paiement">
        </form>
    </div>
</main>
@include('components.footer')
<script>
    const totalParagraph = document.getElementById('total_p');
    totalParagraph.style.display = "block";
    const ticketInput = document.getElementById('number');
    const price = <?php echo $price ;?>;
    const totalSpan = document.getElementsByClassName('total')[0];
    totalSpan.innerHTML = ((600 / 100).toFixed(2) + '€');

    function changeNumber () {
        const ticketNumber = ticketInput.value;
        const totalPrice = ticketNumber * price;
        totalSpan.innerHTML = ((totalPrice).toFixed(2) + '€');
    }

    ticketInput.addEventListener('click', changeNumber);
</script>
</body>
</html>

