<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::paginate(5);
        return view('cities.index', compact('cities'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'city_name' => 'required',
            'region' => 'required',
        ]);
        City::create($request->all());
        return redirect()->route('cities.index')->with('success', 'City created successfully.');

    }
    public function edit(string $id)
    {
        $city = City::find($id);
        return response()->json($city);


    }

    public function update(Request $request, City $city)
    {
        $request->validate([
            'city_name' => 'required',
            'region' => 'required',
        ]);
        $city->update($request->all());
        return redirect()->route('cities.index')->with('success', 'City updated successfully.');
    }

    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('cities.index');
        
    }
    public function getCities()
    {
        $cities = City::all();
        return response()->json($cities);
    }

}
