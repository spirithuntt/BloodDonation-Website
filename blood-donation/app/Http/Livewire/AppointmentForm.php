<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class AppointmentForm extends Component
{
    public $selectedDate;
    public $selectedSlot;

    public function mount()
    {
        $this->selectedDate = Carbon::now()->format('Y-m-d');
    }
    public function fetchSlots($startDate, $endDate)
{
    $start = Carbon::parse($startDate);
    $end = Carbon::parse($endDate);
    $slots = [];

    while ($start <= $end) {
        $slot = $start->format('H:i');
        $slots[$slot] = $slot;
        $start->addMinutes(30);
    }

    return $slots;
}

public function selectSlot($slot)
{
    $this->selectedSlot = $slot;
}

}
