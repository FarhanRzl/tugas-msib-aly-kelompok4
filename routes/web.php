<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/employee', function () {
    return view('clientlogin');
});

Route::get('/signupemployee', function () {
    return view('clientsignup');
});

Route::get('/clientregister', function () {
    return view('clientregister_success');
});

Route::get('/customer', function () {
    return view('customerlogin');
});

Route::get('/signupcustomer', function () {
    return view('customersignup');
});

Route::get('/customerregister', function () {
    return view('customerregister_success');
});

Route::get('/addcar1', function () {
    return view('addcar1');
});

Route::get('/adddriver1', function () {
    return view('adddriver1');
});

Route::get('/return', function () {
    return view('return');
});

Route::get('/returnconfirm', function () {
    return view('returnconfirm');
});

Route::get('/',[HomeController::class,'index']);
Route::get('/logout',[LoginController::class,'logout']);

Route::post('/employee',[LoginController::class,'authentication']);
Route::post('/clientregister',[RegisterController::class,'registrasiadmin']);
Route::get('/clientview',[AdminController::class,'view']);

Route::post('/customer',[LoginController::class,'authentication']);
Route::post('/customerregister',[RegisterController::class,'registrasi']);

Route::get('/addcar',[CarController::class,'index']);
Route::post('/addcar',[CarController::class,'tambahmobil']);
Route::get('/editmobil/{id}',[CarController::class,'editmobil']);
Route::post('/editmobil',[CarController::class,'edit']);
Route::get('/deletee/{id}',[CarController::class,'delete']);

Route::get('/adddriver',[DriverController::class,'index']);
Route::post('/adddriver',[DriverController::class,'tambahdriver']);
Route::get('/editdriver/{id}',[DriverController::class,'editdriver']);
Route::post('/editdriver',[DriverController::class,'edit']);
Route::get('/delete/{id}',[DriverController::class,'delete']);

Route::get('/booking/{id}',[BookingController::class,'index']);
Route::post('/booking',[BookingController::class,'booking']);
Route::get('/bookingconfirm/{id}', [BookingController::class, 'invoice']);
Route::get('/returnconfirm/{id}', [BookingController::class, 'confirm']);
Route::get('/prereturncar', [BookingController::class, 'garasi']);
Route::get('/return/{id}', [BookingController::class, 'return']);

Route::get('/get-driver', [DriverController::class, 'getDriver']);