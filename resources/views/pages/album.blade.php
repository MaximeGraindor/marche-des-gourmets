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
            @foreach ($album->photos as $photo)
                <div class="photo-wrapper">
                    <img src="{{ asset('storage/'.$photo->path) }}" alt="">
                </div>
            @endforeach
        </div>
    </main>
    <x-footer/>
@endsection
