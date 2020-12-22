@extends('layouts.base')
@section('title', 'Exposants')
@section('content')
    <h1 class="hidden"  role="heading" aria-level="1">
        Exposants - Marché des Gourmets
    </h1>
    <x-header/>

    <main class="exhibitors">
        <section class="exhibitors-list">
            <div class="exhibitors-top">
                <h2 class="top-title"  role="heading" aria-level="2">
                    Les exposants
                </h2>
                <form action="post" class="top-filter" method="#">
                    <div>
                        <label for="country" class="hidden">Pays</label>
                        <select name="country" id="country">
                            <option value="belgique">Belgique</option>
                            <option value="espagne">Espagne</option>
                            <option value="allemagne">Allemagne</option>
                            <option value="pays-bas">Pays-Bas</option>
                            <option value="luxemboug">Luxembourg</option>
                        </select>
                    </div>
                    <div>
                        <label for="productCategory" class="hidden">Pays</label>
                        <select name="productCategory" id="productCategory">
                            <option value="alcool/vin">Alcool/vin</option>
                            <option value="bioo">Bio</option>
                            <option value="gastronomie">gastronomie</option>
                        </select>
                    </div>
                    <div>
                        <label for="search" class="hidden">Pays</label>
                        <div class="filter-input-wrapper">
                            <input type="text" name="search" id="search" placeholder="Rechercher">
                            <span class="icon-search"></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="exhibitors-wrapper">
                @foreach ($allExhibitors as $exhibitor)
                    <div class="exhibitors-item">
                        <span class="item-title">{{ $exhibitor->company_name ? $exhibitor->company_name : $exhibitor->firstname . '' . $exhibitor->name }}</span>
                        <span class="item-placement">Emplacement 15</span>
                        <span class="item-country">{{ $exhibitor->country }}, {{ $exhibitor->location }}</span>
                        <div class="item-keywords">
                            @foreach($exhibitor->keywords as $keyword)
                                <span>{{ $keyword->name }}</span>
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="exhibitors-pagination">
                <a href="#" class="pagination-left"></a>
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#" class="pagination-right"></a>
            </div>
        </section>

        <section class="become-exhibitor" id="become-exhibitor">
            <h2 class="be-title" role="heading" aria-level="2">Postuler pour devenir exposant</h2>
            <form class="be-form" action="#" method="post">
                <div class="form-firstname-name">
                    <div>
                        <label for="firstname">Prénom</label>
                        <input type="text" name="firstname" id="firstname">
                    </div>
                    <div>
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name">
                    </div>
                </div>
                <div class="form-companyName">
                    <label for="companyName">Nom de la société</label>
                    <input type="text" name="companyName" id="companyName" placeholder="Jean">
                </div>
                <div class="form-email">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="example@gmail.com">
                </div>
                <div class="form-telephone">
                    <label for="telephone">Téléphone</label>
                    <input type="text" name="telephone" id="telephone" placeholder="0476285960">
                </div>
                <div class="form-country">
                    <label for="country">Pays</label>
                    <input type="text" name="country" id="country">
                </div>
                <div class="form-postal-location">
                    <div>
                        <label for="postal">Code postal</label>
                        <input type="text" name="postal" id="postal">
                    </div>
                    <div>
                        <label for="location">Localité</label>
                        <input type="text" name="location" id="location">
                    </div>
                </div>
                <div class="form-categoryProduct">
                    <label for="categoryProduct">catégorie de produit</label>
                    <div class="multiselect-wrapper">
                        <div class="selectbox">
                            <select name="categoryProduct" id="categoryProduct">
                                <option value="">Sélectionnez vos catégories de produits</option>
                            </select>
                            <div class="overSelect"></div>
                        </div>
                        <div class="checkboxes">
                            <label for="bio">
                                <input type="checkbox" id="bio" />
                                Bio
                            </label>
                            <label for="vin">
                                <input type="checkbox" id="vin" />
                                Vin
                            </label>
                            <label for="Alcool">
                                <input type="checkbox" id="Alcool" />
                                Alcool
                            </label>
                            <label for="patisserie">
                                <input type="checkbox" id="patisserie" />
                                Patisserie
                            </label>
                            <label for="chocolaterie">
                                <input type="checkbox" id="chocolaterie" />
                                Chocolaterie
                            </label>
                            <label for="saucissons">
                                <input type="checkbox" id="saucissons" />
                                Saucissons
                            </label>
                            <label for="fromages">
                                <input type="checkbox" id="fromages" />
                                Fromages
                            </label>
                            <label for="huiles">
                                <input type="checkbox" id="huiles" />
                                Huiles
                            </label>
                            <label for="epices">
                                <input type="checkbox" id="epices" />
                                Épices
                            </label>
                            <label for="pains">
                                <input type="checkbox" id="pains" />
                                Pains
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-website">
                    <label for="website">Site internet</label>
                    <input type="text" name="website" id="website" placeholder="www.example.com">
                </div>
                <div class="form-informations">
                    <label for="informations">Informations supplémentaire</label>
                    <textarea type="text" name="informations" id="informations"> </textarea>
                </div>
                <div class="form-submit">
                    <input type="submit" value="Postuler">
                </div>
            </form>
        </section>
    </main>

    <x-footer/>
@endsection
