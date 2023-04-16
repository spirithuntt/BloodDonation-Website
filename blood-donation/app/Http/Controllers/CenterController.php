<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\City;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    public function index()
    {
        $centers = Center::paginate(5);
        return view('centers.index', compact('centers'));
    }
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
        $request->validate([
            'center_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'city_id' => 'required',
        ]);
        $center->update($request->all());
        return redirect()->route('centers.index')->with('success', 'Center updated successfully');
    }

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

}
