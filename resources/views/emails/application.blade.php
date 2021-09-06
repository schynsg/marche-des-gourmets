@component('mail::message')
    # Une nouvelle demande d'exposant vous attend

    Bonjour,

    Nous vous informons qu'une nouvelle demande d'exposant a été réalisée au nom de {{$content->name}}.

    Rendez-vous sur l'espace d'admin pour en savoir plus.

    @component('mail::button', ['url' => 'http://167.99.35.202/nova/resources/exhibitors'])
        Accéder à l'espace d'admin
    @endcomponent
@endcomponent
