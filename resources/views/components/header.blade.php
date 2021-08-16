<header class="header">
    <nav>
        <h2 class="hidden" role="heading" aria-level="2">
            Menu de naviguation
        </h2>
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
            <li class="header-menu-item menu-item-logo">
                <a href="/"><img src='./img/logoMdg.svg' alt="Logo du Marché des Gourmets"></a>
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
                <a href="/billeterie" class="header-menu-link {{request()->route()->named('ticketing') ? ' active' : ''}} menu-ticketing">
                    Billeterie
                </a>
            </li>
        </ul>
        <div class="menuResponsive">
            <div class="menuResponsive-img">
                <img src="./img/menu.svg" alt="Menu responsive">
            </div>
            <ul class="menuResponsive-menu">
                <li class="menuResponsive-item">
                    <a href="/" class="menuResponsive-link {{request()->route()->named('home') ? ' active' : ''}}">
                        Accueil
                    </a>
                </li>
                <li class="menuResponsive-item">
                    <a href="/qui-sommes-nous" class="menuResponsive-link {{request()->route()->named('about') ? ' active' : ''}}">
                        Qui sommes-nous ?
                    </a>
                </li>
                <li class="menuResponsive-item">
                    <a href="/exposants" class="menuResponsive-link {{request()->route()->named('exhibitors') ? ' active' : ''}}">
                        Exposants
                    </a>
                </li>
                <li class="menuResponsive-item">
                    <a href="/informations-pratiques" class="menuResponsive-link {{request()->route()->named('informations') ? ' active' : ''}}">
                        Informations pratiques
                    </a>
                </li>
                <li class="menuResponsive-item">
                    <a href="/contact" class="menuResponsive-link {{request()->route()->named('contact') ? ' active' : ''}}">
                        Contact
                    </a>
                </li>
                <li class="menuResponsive-item">
                    <a href="/billeterie" class="menuResponsive-link {{request()->route()->named('ticketing') ? ' active' : ''}}">
                        Billeterie
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="header-background"></div>
</header>
