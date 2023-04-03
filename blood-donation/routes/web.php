<?php

use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CenterController;
use App\Http\Livewire\AppointmentForm;
use App\Http\Controllers\BusinessHourController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function (){
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth:sanctum', 'verified'])->name('dashboard');

//city
Route::resource('cities', CityController::class);
//center
Route::resource('centers', CenterController::class);
//home
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/scheduleAppointment', function () {
    return view('scheduleAppointment');
})->name('scheduleAppointment');


// scheduleAppointment resource
Route::resource('donation', DonationController::class);


// scheduleAppointment livewire
Route::get('/appointment', AppointmentForm::class)->name('appointment');



Route::get('business-hours', [BusinessHourController::class, 'index']);
//update
Route::post('business-hours', [BusinessHourController::class, 'update'])->name('business_hours.update');
