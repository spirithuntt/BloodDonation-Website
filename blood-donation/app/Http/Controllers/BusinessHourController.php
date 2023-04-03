<?php

namespace App\Http\Controllers;

use App\Models\BusinessHour;
use Illuminate\Http\Request;

class BusinessHourController extends Controller
{
    // index
    public function index()
    {
        $businessHours = BusinessHour::all();
        return view('appointments.business_hours', compact('businessHours'));
    }

    //update
    public function update(BusinessHour $request)
    {
        $data = array_values($request->all()['data']);
        BusinessHour::query()->upsert($data, ['day']);
        return back();
    }
}
