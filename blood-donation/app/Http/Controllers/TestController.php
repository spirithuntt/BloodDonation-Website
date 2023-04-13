<?php

namespace App\Http\Controllers;

use App\Models\DonationType;
use App\Models\Test;
use Illuminate\Http\Request;
use App\Http\Controllers\DonationController;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tests = Test::all();
        return view('dashboard', compact('tests'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'test_name' => 'required',
            'criteria' => 'required',
            'donation_type_id' => 'required',
            'result_type' => 'required',
        ]);
    $selectedOptionValue = $request->input('result_type');

        $test = new Test();
        $test->test_name = $request->test_name;
        $test->criteria = $request->criteria;
        $test->donation_type_id = $request->donation_type_id;
        $test->result_type = $selectedOptionValue;
        $test->save();
        return redirect()->route('dashboard')->with('success', 'Test created successfully.');
    }
    
    
    

    /**
     * Display the specified resource.
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        //
    }
}
