<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('admin.vehicles',compact('vehicles'));
    }

    public function showVehicle($id)
    {
        //show a particular vehicle details and edit
    }


    public function update(Request $request, $id)
    {
        //update particular vehicle details
    }


    public function destroy($id)
    {
        //delete particular vehicle
    }
}
