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

{{ $allExhibitors->links() }}
