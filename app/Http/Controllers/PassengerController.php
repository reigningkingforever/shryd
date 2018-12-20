<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Ride;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PassengerController extends Controller
{

    //user part
    public function feeds()
    {
        $feeds = Ride::paginate(5);
        dd($feeds);
        return view('passenger.feeds',compact('feeds'));
    }

    public function FeedDetails(Ride $ride){
        dd($ride);
        return view('passenger.rideDetails',compact('$ride'));
    }

    public function book(Ride $ride, Request $request){
        $booking = new Booking;
        $booking->user()->associate(auth()->user());
        $booking->ride()->associate($ride);
        $booking->seats = $request->no_of_seats;
        $booking->status = 'waiting';
        $booking->save();
    }

    public function cancel(Ride $ride){

    }

    public function updateRide(Ride $ride){

    }


    public function myRides()
    {
        $rides = Booking::where('user_id',auth::id())->orderBy('created_at','desc')->get();
        dd($rides);
        return view('passenger.myRides',compact('rides'));
    }

    public function rideDetails(Ride $ride)
    {
        dd($ride);
        return view('passenger.rideDetails',compact('ride'));
    }

}
