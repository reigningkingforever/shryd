<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function admin(){
        return view('admin.index');
    }

    public function passengers(){
        return view('admin.passengers');
    }
    public function vehicles(){
        return view('admin.vehicles');
    }
    public function rides(){
        return view('admin.rides');
    }
    public function messages(){
        return view('admin.messages');
    }
    public function bookings(){
        return view('admin.bookings');
    }
    public function transactions(){
        return view('admin.transactions');
    }
}
