@extends('layouts.base')

@section('content')
    <x-header/>
    <main class="home">
        <div class="home-intro">
            <p class="home-intro-text">
                La <span class="bold">20e édition des Marché des Gourmets</span> est un événement annuel organisé par le Rotary Club de Flémalle sur le prestigieux site de l'abbaye de la Paix-Dieu afin d'obtenir des fonds pour aider les plus démunis.
            </p>
            <a href="/billeterie" class="home-intro-link">Acheter un ticket !</a>
        </div>

        <div class="home-infos">
            <div class="infos-item item-date">
                <span>27 et 28 mars</span>
            </div>
            <div class="infos-item item-price">
                <span>5€ l'entrée</span>
            </div>
            <div class="infos-item item-adress">
                <span>Chateau du Val Saint Lambert</span>
            </div>
        </div>

        <div class="home-countdown">
            <div class="countdown-content">
                <p class="home-countdown-text">
                    Rendez-vous en mars !
                </p>
                <div class="countdown-wrapper">
                    <div class="countdown-item">
                        <span>
                            50
                        </span>
                        <span>
                            jours
                        </span>
                    </div>
                    <span>:</span>
                    <div class="countdown-item">
                        <span>
                            50
                        </span>
                        <span>
                            heures
                        </span>
                    </div>
                    <span>:</span>
                    <div class="countdown-item">
                        <span>
                            50
                        </span>
                        <span>
                            minutes
                        </span>
                    </div>
                    <span>:</span>
                    <div class="countdown-item">
                        <span>
                            50
                        </span>
                        <span>
                            secondes
                        </span>
                    </div>
                </div>
            </div>
        </div>



        <section class="home-album">
            <h2 class="album-title">
                Anciennes éditions
            </h2>
            <div class="album-wrapper">
                <div class="album-item">
                    <img src="{{ asset('/storage/img/actions-classroom.jpg') }}" alt="Photo aléatoire de l'album">
                    <span>Titre de l'édition</span>
                </div>
                <div class="album-item">
                    <img src="{{ asset('/storage/img/actions-classroom.jpg') }}" alt="Photo aléatoire de l'album">
                    <span>Titre de l'édition</span>
                </div>
                <div class="album-item">
                    <img src="{{ asset('/storage/img/actions-classroom.jpg') }}" alt="Photo aléatoire de l'album">
                    <span>Titre de l'édition</span>
                </div>
                <div class="album-item">
                    <img src="{{ asset('/storage/img/actions-classroom.jpg') }}" alt="Photo aléatoire de l'album">
                    <span>Titre de l'édition</span>
                </div>
            </div>
        </section>

    </main>
    <x-footer/>
@endsection
