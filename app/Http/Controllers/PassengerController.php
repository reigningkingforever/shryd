<?php

namespace App\Http\Controllers;

use App\Booking;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassengerController extends Controller
{

    public function myRides()
    {
        $rides = Booking::where('user_id',auth::id())->orderBy('created_at','desc')->get();
        dd($rides);
        return view('passenger.myRides',compact('rides'));
    }

    public function ride($booking)
    {
        dd($booking);
        return view('driver.ride.myRides',compact('ride'));
    }

}
