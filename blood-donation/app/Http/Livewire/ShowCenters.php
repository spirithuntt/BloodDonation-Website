<?php

namespace App\Http\Livewire;

use App\Models\Center;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCenters extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $centers = Center::paginate(10);
        if ($this->search != '') {
            //return instance
            $centers = Center::where('center_name', 'like', '%' . $this->search . '%')->paginate(10);
        }
        return view('livewire.show-centers', compact('centers'));
    }
    
    
}
