<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\BusinessHour;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //index
    public function index()
    {
        $datePeriod = CarbonPeriod::create(now(), now()->addDays(6));
        $appointments = [];
        foreach ($datePeriod as $date) {
            $dayName = $date->format('l');
    
            $businessHours = BusinessHour::where('day', $dayName)->first();
            
            $hours = $businessHours->TimesPeriod;

            $currentAppointments = Appointment::where('date', $date->toDateString())->pluck('time')->map(function ($time) {
                return $time->format('H:i');
            })->toArray();
            
            $reservedHours = array_intersect($hours, $currentAppointments);
            $availableHours = array_diff($hours, $currentAppointments);
            
            $appointments[] = [
                'day_name' => $dayName,
                'date' => $date->format('d-M'),
                'full_date' => $date->format('Y-m-d'),
                'available_hours' => $availableHours,
                'reserved_hours' => $reservedHours, // add this line
                'off' => $businessHours->off,
                'business_hours' => $hours,
            ];
        }
        return view('appointments.reserve', compact('appointments'));
    }





    public function reserve(Request $request)
    {

        $data = $request->merge(['user_id' => auth()->id()])->toArray();

        Appointment::create($data);

        return 'created';
    }
}