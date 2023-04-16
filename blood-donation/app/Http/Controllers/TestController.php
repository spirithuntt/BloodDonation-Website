<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();
        return view('dashboard', compact('tests'));
    }

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
}
