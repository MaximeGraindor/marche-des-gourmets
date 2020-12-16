@extends('layouts.base')
@section('title', 'Contact')
@section('content')
    <h1 class="hidden" role="heading" aria-level="1">
        Contact - Marché des Gourmets
    </h1>
    <x-header/>

    <main class="contact">
        <h2 class="contact-title" role="heading" aria-level="2">
            Contactez-nous
        </h2>
        <div class="contact-wrapper">
            <div class="contact-left">
                <dl class="contact-left-list">
                    <dd class="list-email">Email</dd>
                    <dt>{{ Page::get('email') }}</dt>

                    <dd class="list-telephone">Téléphone</dd>
                    <dt>{{ Page::get('Télephone') }}</dt>

                    <dd class="list-courrier">Courrier</dd>
                    <dt>
                        <span>c/o Philippe Vanstalle</span>
                        <span>Quai de Rome, 10/23</span>
                        <span>4000 Liège</span>
                    </dt>
                </dl>
            </div>
            <div class="contact-right">
                <form action="#" method="post" class="contact-form">
                    <div class="form-name">
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="form-email">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="form-subject">
                        <label for="subject">Sujet</label>
                        <input type="text" name="subject" id="subject">
                    </div>
                    <div class="form-informations">
                        <label for="informations">Informations supplémentaire</label>
                        <textarea type="text" name="informations" id="informations"> </textarea>
                    </div>
                    <div class="form-submit">
                        <input type="submit" value="Envoyer">
                    </div>
                </form>
            </div>
        </div>

        <section class="missingInfo">
            <h2 class="missingInfo-title" role="heading" aria-level="2">
                Vous avez peut-être manqué
            </h2>
            <div class="missingInfo-wrapper">
                <a href="/informations-pratiques" class="missingInfo-item">
                    <img src="{{ asset('/storage/img/missingInfo-place.jpg') }}" alt="">
                    <span>Informations pratiques</span>
                </a>
                <span class="missingInfo-span">Ou</span>
                <a href="/exposants#become-exhibitor" class="missingInfo-item">
                    <img src="{{ asset('/storage/img/missingInfo-exhibitor.jpg') }}" alt="">
                    <span>Devenir exposant</span>
                </a>
            </div>
        </section>
    </main>

    <x-footer/>
@endsection
