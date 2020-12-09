@extends('layouts.base')

@section('content')
    <x-header/>

    <main class="exhibitors">
        <div class="exhibitors-list">
            <div class="exhibitors-top">
                <h1 class="top-title">
                    Les exposants
                </h1>
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
                            <option value="Vin">Vin</option>
                            <option value="épices">épices</option>
                            <option value="Confiseries">Confiseries</option>
                            <option value="pays-bas">Pays-Bas</option>
                            <option value="luxemboug">Luxembourg</option>
                        </select>
                    </div>
                    <div>
                        <label for="search" class="hidden">Pays</label>
                        <input type="text" name="search" id="search">
                    </div>
                </form>
            </div>
            <div class="exhibitors-wrapper">
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                </div>
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                </div>
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                </div>
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                </div>
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                </div>
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                </div>
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                </div>
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                </div>
                <div class="exhibitors-item">
                    <span class="item-title">Amitié Amay behin</span>
                    <span class="item-description">Bière le mur de huy Belgique</span>
                    <span class="item-placement">Emplacement 15</span>
                    <span class="item-country">France</span>
                </div>
            </div>
        </div>

        <section class="become-exhibitor">
            <h2 class="be-title">Postuler pour devenir exposant</h2>
            <form class="be-form" action="#" method="post">
                <div class="form-firstname">
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname">
                </div>
                <div class="form-name">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="form-email">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="form-telephone">
                    <label for="telephone">Téléphone</label>
                    <input type="text" name="telephone" id="telephone">
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
                <input type="submit" value="Postuler" class="form-submit">
            </form>
        </section>

    </main>

    <x-footer/>
@endsection
