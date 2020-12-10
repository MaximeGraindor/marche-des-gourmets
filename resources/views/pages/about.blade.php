@extends('layouts.base')
@section('title', 'Qui sommes-nous ?')
@section('content')
    <h1 class="hidden">
        Qui sommes-nous ? - Marché des Gourmets
    </h1>
    <x-header/>
    <main class="about">
        <section class="about-mdg">
            <div class="mdg-left">
                <img src="{{ asset(asset('/storage/img/about1.jpeg')) }}" alt="">
            </div>
            <div class="mdg-right">
                <h2 class="mdg-title">
                    Le marché des Gourmets
                </h2>
                <div>
                    <p>
                        Le Marché des Gourmets est un événement annuel organisé par le Rotary Club de Flémalle sur le prestigieux site de l'abbaye de la Paix-Dieu afin d'obtenir des fonds pour aider les plus démunis.
                    </p>
                    <p>
                        En 2002 nous accueillions une étape du terroir de Wallonie organisée avec la participation de l'Office des Produits Wallons.
                    </p>
                    <p>
                        En 2003 nous inaugurions, en collaboration avec la Province de Liège, notre 1ère année du marché des produits des terroirs européens en accueillant notre 1er invité d'honneur, la province du Frioul.
                    </p>
                    <p>
                        Depuis lors, la fréquentation n'a cessé d'augmenter pour atteindre 4000 visiteurs et plusieurs pays et régions se sont succédés comme Invité d'honneur : l'Irlande, le Portugal, l'Italie, Les Pays-Bas, l'Espagne, l'Alsace, le terroir de Wallonie qui est revenu pour notre 10ème édition, le tour des terroirs de France, la Communauté Germanophone de Belgique, la Province de Liège dans le cadre du « Circuit Court », la Grèce.
                    </p>
                </div>
            </div>
        </section>
        <section class="about-rf">
            <div class="rf-left">
                <img src="{{ asset(asset('/storage/img/about2.jpeg')) }}" alt="">
            </div>
            <div class="rf-right">
                <h2 class="rf-title">
                    Le club Rotary de Flémalle
                </h2>
                <div>
                    <p>
                        Le Rotary Club de Flémalle, composé de 36 membres, fait partie du réseau des 34.164 clubs du Rotary International, fort de 1.223.083 membres répartis dans le monde entier. Conscient des difficultés présentes dans notre société, il a inscrit dans ses objectifs l’aide en faveur de la jeunesse et des plus démunis.
                    </p>
                    <p>
                        Le Rotary Club de Flémalle est animé à 100% par des bénévoles qui préparent des activités destinées à récolter des fonds pour les œuvres soutenues par le club. Les bénéfices ainsi dégagés sont INTÉGRALEMENT distribués aux associations que nous aidons. Ce soutien peut prendre la forme d’une aide financière ou de dons matériels. Une étude préalable est toujours réalisée.
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
                        Le marché des Gourmets
                    </h2>
                    <div>
                        <p>
                            Le Rotary est un réseau mondial de 1,2 million de décideurs solidaires qui voient un monde où les gens se rassemblent et passent à l’action pour apporter un changement durable – dans le monde, dans leur communauté et en eux-mêmes. Apporter des solutions aux problèmes les plus pressants nécessite un véritable engagement et une vision. Depuis plus de 110 ans, les membres du Rotary utilisent leur passion, leur dynamisme et leur intelligence pour passer à l’action. Qu’il s’agisse d’alphabétisation, de paix, d’eau ou de santé, nous travaillons avec détermination pour améliorer les conditions de vie dans le monde et nous honorons nos engagements. Ce qu'ils font :
                        </p>
                    </div>
                </div>
            </div>
            <section class="r-actions">
                <h3 class="hidden r-actions-title">
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

    </main>

    <x-footer/>
@endsection
