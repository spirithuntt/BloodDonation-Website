<?php

// namespace App\Http\Controllers;

// use App\Http\Requests\AppointmentRequest;
// use App\Models\Appointment;
// use App\Models\BusinessHour;
// use Carbon\Carbon;
// use Illuminate\Http\Request;

// class AppointmentController extends Controller
// {
//     public function index()
//     {
//         $datePeriod = collect();
//         $currentDate = Carbon::now();
//         $endDate = Carbon::now()->addDays(6);

//         while ($currentDate->lte($endDate)) {
//             $datePeriod->push($currentDate->copy());
//             $currentDate->addDay();
//         }

//         $appointments = $datePeriod->map(function ($date) {
//             return $this->generateTimeData($date);
//         });

//         return view('appointments.reserve', compact('appointments'));
//     }

//     public function reserve(AppointmentRequest $request)
//     {
//         $user_id = auth()->id();
//         $donation_id = auth()->user()->donations->last()->id;
//         $date = $request->input('date');
//         $time = $request->input('time');
    
//         // check if the user has already reserved an appointment for the selected donation
//         $existingAppointment = Appointment::where('user_id', $user_id)
//             ->where('donation_id', $donation_id)
//             ->first();
//         if ($existingAppointment) {
//             $existingAppointmentId = $existingAppointment->id;
//             $existingAppointmentTime = $existingAppointment->time;
    
//             return view('appointments.confirm', compact('existingAppointmentId', 'existingAppointmentTime', 'date', 'time'));
//         }
    
//         // get all appointments for the selected date
//         $appointments = Appointment::where('date', $date)->get();
    
//         // check if the selected time is available
//         foreach ($appointments as $appointment) {
//             $startTime = Carbon::parse($appointment->time);
//             $endTime = $startTime->copy()->addMinutes(30);
//             $selectedTime = Carbon::createFromFormat('Y-m-d H:i', "$date $time");
    
//             if ($selectedTime->between($startTime, $endTime)) {
//                 return redirect()->back()->with('error', 'This time is already taken');
//             }
//         }
    
//         // create the appointment
//         $data = $request->merge([
//             'donation_id' => $donation_id,
//             'user_id' => $user_id
//         ])->toArray();
//         Appointment::create($data);
    
//         return redirect()->route('home')->with('success', 'Appointment reserved successfully');
//     }

//     public function update(Request $request, $id)
//     {
//         $appointment = Appointment::find($id);
//         $appointment->update($request->all());
//         return redirect()->route('reserve');
//     }

//     private function generateTimeData(Carbon $date)
//     {
//         $dayName = $date->format('l');

//         $businessHours = BusinessHour::where('day', $dayName)->first();

//         $hours = array_filter($businessHours->TimesPeriod);

//         $currentAppointments = Appointment::where('date', $date->toDateString())->pluck('time')->map(function ($time) {
//             return $time->format('H:i');
//         })->toArray();

//         $availbleHours = array_diff($hours, $currentAppointments);

//         return [
//             'day_name' => $dayName,
//             'date' => $date->format('d M'),
//             'full_date' => $date->format('Y-m-d'),
//             'available_hours' => $availbleHours,
//             'reserved_hours' => $currentAppointments,
//             'business_hours' => $hours,
//             'off' => $businessHours->off
//         ];
//     }
// }

