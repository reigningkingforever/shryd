<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//driver routes

Route::get('/driver/vehicle','VehicleController@vehicle');
Route::post('/driver/vehicle','VehicleController@updateVehicle');
Route::get('/driver/ride/create','DriverController@createRide');
Route::post('/driver/ride/create','DriverController@storeRide');
Route::get('/driver/ride/{ride}/edit','DriverController@editRide');
Route::post('/driver/ride/{ride}/edit','DriverController@updateRide');
Route::get('/driver/rides','DriverController@myRides');
Route::get('/driver/ride/{ride}','DriverController@ride');
Route::post('/driver/ride/{ride}/destroy','DriverController@destroyRide');
Route::post('/driver/response','DriverController@bookResponse');
Route::get('/driver/notification','DriverController@notification');

//passenger routes

Route::get('/passenger/feeds','PassengerController@feeds');
Route::get('/passenger/feeds/{ride}','PassengerController@feedDetails');
//book and cancle ride
Route::post('/passenger/book/{ride}','PassengerController@book');
Route::post('/passenger/cancel/{ride}','PassengerController@cancel');
Route::post('/passenger/update/{ride}','PassengerController@updateRide');

//show all booked rides, saved rides, cancelled rides
Route::get('/passenger/rides','PassengerController@myRides');
Route::get('/passenger/rides/{ride}','PassengerController@rideDetails');

Route::post('/passenger/search','SearchController@feeds');
Route::get('/passenger/search','SearchController@result');

Route::get('/passenger/notification','PassengerController@notification');

