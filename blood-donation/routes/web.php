<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CenterController;
use App\Http\Livewire\AppointmentForm;
use App\Http\Controllers\BusinessHourController;
use App\Http\Controllers\TestController;
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
Route::get('/home', [DonationController::class, 'index'])->name('home');



// scheduleAppointment resource
Route::resource('donation', DonationController::class);


// scheduleAppointment livewire
Route::get('/appointment', AppointmentForm::class)->name('appointment');



Route::get('Working-Hours', [BusinessHourController::class, 'index'])->name('business_hours.index');
//update
Route::post('Working-Hours', [BusinessHourController::class, 'update'])->name('business_hours.update');

//reserve
Route::get('reserve', [DonationController::class, 'showReserve'])->name('reserve');
Route::post('reserve', [DonationController::class, 'reserve'])->name('reserve');
//confirm update reservation put
Route::put('confirm', [DonationController::class, 'confirm'])->name('confirm');


Route::post('/appointments/reserve', [AppointmentController::class, 'reserve'])->name('appointments.reserve');


// resource route for the tests
Route::resource('tests', TestController::class);