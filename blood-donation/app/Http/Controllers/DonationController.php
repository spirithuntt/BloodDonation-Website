<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\Donation;
use App\Models\Result;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\BusinessHour;

class DonationController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $donations = Donation::where('user_id', $userId)->get();
        $results = Result::all();
        return view('home', compact('donations', 'results'));   
    }

    //just for admin
    public function showDonationDetails()
    {
        $donations = Donation::all();
        $tests = Test::all();
        $results = Result::all();
        $doneDonationsCount = $this->getDoneDonationsCount();
        $pendingDonationsCount = $this->getPendingDonationsCount();
        $donorsCount = $this->getDonorsCount();
        $centersCount = $this->getCenters()->count();
        return view('dashboard', compact('donations', 'tests', 'results', 'doneDonationsCount', 'pendingDonationsCount', 'donorsCount', 'centersCount'));
    }

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


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'ID_number' => 'required',
            'phone' => 'required',
            'city_id' => 'required',
            'center_id' => 'required',
            'donation_type_id' => 'required',
            'blood_type_id' => 'required',
        ]);
        $user = auth()->user();
        $user->update($request->all());
        $user->donations()->create($request->all());
        return redirect()->route('reserve')->with('success', 'Your appointment has been scheduled successfully');
    }


    public function show(Donation $donation)
    {
        //
    }


    public function edit(Donation $donation)
    {
        $user = $donation->user;
        $cities = $this->getCities();
        $centers = $this->getCenters();
        $donationTypes = $this->getDonationTypes();
        $bloodTypes = $this->getBloodTypes();
        return view('donations.edit', compact('donation', 'user', 'cities', 'centers', 'donationTypes', 'bloodTypes'));
    }


    public function update(Request $request, Donation $donation)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'ID_number' => 'required | min:4',
            'phone' => 'required | min:10',
            'city_id' => 'required',
            'center_id' => 'required',
            'donation_type_id' => 'required',
            'blood_type_id' => 'required',
        ]);
        $donation->update($request->all());
        $donation->user->update($request->all());
        return redirect()->route('dashboard')->with('success', 'The Donation has been updated successfully');
    }


    public function destroy(Donation $donation)
    {
        $donation->delete();
        return redirect()->route('dashboard')->with('success', 'The Donation has been deleted successfully');
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



    //method to get the results of the donation
    public function addResultForm(Request $request, Donation $donation)
    {
        $tests = Test::all();
        return view('results.add_result_form', compact('donation', 'tests'));
    }


    //!statistics methods
    public function getDoneDonationsCount()
    {
        return Donation::where('is_donated', 1)->count();
    }
    public function getDonorsCount()
    {
        return Donation::where('is_donated', 1)->groupBy('user_id')->count();
    }
    public function getPendingDonationsCount()
    {
        return Donation::where('is_donated', 0)->count();
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