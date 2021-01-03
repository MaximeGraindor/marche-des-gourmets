@extends('layouts.base')
@section('title', 'Accueil')
@section('content')
    <h1 class="hidden" role="heading" aria-level="1">
        Accueil - Marché des Gourmets
    </h1>
    <x-header/>
    <main class="home">
        <div class="home-intro">
            {!!Page::get('introduction')!!}
            <a href="/billeterie" class="home-intro-link">Acheter un ticket !</a>


        </div>

        <div class="home-infos">
            <div class="infos-item item-date">
                <span>{{ $editionDate }}</span>
            </div>
            <div class="infos-item item-price">
                <span>{{ $currentEdition->price }}€ l'entrée</span>
            </div>
            <div class="infos-item item-adress">
                <span>{{ $currentEdition->adress }}</span>
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
                @foreach ($albums as $album)
                    <div class="album-item">
                        <a href="/{{ $album->id}}" class="album-link">
                            <img src="{{ asset('/storage/img/actions-classroom.jpg') }}" alt="Photo aléatoire de l'album">
                            <span>{{ $album->name }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

    </main>
    <x-footer/>
@endsection
