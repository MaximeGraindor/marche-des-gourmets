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
            ->where('name', 'LIKE', '%'.$this->name.'%')
            ->where('country', 'LIKE', '%'.$this->country.'%')
            ->paginate(9);

        return view('livewire.show-exhibitors', ['allExhibitors' => $allExhibitors]);
    }
}
