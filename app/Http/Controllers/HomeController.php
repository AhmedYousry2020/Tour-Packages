<?php

namespace App\Http\Controllers;

use App\Package;
use App\User;
use App\Booking;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users=User::all();
        $packages=Package::all();
        $bookings = Booking::all();
        return view('Dashboard.home',compact('users','packages','bookings'));
    }
}
