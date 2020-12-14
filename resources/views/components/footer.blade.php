<section class="home-partenaires">
    <h2 class="hidden partenaires-title" role="heading" aria-level="2">Nos partenaires</h2>
    <img src="{{ asset('/storage/assets/logoProvinceDeLiege.png') }}" alt="">
    <img src="{{ asset('/storage/assets/logoClub.png') }}" alt="">
</section>
<footer class="footer">
    <div class="footer-top">
        <img src="{{ asset('/storage/assets/logoMdgWhite.png') }}" alt="Logo du Marché des Gourmets">
    </div>
    <div class="footer-bottom">
        <ul class="footer-menu">
            <li class="footer-menu-item">
                <a href="/" class="footer-menu-link {{request()->route()->named('home') ? ' active' : ''}}">
                    Accueil
                </a>
            </li>
            <li class="footer-menu-item">
                <a href="/qui-sommes-nous" class="footer-menu-link {{request()->route()->named('about') ? ' active' : ''}}">
                    Qui sommes-nous ?
                </a>
            </li>
            <li class="footer-menu-item">
                <a href="/exposants" class="footer-menu-link {{request()->route()->named('exhibitors') ? ' active' : ''}}">
                    Exposants
                </a>
            </li>
            <li>
                <a href="/informations-pratiques" class="footer-menu-link {{request()->route()->named('informations') ? ' active' : ''}}">
                    Informations pratiques
                </a>
            </li>
            <li class="footer-menu-item">
                <a href="/contact" class="footer-menu-link {{request()->route()->named('contact') ? ' active' : ''}}">
                    Contact
                </a>
            </li>
            <li class="footer-menu-item">
                <a href="/billeterie" class="footer-menu-link {{request()->route()->named('ticketing') ? ' active' : ''}}">
                    Billeterie
                </a>
            </li>
        </ul>
    </div>
</footer>
