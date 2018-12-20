<?php

namespace App\Http\Controllers;

use App\Ride;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{

    public function myRides()
    {
        $rides = Ride::where('user_id',auth::id())->get();
        dd($rides);
        return view('driver.ride.myRides',compact('rides'));
    }

    public function ride(Ride $ride)
    {
        dd($ride);
        return view('driver.ride.myRides',compact('ride'));
    }

    public function updateRide(Ride $ride,Request $request)
    {
        dd($ride);
        //update no of seats, origin, destination, day, time
        $ride->available_seats = $request->no_of_seats;
        $ride->save();
        return redirect()->back();
    }

    public function bookResponse()
    {
        return ;
    }

}
