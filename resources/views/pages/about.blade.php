@extends('layouts.base')
@section('title', Page::get('title'))
@section('content')
    <h1 class="hidden"  role="heading" aria-level="1">
        Qui sommes-nous ? - Marché des Gourmets
    </h1>
    <x-header/>
    <main class="about">
        <section class="about-mdg">
            <div class="mdg-left">
                <img src="{{ asset(asset('/storage/img/about1.jpeg')) }}" alt="">
            </div>
            <div class="mdg-right">
                <h2 class="mdg-title" role="heading" aria-level="2">
                    {{ Page::get('mdgTitle') }}
                </h2>
                <div>
                    <p>
                        <span class="bold">Le Marché des Gourmets</span> est un événement annuel organisé par le Rotary Club de Flémalle sur le prestigieux site de l'abbaye de la Paix-Dieu afin d'obtenir des fonds pour aider les plus démunis.
                    </p>
                    <p>
                        En <span class="bold">2002</span> nous accueillions une étape du terroir de Wallonie organisée avec la participation de l'Office des Produits Wallons.
                    </p>
                    <p>
                        En <span class="bold">2003</span> nous inaugurions, en collaboration avec la Province de Liège, notre 1ère année du marché des produits des terroirs européens en accueillant notre 1er invité d'honneur, la province du Frioul.
                    </p>
                    <p>
                        Depuis lors, la fréquentation n'a cessé d'augmenter pour atteindre <span class="bold">4000 visiteurs</span> et plusieurs pays et régions se sont succédés comme Invité d'honneur : l'Irlande, le Portugal, l'Italie, Les Pays-Bas, l'Espagne, l'Alsace, le terroir de Wallonie qui est revenu pour notre 10ème édition, le tour des terroirs de France, la Communauté Germanophone de Belgique, la Province de Liège dans le cadre du « Circuit Court », la Grèce.
                    </p>
                </div>
            </div>
        </section>
        <section class="about-rf">
            <div class="rf-left">
                <img src="{{ asset(asset('/storage/img/about2.jpeg')) }}" alt="">
            </div>
            <div class="rf-right">
                <h2 class="rf-title" role="heading" aria-level="2">
                    {{ Page::get('rfTitle') }}
                </h2>
                <div>
                    <p>
                        Le Rotary Club de Flémalle, composé de <span class="bold">36 membres</span>, fait partie du réseau des <span class="bold">34.164 clubs</span> du Rotary International, fort de <span class="bold">1.223.083 membres</span> répartis dans le monde entier. Conscient des difficultés présentes dans notre société, il a inscrit dans ses objectifs l’aide en faveur de la jeunesse et des plus démunis.
                    </p>
                    <p>
                        Le Rotary Club de Flémalle est animé à 100% par des <span class="bold">bénévoles</span> qui préparent des activités destinées à récolter des fonds pour les œuvres soutenues par le club. Les bénéfices ainsi dégagés sont INTÉGRALEMENT distribués aux associations que nous aidons. Ce soutien peut prendre la forme d’une aide financière ou de dons matériels. Une étude préalable est toujours réalisée.
                    </p>
                </div>
            </div>
        </section>
        <section class="about-r">
            <div class="r-top">
                <div class="r-left">
                    <img src="{{ asset(asset('/storage/img/about3.jpeg')) }}" alt="">
                </div>
                <div class="r-right">
                    <h2 class="r-title">
                        {{ Page::get('rotaryTitle') }}
                    </h2>
                    <div>
                        <p>
                            Le Rotary est un réseau mondial de <span class="bold">1,2 million de décideurs solidaires</span> qui voient un monde où les gens se rassemblent et passent à l’action pour apporter un changement durable – dans le monde, dans leur communauté et en eux-mêmes. Apporter des solutions aux problèmes les plus pressants nécessite un véritable engagement et une vision. Depuis <span class="bold">plus de 110 ans</span>, les membres du Rotary utilisent leur passion, leur dynamisme et leur intelligence pour passer à l’action. Qu’il s’agisse d’alphabétisation, de paix, d’eau ou de santé, nous <span class="bold">travaillons avec détermination</span> pour améliorer les conditions de vie dans le monde et nous honorons nos engagements. Ce qu'ils font :
                        </p>
                    </div>
                </div>
            </div>
            <section class="r-actions">
                <h3 class="hidden r-actions-title"  role="heading" aria-level="3">
                    Actions sur Rotary
                </h3>
                <div class="r-actions-wrapper">
                    <div class="r-actions-item">
                        <img src="{{ asset('storage/img/actions-peace.jpg') }}" alt="Photo">
                        <span>Construire la paix</span>
                    </div>
                    <div class="r-actions-item">
                        <img src="{{ asset('storage/img/actions-desease.jpg') }}" alt="Photo">
                        <span>Combattre les maladies</span>
                    </div>
                    <div class="r-actions-item">
                        <img src="{{ asset('storage/img/actions-hygiene.jpg') }}" alt="Photo">
                        <span>apporter l’eau potable,
                            l’assainissement et l’hygiène</span>
                    </div>
                    <div class="r-actions-item">
                        <img src="{{ asset('storage/img/actions-motherAndChildren.jpg') }}" alt="Photo">
                        <span>soigner les mères et leurs enfants</span>
                    </div>
                    <div class="r-actions-item">
                        <img src="{{ asset('storage/img/actions-classroom.jpg') }}" alt="Photo">
                        <span>soutenir l’éducation</span>
                    </div>
                    <div class="r-actions-item">
                        <img src="{{ asset('storage/img/actions-localEconomy.jpg') }}" alt="Photo">
                        <span>développer les économies locales</span>
                    </div>
                </div>
            </section>
        </section>

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
