@component('mail::message')
    # Merci pour votre commande !

    Bonjour {{$content->first_name}} {{$content->last_name}},

    Nous vous remercions d'avoir réservé vos entrées pour le Marché des Gourmets.

    Nombre d'entrées adultes : {{$content->number}}
    Nombre d'entrées enfants : {{$content->number_kids}}

    Ce mail fait office de ticket d'entrée le jour du marché. Veuillez donc le présenter à l'entrée.

    En espérant vous revoir rapidement,
    Le Marché des Gourmets
@endcomponent
