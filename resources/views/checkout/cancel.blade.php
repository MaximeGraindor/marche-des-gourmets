@extends('layouts.base')
@section('title', 'Paiement échoué')
@section('content')
    <h1 class="hidden">
        Paiement échoué - Marché des Gourmets
    </h1>
    <x-header/>
        <main class="cancel-checkout">
            <p class="cancel-checkout-title">
                Quelque chose s'est mal passé
            </p>
            <p class="cancel-checkout-intro">
                Quelque chose s'est mal passé pendant votre achat. Veuillez réessayer.
            </p>
        </main>
    <x-footer/>
@endsection
