<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paiement | Marché des Gourmets</title>
    <link href="{{asset('css/app.css?v=').time()}}" rel="stylesheet">
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
@include('components.header')
<main class="checkout__main">
    <h1>Paiement</h1>

    <p>Total : <span class="total">{{$number * $price}},00€</span></p>

    <form action="/payment" method="post" id="payment-form">
        {{csrf_field()}}
        <div class="form-row">
            <label for="name">Nom du titulaire de la carte</label>
            <input type="text" id="name" name="name" placeholder="Nom" class="@error('name') is-invalid @enderror" value="{{ old('name') }}">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" placeholder="E-mail" class="@error('name') is-invalid @enderror" value="{{ old('email') }}">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="card-element">
                Informations banquaires
            </label>
            <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>

        <button>Procéder au paiement</button>
    </form>
</main>
@include('components.footer')
<script>
    // Create a Stripe client.
    var stripe = Stripe('pk_test_51IA36XBZ8p9lN5SpaBKtXfuHqqHRueA1mZ2yMHXnPISylKT0YP6WyMIoDZ4oYbY1xQ11UEoszhmRsIQLp0F7xryq00MhHVREwd');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
        base: {
            color: '#32325d',
            fontFamily: '"inter", "Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {
        style: style,
        hidePostalCode: true,
    });

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.on('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();


        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
            }
        });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
    }
</script>
</body>
</html>
