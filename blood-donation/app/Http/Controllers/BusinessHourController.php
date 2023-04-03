<?php

namespace App\Http\Controllers;

use App\Models\BusinessHour;
use App\Http\Requests\BusinessHoursRequest;

class BusinessHourController extends Controller
{
    // index
    public function index()
    {
        $businessHours = BusinessHour::all();
        return view('appointments.business_hours', compact('businessHours'));
    }

    //update
    public function update(BusinessHoursRequest $request)
    {
        BusinessHour::query()->upsert($request->validated()['data'],['day']);
        return back();
    }
}
