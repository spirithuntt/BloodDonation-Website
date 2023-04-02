<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class AppointmentForm extends Component
{
    public $date;
    public $time;

    public function mount()
    {
        $this->date = Carbon::now()->format('Y-m-d');
        $this->time = Carbon::now()->addHour()->format('H:i');
    }

    public function render()
    {
        return view('livewire.appointment-form');
    }
}
