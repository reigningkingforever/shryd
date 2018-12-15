<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Ride;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RideController extends Controller
{

    //admin part
    public function rides()
    {
        $rides = Ride::all();
        return view('admin.rides',compact('rides'));
    }

    public function bookings()
    {
        $bookings = Booking::paginate(20);
        return view('admin.bookings',compact('bookings'));
    }

    //user part
    public function feeds()
    {
        $feeds = Ride::paginate(5);
        dd($feeds);
        return view('passenger.feeds',compact('feeds'));
    }

    public function ride(Ride $ride){
        dd($ride);
        return view('passenger.book',compact('$ride'));
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
        $booking = new Booking;
        $booking->user()->associate(auth()->user());
        $booking->ride()->associate($ride);
        $booking->seats = $request->no_of_seats;
        $booking->save();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
