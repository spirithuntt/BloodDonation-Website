<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        DB::table('contacts')->insert([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'message' => $validatedData['message'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Mail::to('nouhaila.elhousnii@gmail.com')->send(new ContactMail($validatedData));
        return redirect()->back()->with('success', 'Thank you for your message!');
    }
}
