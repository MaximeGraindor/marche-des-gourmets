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
                            <input type="search" name="search" id="search" placeholder="Rechercher">
                            <span class="icon-search"></span>
                        </div>
                    </div>
                </form>
            </div>

            <livewire:show-exhibitors />

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
            @if (Session::get('success'))
                <p class="success">
                    {{ Session::get('success') }}
                </p>
                @endif
            <form class="be-form" action="/exposants" method="post">
                @csrf
                <div class="form-firstname-name">
                    <div>
                        <label for="firstname">Prénom*</label>
                        <input type="text" name="firstname" id="firstname" class="{{ $errors->has('firstname') ? 'error-input' : ''}}" value="{{ old('firstname') }}">
                        @error('firstname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="name">Nom*</label>
                        <input type="text" name="name" id="name" class="{{ $errors->has('name') ? 'error-input' : ''}}" value="{{ old('name') }}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-companyName">
                    <label for="companyName">Nom de la société</label>
                    <input type="text" name="company_name" id="companyName" placeholder="Jean" value="{{ old('company_name') }}">
                </div>
                <div class="form-email">
                    <label for="email">Email*</label>
                    <input type="email" name="email" id="email" placeholder="example@gmail.com" class="{{ $errors->has('email') ? 'error-input' : ''}}" value="{{ old('email') }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-telephone">
                    <label for="telephone">Téléphone*</label>
                    <input type="tel" name="telephone" id="telephone" placeholder="0476285960" class="{{ $errors->has('telephone') ? 'error-input' : ''}}" value="{{ old('firstname') }}">
                    @error('telephone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-country">
                    <label for="country">Pays*</label>
                    <input type="text" name="country" id="country" class="{{ $errors->has('country') ? 'error-input' : ''}}" value="{{ old('firstname') }}">
                    @error('country')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-postal-location">
                    <div>
                        <label for="postal_code">Code postal*</label>
                        <input type="text" name="postal_code" id="postal_code" class="{{ $errors->has('postal_code') ? 'error-input' : ''}}" value="{{ old('postal_code') }}">
                        @error('postal_code')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="location">Localité*</label>
                        <input type="text" name="location" id="location" class="{{ $errors->has('location') ? 'error-input' : ''}}" value="{{ old('location') }}">
                        @error('location')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-categoryProduct">
                    <label for="categoryProduct">catégorie de produit*</label>
                    <div class="multiselect-wrapper">
                        <div class="selectbox">
                            <select name="categoryProduct" id="categoryProduct">
                                <option value="">Sélectionnez vos catégories de produits</option>
                            </select>
                            <div class="overSelect"></div>
                        </div>
                        <div class="checkboxes">
                            @foreach ($allKeywords as $keyword)
                                <label for="{{ $keyword->name }}">
                                    <input type="checkbox" id="{{ $keyword->name }}" value="{{ $keyword->name }}" name="keywords[]" />
                                    {{ $keyword->name }}
                                </label>
                            @endforeach
                        </div>
                        @error('keywords')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-website">
                    <label for="website">Site internet</label>
                    <input type="url" name="website" id="website" placeholder="www.example.com" value="{{ old('website') }}">
                </div>
                <div class="form-informations">
                    <label for="informations">Informations supplémentaire</label>
                    <textarea type="text" name="informations" id="informations" value="{{ old('informations') }}"> </textarea>
                </div>
                <div class="form-submit">
                    <input type="submit" value="Postuler">
                </div>
            </form>
        </section>
    </main>

    <x-footer/>
@endsection
