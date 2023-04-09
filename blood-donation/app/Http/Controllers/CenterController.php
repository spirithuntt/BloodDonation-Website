<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\City;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centers = Center::paginate(5);
        return view('centers.index', compact('centers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $cities = $this->getCities();
        // return view('centers.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'center_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'city_id' => 'required',
        ]);
        Center::create($request->all());
        return redirect()->route('centers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Center $center)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Center $center)
    {
        //return view with center data and cities data
        $cities = $this->getCities();
        return view('centers.edit', compact('center', 'cities'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Center $center)
    {
        $request->validate([
            'center_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'city_id' => 'required',
        ]);
        $center->update($request->all());
        return redirect()->route('centers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Center $center)
    {
        $center->delete();
        return redirect()->route('centers.index');
    }

    public function getCities()
    {
        $cities = City::all();
        return response()->json($cities);
    }

    public function fetchDonationCenters(Request $request)
{
    $city_id = $request->input('city_id');

    $centers = Center::where('city_id', $city_id)->get();

    $response = [
        'donation_centers' => $centers
    ];

    return response()->json($response);
}

}
