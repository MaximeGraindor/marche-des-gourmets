<section class="exhibitors-list">
    <div class="exhibitors-top">
        <h2 class="top-title"  role="heading" aria-level="2">
            Les exposants
        </h2>
        <form action="post" class="top-filter" method="#">
            <div>
                <label for="country" class="hidden">Pays</label>
                <select name="country" id="country" wire:model="country">
                    <option value="belgique">Belgique</option>
                    <option value="espagne">Espagne</option>
                    <option value="allemagne">Allemagne</option>
                    <option value="pays-bas">Pays-Bas</option>
                    <option value="luxemboug">Luxembourg</option>
                </select>
            </div>
            <div>
                <label for="productCategory" class="hidden">Pays</label>
                <select name="productCategory" id="productCategory" wire:model="productCategory">
                    <option value="alcool/vin">Alcool/vin</option>
                    <option value="bioo">Bio</option>
                    <option value="gastronomie">gastronomie</option>
                </select>
            </div>
            <div>
                <label for="search" class="hidden">Nom</label>
                <div class="filter-input-wrapper">
                    <input type="search" name="name" id="search" placeholder="Rechercher" wire:model="name">
                    <span class="icon-search"></span>
                </div>
            </div>
            <noscript>
                <div>
                    <input type="submit" value="Filtrer">
                </div>
            </noscript>
        </form>
    </div>

    <div class="exhibitors-wrapper">
        @foreach ($allExhibitors as $exhibitor)
            <div class="exhibitors-item">
                <span class="item-title">{{ $exhibitor->company_name ? $exhibitor->company_name : $exhibitor->firstname . ' ' . $exhibitor->name }}</span>
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

    {{ $allExhibitors->links('utils.pagination') }}

</section>


