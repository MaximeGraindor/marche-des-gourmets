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
                @if($currentEdition)
                <span>{{ $editionDate }}</span>
                @else
                <span>Pas d'édition en cours</span>
                @endif
            </div>
            <div class="infos-item item-price">
                @if($currentEdition)
                <span>{{ $currentEdition->price }}€ l'entrée</span>
                @else
                <span>Pas d'édition en cours</span>
                @endif
            </div>
            <div class="infos-item item-adress">
                @if($currentEdition)
                <span>{{ $currentEdition->adress }}</span>
                @else
                <span>Pas d'édition en cours</span>
                @endif

            </div>
        </div>

        <div class="home-countdown">
            <div class="countdown-content">
                <p class="home-countdown-text">
                    Rendez-vous en {{ $monthEdition }} !
                </p>
                @if($currentEdition)
                    <span class="hidden" id="date-timestamp">{{strtotime($currentEdition->start_date) * 1000}}</span>
                @endif
                <div class="countdown-wrapper">
                    <div class="countdown-item">
                        <span id="day">
                            00
                        </span>
                        <span>
                            jours
                        </span>
                    </div>
                    <span>:</span>
                    <div class="countdown-item">
                        <span id="hour">
                            00
                        </span>
                        <span>
                            heures
                        </span>
                    </div>
                    <span>:</span>
                    <div class="countdown-item">
                        <span id="minute">
                            00
                        </span>
                        <span>
                            minutes
                        </span>
                    </div>
                    <span>:</span>
                    <div class="countdown-item">
                        <span id="second">
                            00
                        </span>
                        <span>
                            secondes
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <section class="home-album">
            <div>
                <h2 class="album-title">
                    Anciennes éditions
                </h2>
            </div>
            @if($albums->count())
                <div class="home-album-wrapper">
                @foreach ($albums as $album)
                    <div class="album-item">
                        <a href="/album/{{ $album->id}}" class="album-link">
                            <img src="http://mdg.local/storage/img/about1.jpeg" alt="Photo aléatoire de l'album">
                            <span>{{ $album->name }}</span>
                        </a>
                    </div>
                @endforeach
                </div>
            @else
            <p class="home-noAlbum">
                Pas d'album photo pour le moment.
            </p>
            @endif
        </section>

    </main>
    <x-footer/>
@endsection
