@extends('layouts.base')

@section('content')
    <x-header/>

    <main class="informations">
        <div class="informations-wrapper">
            <div class="informations-left">
                <h1 class="informations-title">
                    Informations pratiques
                </h1>
                <div class="left-wrapper">
                    <dl class="left-list">
                        <dd>Quand ?</dd>
                        <dt>Le 27 et 28 mars</dt>
                        <dd>Où ?</dd>
                        <dt>Salle des moines Val Saint-Lambert</dt>
                        <dd>prix ?</dd>
                        <dt>Entrée : 5€ (gratuit pour les enfant de -12)</dt>
                        <dd>Adresse ?</dd>
                        <dt>Chateau du Val Saint Lambert Esplanade du Val, 4100 Seraing</dt>
                    </dl>
                </div>
            </div>
            <div class="informations-right">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d632.3499707179124!2d5.577436629248875!3d50.65683554893072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0fa7116a4a7e3%3A0x29bf376d97e5baf2!2sZzam.be%20%3A%20Agence%20Web%20%C3%A0%20Li%C3%A8ge%20%2F%20Cr%C3%A9ation%20de%20site%20internet%20Joomla!5e0!3m2!1sfr!2sbe!4v1607435781557!5m2!1sfr!2sbe"
                    width="600"
                    height="450"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0">
                </iframe>
            </div>
        </div>

        <section class="informations-supp">
            <h2 class="supp-title">
                Informations supplémentaire
            </h2>
            <div class="supp-wrapper">
                <div class="supp-item">
                    <img src="{{ asset('/storage/img/supp-restaurant.jpg') }}" alt="Photo supp" class="supp-item-photo">
                    <span class="supp-item-title">Restaurant</span>
                    <p class="supp-item-desc">Venez déguster les plats réalisés par les exposants </p>
                </div>
                <div class="supp-item">
                    <img src="{{ asset('/storage/img/supp-bar.jpg') }}" alt="Photo supp" class="supp-item-photo">
                    <span class="supp-item-title">Bar</span>
                    <p class="supp-item-desc">Venez vous désaltérer le temps d'une pause.</p>
                </div>
                <div class="supp-item">
                    <img src="{{ asset('/storage/img/supp-payment.jpg') }}" alt="Photo supp" class="supp-item-photo">
                    <span class="supp-item-title">Paiement</span>
                    <p class="supp-item-desc">A la caisse du restaurant, un terminal bancontact vous permet de retirer de l'argent pour effectuer vos achats.</p>
                </div>
                <div class="supp-item">
                    <img src="{{ asset('/storage/img/supp-children.jpg') }}" alt="Photo supp" class="supp-item-photo">
                    <span class="supp-item-title">Garderie</span>
                    <p class="supp-item-desc">Vous pouvez déposer vos enfants dans notre garderie le temps de votre balade</p>
                </div>
            </div>
        </section>

    </main>

    <x-footer/>
@endsection
