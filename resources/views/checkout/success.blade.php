@extends('layouts.base')
@section('title', 'Paiement réussi')
@section('content')
    <h1 class="hidden">
        Paiement réussi - Marché des Gourmets
    </h1>
    <x-header/>
        <main class="success-checkout">
            <p class="success-checkout-title">
                Paiement réussi&nbsp;!
            </p>
            <p class="success-checkout-intro">
                Merci pour votre achat. Vous allez reçevoir un mail contenant un récapitulatif avec vos tickets.
            </p>
            <section class="success-checkout-recap">
                <h2>
                    <span>Récapitulatif</span>
                </h2>
                <div class="success-checkout-list">
                    <ul>
                        <li>
                            Nom&nbsp;: {{$session->metadata->customer_name}}
                        </li>
                        <li>
                            Prénom&nbsp;: {{$session->metadata->customer_firstname}}
                        </li>
                        <li>
                            email&nbsp;: {{$session->customer_email}}
                        </li>
                        <li>
                            Nombre de ticket&nbsp;: {{$session->metadata->quantity_ticket}}
                        </li>
                        <li>
                            Montant total&nbsp;: {{$session->metadata->quantity_ticket * 5}}€
                        </li>
                    </ul>
                </div>
                <div class="success-checkout-actions">
                    <form action="/send-email-checkout" method="post" class="succes-checkout-email">
                        @csrf
                        <input type="submit" value="Renvoyer le mail de confirmation">
                        <input type="hidden" name="session_id" value="{{$session->id}}">
                    </form>
                    <form action="/download-ticket" method="post" class="succes-checkout-pdf">
                        @csrf
                        <input type="submit" value="Télécharger les tickets">
                        <input type="hidden" name="session_id" value="{{$session->id}}">
                    </form>
                </div>
            </section>
        </main>
    <x-footer/>
@endsection
