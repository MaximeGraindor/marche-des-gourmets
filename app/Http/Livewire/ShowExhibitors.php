<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Exhibitor;

class ShowExhibitors extends Component
{

    public $name;
    public $country;
    public $productCategory;

    protected $queryString = [
        'country',
    ];

    public function mount()
    {
        //$this->allExhibitors = Exhibitor::paginate();
    }

    public function render()
    {

        $allExhibitors = Exhibitor::query()
            ->where('country', 'LIKE', '%'.$this->country.'%')
            ->paginate(9);

        return view('livewire.show-exhibitors', ['allExhibitors' => $allExhibitors]);
    }
}
