<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\City;
use App\Models\Donation;
use App\Models\Result;
use App\Models\Test;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
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
        //get the donation id from the request
        $donation_id = $request->donation_id;
    
        //loop through the tests and store the result for each test
        foreach ($request->result_type as $test_id => $result_type) {
            $result = new Result();
    
            $result->test_id = $test_id;
            $result->donation_id = $donation_id;
    
            if ($result_type == 'number') {
                $result->result_number = floatval($request->result_number[$test_id]);
            } else {
                $result->passed = $request->passed[$test_id];
            }
    
            $result->save();
        }
    
        return redirect()->route('dashboard');
    }

    public function generatePDF($donation_id)
    {
        $donation_idd = $donation_id;
        $results = Result::where('donation_id', $donation_idd)->get();
        $donation = Donation::where('id', $donation_idd)->first();
        $user = User::where('id', $donation->user_id)->first();
        $center = Center::where('id', $donation->center_id)->first();
        $city = City::where('id', $center->city_id)->first();
        $tests = Test::all();
        $donation_date = $donation->date;
        $donation_time = $donation->time;

        $data = compact('results', 'user', 'center', 'city', 'tests', 'donation_date', 'donation_time');
        $pdf = PDF::loadView('results.result_pdf', $data);
        return $pdf->download($user->name . '-results ' . '.pdf');
        // return view('results.result_pdf', compact('results', 'user', 'center', 'city', 'tests', 'donation_date', 'donation_time'));
        
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
