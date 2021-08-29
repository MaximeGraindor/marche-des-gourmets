@extends('layouts.base')
@section('title', 'Album')
@section('content')
    <h1 class="hidden" role="heading" aria-level="1">
        {{ $album->name }} - Marché des Gourmets
    </h1>
    <x-header/>

    <main class="album">
        <div class="fil-ariane">
            <a href="">Albums</a>
            <span href="">{{ $album->name }}</span>
        </div>

        <div class="album-wrapper">
            @foreach ($files as $photo)
                <div class="photo-wrapper">
                    <a href="{{ asset('storage/'.$photo->name) }}" data-lightbox="roadtrip">
                        <img src="{{ asset('storage/'.$photo->name) }}" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </main>
    <x-footer/>
@endsection
