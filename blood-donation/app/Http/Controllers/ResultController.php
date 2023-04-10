<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Test;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return all the results depends on the donation id
        $tests = Test::all();
        $results = Result::all();
        return view('results.index', compact('tests', 'results'));
    }

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $results = $request->input('results');

        foreach ($results as $test_id => $result_value) {
            $result = new Result;
            $result->test_id = $test_id;
            $result->value = $result_value;
            $result->save();
        }

        return redirect()->back()->with('success', 'Results saved successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Result $result)
    {
        // show the form and test data to update depends on the donation id 
        $test = Test::where('donation_id', $result->donation_id)->first();
        return view('results.create', compact('result', 'test'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result)
    {
        //
    }
}
