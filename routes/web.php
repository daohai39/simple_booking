<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware(['web'])->group(function() {
    Route::get('dashboard',function() {
        return view('backend.dashboard');
    });
    Route::resource('service','ServiceController');
    Route::resource('customer', 'CustomerController');
    Route::resource('appointment', 'AppointmentController',['except' => [
        'delete','update'
    ]]);
    Route::get('staff/{staff}/service', 'ServiceStaffController@index');
    Route::resource('staff','StaffController');
});
