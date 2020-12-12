@extends('layouts.base')
@section('title', 'Exposants')
@section('content')
    <h1 class="hidden">
        Exposants - Marché des Gourmets
    </h1>
    <x-header/>

    <main class="exhibitors">
        <section class="exhibitors-list">
            <div class="exhibitors-top">
                <h2 class="top-title">
                    Les exposants
                </h2>
                <form action="post" class="top-filter">
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
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                    <div class="item-keywords">
                        <span>Alcool/vin</span>
                        <span>Bio</span>
                        <span>Gastronomie</span>
                    </div>
                </div>
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                    <div class="item-keywords">
                        <span>Alcool/vin</span>
                        <span>Bio</span>
                        <span>Gastronomie</span>
                    </div>
                </div>
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                    <div class="item-keywords">
                        <span>Alcool/vin</span>
                        <span>Bio</span>
                        <span>Gastronomie</span>
                    </div>
                </div>
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                    <div class="item-keywords">
                        <span>Alcool/vin</span>
                        <span>Bio</span>
                        <span>Gastronomie</span>
                    </div>
                </div>
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                    <div class="item-keywords">
                        <span>Alcool/vin</span>
                        <span>Bio</span>
                        <span>Gastronomie</span>
                    </div>
                </div>
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                    <div class="item-keywords">
                        <span>Alcool/vin</span>
                        <span>Bio</span>
                        <span>Gastronomie</span>
                    </div>
                </div>
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                    <div class="item-keywords">
                        <span>Alcool/vin</span>
                        <span>Bio</span>
                        <span>Gastronomie</span>
                    </div>
                </div>
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                    <div class="item-keywords">
                        <span>Alcool/vin</span>
                        <span>Bio</span>
                        <span>Gastronomie</span>
                    </div>
                </div>
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                    <div class="item-keywords">
                        <span>Alcool/vin</span>
                        <span>Bio</span>
                        <span>Gastronomie</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="become-exhibitor" id="become-exhibitor">
            <h2 class="be-title">Postuler pour devenir exposant</h2>
            <form class="be-form" action="#" method="post">
                <div class="form-firstname">
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Jean">
                </div>
                <div class="form-name">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" placeholder="Jean">
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
                    <input type="text" name="categoryProduct" id="categoryProduct">
                </div>
                <div class="form-website">
                    <label for="website">Site internet</label>
                    <input type="text" name="website" id="website">
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
