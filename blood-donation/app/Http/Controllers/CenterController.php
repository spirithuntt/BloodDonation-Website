<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\City;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    public function index()
    {
        if(!auth()->user()->hasRole('admin')){
            return redirect()->back()->with('error', 'You are not authorized to access this page');
        }
        else{
        $centers = Center::paginate(5);
        return view('centers.index', compact('centers'));
        }
    }
    public function store(Request $request)
    {
        if(!auth()->user()->hasRole('admin')){
            return redirect()->back()->with('error', 'You are not authorized to do this');
        }
        else{
        $request->validate([
            'center_name' => 'required',
            'address' => 'required',
            'phone' => 'required | unique:centers',
            'city_id' => 'required',
        ]);
        Center::create($request->all());
        return redirect()->route('centers.index');
    }
    }

    public function show(Center $center)
    {
        //
    }
    public function edit(string $id)
    {
        $center = Center::find($id);
        // return json response
        return response()->json($center);
    }

    public function update(Request $request, Center $center)
    {
        if(!auth()->user()->hasRole('admin')){
            return redirect()->back()->with('error', 'You are not authorized to do this');
        }
        else{
        $request->validate([
            'center_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'city_id' => 'required',
        ]);
        $center->update($request->all());
        return redirect()->route('centers.index')->with('success', 'Center updated successfully');
    }
    }

    public function destroy(Center $center)
    {
        if(!auth()->user()->hasRole('admin')){
            return redirect()->back()->with('error', 'You are not authorized to do this');
        }
        else{
        $center->delete();
        return redirect()->route('centers.index');
        }
    }

    public function getCities()
    {
        $cities = City::all();
        return response()->json($cities);
    }


//fetch donation centers in the selected city for the donation request form
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
