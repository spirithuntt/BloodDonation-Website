<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\BusinessHour;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get the donations from the database
        $donations = Donation::all();
        return view('home', compact('donations'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //get user's data so he can update it
        $user = auth()->user();
        //get the cities from the database
        $cities = $this->getCities();
        //get the centers from the database
        $centers = $this->getCenters();
        //get the donation types from the database
        $donationTypes = $this->getDonationTypes();
        //get the blood types from the database
        $bloodTypes = $this->getBloodTypes();
        return view('appointments.schedule-appointment', compact('user', 'cities', 'centers', 'donationTypes', 'bloodTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'city_id' => 'required',
        //     'center_id' => 'required',
        //     'donation_type_id' => 'required',
        //     'blood_type_id' => 'required',
        // ]);
        $user = auth()->user();
        $user->update($request->all());
        $user->donations()->create($request->all());
        return redirect()->route('reserve')->with('success', 'Your appointment has been scheduled successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donation $donation)
    {
        //
    }
    public function showReserve()
    {
        $datePeriod = collect();
        $currentDate = Carbon::now();
        $endDate = Carbon::now()->addDays(6);
    
        while ($currentDate->lte($endDate)) {
            $datePeriod->push($currentDate->copy());
            $currentDate->addDay();
        }
    
        $appointments = $datePeriod->map(function ($date) {
            return $this->generateTimeData($date);
        });
    
        return view('appointments.reserve', compact('appointments'));
    }
    private function generateTimeData(Carbon $date)
{
    $dayName = $date->format('l');

    $businessHours = BusinessHour::where('day', $dayName)->first();

    $hours = array_filter($businessHours->TimesPeriod);

    $currentAppointments = Donation::where('date', $date->toDateString())->pluck('time')->map(function ($time) {
        return $time->format('H:i');
    })->toArray();

    $availbleHours = array_diff($hours, $currentAppointments);

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
public function reserve(Request $request)
{
    $user_id = auth()->id();
    $id = auth()->user()->donations->last()->id;
    $date = $request->input('date');
    $time = $request->input('time');

    // check if the user has already reserved an appointment for the selected donation
    $reserved = Donation::where('user_id', $user_id)
        ->where('id', $id)
        ->where('date', $date)
        ->where('time', $time)
        ->exists();
    //get all appointments for the selected date
    $appointments = Donation::where('date', $date)->get();

    //check if the selected time is already reserved
    $reserved = $appointments->contains(function ($appointment) use ($time) {
        return $appointment->time->format('H:i') == $time;
    });
    //update the donation with the appointment data if the time is not reserved else return confirm view
    // if ($reserved) {
        $donation = Donation::find($id);
        $donation->date = $date;
        $donation->time = $time;
        $donation->save();
        return redirect()->route('home')->with('success', 'Your appointment has been scheduled successfully');
    // }
    // else {
    //     return view('appointments.confirm', compact('date', 'time'));
    // }
}















    public function getCities()
{
    return DB::table('cities')->get();
}
public function getCenters()
{
    return DB::table('centers')->get();
}
public function getDonationTypes()
{
    return DB::table('donation_types')->get();
}
public function getBloodTypes()
{
    return DB::table('blood_types')->get();
}


}