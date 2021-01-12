<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Exhibitor;
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

        $allExhibitors = Exhibitor::query()
            /* ->select(
                        'exhibitors.firstname',
                        'keywords.name',
                        'exhibitors.company_name',
                        'exhibitors.email',
                        'exhibitors.telephone',
                        'exhibitors.country',
                        'exhibitors.location',
                        'exhibitors.postal_code',

                        'exhibitors.name'
                    )
            ->join('exhibitor_keywords', 'exhibitors.id', '=', 'exhibitor_keywords.exhibitor_id')
            ->join('keywords', 'exhibitor_keywords.keyword_id', '=', 'keywords.id') */
            ->where('exhibitors.name', 'LIKE', '%'.$this->name.'%')
            ->where('exhibitors.country', 'LIKE', '%'.$this->country.'%')
            ->paginate(9);

            //dd($allExhibitors);

        return view('livewire.show-exhibitors', ['allExhibitors' => $allExhibitors]);
    }
}
