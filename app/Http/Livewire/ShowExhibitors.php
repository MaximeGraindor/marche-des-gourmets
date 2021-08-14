<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Exhibitor;
use App\Models\Keyword;
use Livewire\WithPagination;

class ShowExhibitors extends Component
{

    use WithPagination;

    public $name;
    public $country;
    public $productCategory;

    protected $queryString = [
        'name',
        'country',
        'productCategory'
    ];

    public function mount()
    {
        //$this->allExhibitors = Exhibitor::paginate();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $keywords = Keyword::all();
        $allExhibitors = Exhibitor::query()
            ->with('keywords')
            ->whereHas('keywords', function($query)
            {
                $query->where('name', 'LIKE', '%'.$this->productCategory.'%');

            })
            ->where('exhibitors.name', 'LIKE', '%'.$this->name.'%')
            ->where('exhibitors.country', 'LIKE', '%'.$this->country.'%')
            ->paginate(9);

            //dd($allExhibitors);

        return view('livewire.show-exhibitors', [
            'allExhibitors' => $allExhibitors,
            'keywords' => $keywords
        ]);
    }
}
