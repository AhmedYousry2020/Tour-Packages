<?php

namespace App\Http\Controllers\HomeApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Package;
class HomeController extends Controller
{

    public function index(Request $request){
        //   $packages = Package::where('Destination','like','%'.$request->input('search').'%')->latest()->paginate(2);
        $packages = Package::when($request->input('search'),function($q) use($request) {

            return $q->where('Destination','like','%'.$request->input('search').'%');
        })->latest()->paginate(5);

        // $packages= Package::all();
        return view('home',compact('packages'));

    }


    public function showDetails($id){
      $package = Package::find($id);
      return view('packages.showdetails',compact('package'));
    }

}
