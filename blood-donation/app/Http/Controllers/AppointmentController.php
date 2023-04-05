<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use App\Models\BusinessHour;
use App\Services\AppointmentService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $datePeriod = collect();
        $currentDate = Carbon::now();
        $endDate = Carbon::now()->addDays(6);

        while ($currentDate->lte($endDate)) {
            $datePeriod->push($currentDate->copy());
            $currentDate->addDay();
        }

        $appointments = $datePeriod->map(function($date) {
            return (new AppointmentService)->generateTimeData($date);
        });

        return view('appointments.reserve', compact('appointments'));
    }

    public function reserve(AppointmentRequest $request)
    {
        $user_id = auth()->id();
        $date = $request->input('date');
        $time = $request->input('time');
    
        // check if the user has already reserved an appointment for the selected date
        $existingAppointment = Appointment::where('user_id', $user_id)
                                            ->where('date', $date)
                                            ->exists();
        if ($existingAppointment) {
            return response()->json([
                'message' => 'You have already reserved an appointment for this date.'
            ], 422);
        }
    
        // create the appointment
        $data = $request->merge(['user_id' => $user_id])->toArray();
        Appointment::create($data);
    
        return 'created';
    }

    //to clean up the code in the controller and make it more readable and reusable 
    //we can create a service class to handle the logic of the controller
    public function generateTimeData(Carbon $date)
    {
        $dayName = $date->format('l');

        $businessHours = BusinessHour::where('day',$dayName)->first();

        $hours = array_filter($businessHours->TimesPeriod);

        $currentAppointments = Appointment::where('date', $date->toDateString())->pluck('time')->map(function($time){
            return $time->format('H:i');
        })->toArray();

        $availbleHours = array_diff($hours,$currentAppointments);

        return [
            'day_name' => $dayName,
            'date' => $date->format('d M'),
            'full_date' => $date->format('Y-m-d'),
            'available_hours' => $availbleHours,
            'reserved_hours' => $currentAppointments,
            'business_hours' => $hours,
            'off' => $businessHours->off
        ];
    }
}
