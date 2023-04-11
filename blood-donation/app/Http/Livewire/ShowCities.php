<?php

namespace App\Http\Livewire;

use App\Models\City;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCities extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $cities = City::paginate(10);
        if ($this->search != '') {
            //return instance
            $cities = City::where('city_name', 'like', '%' . $this->search . '%')->paginate(10);
        }
        return view('livewire.show-cities', compact('cities'));
    }
    
    
    
}
