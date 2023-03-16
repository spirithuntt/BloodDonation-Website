<?php

namespace App\Http\Controllers;

use App\Models\Center;
use Illuminate\Http\Request;

class CenterController extends Controller
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
        return view('centers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
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
        return view('centers.edit', compact('center'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Center $center)
    {
        $request->validate([
            'name' => 'required',
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
}
