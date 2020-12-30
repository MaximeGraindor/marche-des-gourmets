<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Exhibitor;

class ShowExhibitors extends Component
{

    //public $allExhibitors;

    public function mount()
    {
        //$this->allExhibitors = Exhibitor::paginate();
    }

    public function render()
    {

        $allExhibitors = Exhibitor::paginate(9);

        return view('livewire.show-exhibitors', ['allExhibitors' => $allExhibitors]);
    }
}
