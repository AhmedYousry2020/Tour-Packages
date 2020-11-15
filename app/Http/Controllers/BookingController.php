<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Package;
use App\Booking;
class BookingController extends Controller
{

       public function Bookingview($id){
          $package=Package::find($id);
          $user =\Auth::user();
        return view('booking.bookingform',  compact('package','user'));
    }
     public function book(Request $requset,$id){

       $request_date=$requset->validate([
        'address'=>'required',
        'individuals'=>'required',
        'zip'=>'required',
        'paymentMethod'=>'required',
        'individuals'=>'required',
        'name_on_card'=>'required',
        'credit_number'=>'required',
        'expiration'=>'required|',
        'cvv'=>'required'


        ]);
        $package = Package::find($id);
        $user =\Auth::user();

       if($request_date){
           Booking::create([
               'user_id'=>$user->id,
               'package_id'=>$package->id,
               'address'=>$requset->address,
               'Zip'=>$requset->zip,
               'Payment_method'=>$requset->paymentMethod,
               'Individuals'=>$requset->individuals,
               'Name on Card'=>$requset->name_on_card,
               'Credit Card Number'=>$requset->credit_number,
                'cvv'=>$requset->cvv,
                'expiration'=>$requset->expiration


       ]);

           }


  session()->flash('success', __('booked_successfully'));
         return redirect('/home');


     }
    public function bookings_list(){
        $listofbookings = Booking::all();

        return view('Dashboard.booking.bookingslist',compact('listofbookings'));
    }
}
