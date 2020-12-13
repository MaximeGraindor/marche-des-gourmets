@extends('layouts.base')
@section('title', 'Informations pratiques')
@section('content')
    <h1 class="hidden">
        Informations pratiques - Marché des Gourmets
    </h1>
    <x-header/>

    <main class="informations">
        <section class="informations-wrapper">
            <div class="informations-left">
                <h2 class="informations-title">
                    Informations pratiques
                </h2>
                <div class="left-wrapper">
                    <dl class="left-list">
                        <dd>Quand ?</dd>
                        <dt>Le 27 et 28 mars</dt>
                        <dd>Où ?</dd>
                        <dt>Salle des moines Val Saint-Lambert</dt>
                        <dd>prix ?</dd>
                        <dt>Entrée : 5€ (gratuit pour les enfant de -12)</dt>
                        <dd>Adresse ?</dd>
                        <dt>
                            <span>Chateau du Val Saint Lambert</span>
                            <span>Esplanade du Val,</span>
                            <span>4100 Seraing</span>
                            <a href="https://www.cstc.be/homepage/download.cfm?lang=fr&dtype=agenda&doc=Roadshow_Plan_Liege.pdf" target="_blank">Voir le plan d'accès</a>
                        </dt>
                    </dl>
                </div>
            </div>
            <div class="informations-right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2532.8079428517435!2d5.480598916459187!3d50.59352292949534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f928ef867f13%3A0x9224d8cdcbf5d4c5!2sCristal%20Discovery%20Mus%C3%A9e%20Val%20Saint%20Lambert!5e0!3m2!1sfr!2sbe!4v1607805103109!5m2!1sfr!2sbe"
                width="600"
                height="450"
                frameborder="0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0">
            </iframe>
            </div>
        </section>

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
