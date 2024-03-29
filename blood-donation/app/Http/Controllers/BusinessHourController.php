<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusinessHoursRequest;
use App\Models\BusinessHour;
use Illuminate\Http\Request;

class BusinessHourController extends Controller
{
    public function index()
    {
        if(!auth()->user()->hasRole('admin')){
            return redirect()->back()->with('error', 'You are not authorized to access this page');
        }
        else{
        $businessHours = BusinessHour::all();
        return view('appointments.business_hours', compact('businessHours'));
        }
    }

    public function update(BusinessHoursRequest $request)
    {
        if(!auth()->user()->hasRole('admin')){
            return redirect()->back()->with('error', 'You are not authorized to do this');
        }
        else{
       BusinessHour::query()->upsert($request->validated()['data'],['day']);

        return back()->with('success', 'Business hours updated successfully');
        }
    }
}