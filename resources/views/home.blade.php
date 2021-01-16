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
                    Rendez-vous en {{ $monthEdition }} !
                </p>
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
            <div class="album-wrapper">
                @foreach ($albums as $album)
                    <div class="album-item">
                        <a href="/album/{{ $album->id}}" class="album-link">
                            <img src="{{ asset('/storage/' . $album->photos[0]->path) }}" alt="Photo aléatoire de l'album">
                            <span>{{ $album->name }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

    </main>
    <x-footer/>

    <script>
        setInterval(()=>{
            let editionDate = {{ strtotime($currentEdition->start_date) }} * 1000
            let now = {{ time() }} * 1000

            let distance = editionDate - now

            let days = Math.floor(distance / (1000 * 60 * 60 * 24));
            let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById('day').innerHTML = days
            document.getElementById('hour').innerHTML = hours
            document.getElementById('minute').innerHTML = minutes
            document.getElementById('second').innerHTML = seconds
        }, 1000);
    </script>
@endsection
