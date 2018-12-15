<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //admin part
    public function driver()
    {
        $drivers = User::has('vehicle')->paginate(5);
        return view('admin.drivers',compact('drivers'));
    }

    public function passenger()
    {
        $passengers = User::passenger()->paginate(5);
        return view('admin.passengers',compact('passengers'));
    }

    //users part
    public function profile()
    {
        $user = User::where('id',Auth::id())->first();
        dd($user);
        return view('profile',compact('user'));
    }

    public function updateProfile(Request $request){
        $user = Auth::user();
        //update driver detail
        return redirect()->back();
    }


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
    public function showDrivers($id)
    {
        //
    }

    public function showPassengers($id)
    {
        //
    }
    public function showVehicles($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editDriver($id)
    {
        //
    }
    public function editPassenger($id)
    {
        //
    }
    public function editVehicle($id)
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
