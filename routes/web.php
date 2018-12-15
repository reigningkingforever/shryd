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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@admin')->name('admin');
Route::get('/drivers', 'UserController@driver')->name('drivers');
Route::get('/passengers', 'UserController@passenger')->name('passengers');
Route::get('/vehicles', 'VehicleController@index')->name('vehicles');
Route::get('/rides', 'RideController@rides')->name('rides');
Route::get('/messages', 'HomeController@messages')->name('messages');
Route::get('/bookings', 'RideController@bookings')->name('bookings');
Route::get('/transactions', 'HomeController@transactions')->name('transactions');
Route::get('/profile','UserController@profile')->name('profile');
Route::post('/profile','UserController@updateProfile');

//driver routes

Route::get('/driver/vehicle','VehicleController@vehicle');
Route::post('/driver/vehicle','VehicleController@updateVehicle');
Route::get('/driver/rides','DriverController@myRides');
Route::get('/driver/ride/details','DriverController@ride');
Route::get('/driver/ride/edit','DriverController@editRide');
Route::post('/driver/ride/edit','DriverController@updateRide');
Route::get('/driver/ride/create','DriverController@createRide');
Route::post('/driver/ride/create','DriverController@storeRide');
Route::post('/driver/ride/destroy','DriverController@destroyRide');
Route::post('/driver/book','RideController@bookResponse');
Route::get('/driver/notification','DriverController@notification');

//passenger routes

Route::get('/passenger/feeds','RideController@feeds');
Route::get('/passenger/rides','PassengerController@myRides');
Route::get('/passenger/ride/details/{booking}','PassengerController@ride');
Route::post('/passenger/rides','PassengerController@updateRide');
Route::post('/passenger/search','SearchController@feeds');
Route::get('/passenger/search','SearchController@result');
Route::get('/passenger/book/{ride}','RideController@ride');
Route::post('/passenger/book/{ride}','RideController@book');
Route::post('/passenger/cancel/{ride}','RideController@cancel');
Route::get('/passenger/notification','PassengerController@notification');

/*on driver backend 1
the following will happen
button to view drivers details
button to verify driver
button to suspend driver
button to delete driver
*/

/*on vehicle backend 2
the following will happen
button to view vehicle
button to verify vehicle
button to suspend suspend
button to delete driver
*/


/*on passenger backend 3
the following will happen
button to view passenger
button to suspend passenger
button to delete passenger
*/

/*on rides backend 4
the following will happen

button to view ride
*/

/*on booking backend
the following will happen

button to view booking
button to cancel booking
*/

