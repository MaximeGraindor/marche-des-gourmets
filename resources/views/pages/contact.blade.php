@extends('layouts.base')
@section('title', 'Contact')
@section('content')
    <h1 class="hidden">
        Contact - Marché des Gourmets
    </h1>
    <x-header/>

    <main class="contact">
        <h2 class="contact-title">
            Contactez-nous
        </h2>
        <div class="contact-wrapper">
            <div class="contact-left">
                <dl class="contact-left-list">
                    <dd class="list-email">Email</dd>
                    <dt>info@marchedesgourmets.be</dt>

                    <dd class="list-telephone">Téléphone</dd>
                    <dt>00 32 (0) 475 311 105</dt>

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
                        <input type="submit" value="Postuler">
                    </div>
                </form>
            </div>
        </div>

        <section class="missingInfo">
            <h2 class="missingInfo-title">
                Vous avez peut-être manqué
            </h2>
            <div class="missingInfo-wrapper">
                <a href="/informations-pratiques" class="missingInfo-item">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2532.8079428517435!2d5.480598916459187!3d50.59352292949534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f928ef867f13%3A0x9224d8cdcbf5d4c5!2sCristal%20Discovery%20Mus%C3%A9e%20Val%20Saint%20Lambert!5e0!3m2!1sfr!2sbe!4v1607805103109!5m2!1sfr!2sbe"
                    width="600" height="450"
                    frameborder="0"
                    allowfullscreen=""
                    -hidden="false"
                    tabindex="0">
                </iframe>
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
