<header class="header">
    <ul class="header-menu">
        <li class="header-menu-item">
            <a href="/" class="header-menu-link {{request()->route()->named('home') ? ' active' : ''}}">
                Accueil
            </a>
        </li>
        <li class="header-menu-item">
            <a href="/qui-sommes-nous" class="header-menu-link {{request()->route()->named('about') ? ' active' : ''}}">
                Qui sommes-nous ?
            </a>
        </li>
        <li class="header-menu-item">
            <a href="/exposants" class="header-menu-link {{request()->route()->named('exhibitors') ? ' active' : ''}}">
                Exposants
            </a>
        </li>
        <li class="header-menu-item">
            <img src="{{ asset(asset('/storage/assets/logoMdg.png')) }}" alt="Logo du Marché des Gourmets">
        </li>
        <li class="header-menu-item">
            <a href="/informations-pratiques" class="header-menu-link {{request()->route()->named('informations') ? ' active' : ''}}">
                Informations pratiques
            </a>
        </li>
        <li class="header-menu-item">
            <a href="/contact" class="header-menu-link {{request()->route()->named('contact') ? ' active' : ''}}">
                Contact
            </a>
        </li>
        <li class="header-menu-item">
            <a href="/billeterie" class="header-menu-link {{request()->route()->named('ticketing') ? ' active' : ''}}">
                Billeterie
            </a>
        </li>
    </ul>
</header>
