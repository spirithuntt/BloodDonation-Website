<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        return view('scheduleAppointment', compact('user', 'cities', 'centers', 'donationTypes', 'bloodTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store the scheduleAppointment form data in the database and redirect to home

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
