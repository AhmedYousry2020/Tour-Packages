<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Hotel;
use App\Plane;
class PackageController extends Controller
{
    public function create(){
        $hotels = Hotel::all();
        $planes = Plane::all();
        return view('Dashboard.packages.create',compact('hotels','planes'));
    }
    public function store(Request $request){

   $request_date=$request->validate([
       'Title'=>'required',
       'Destination'=>'required',
       'Description'=>'required',
       'Price'=>'required',
       'num_of_people'=>'required',
       'Image'=>'required',
       'Returning'=>'required|date',
       'Departing'=>'required|date',
       'hotel_id'=>'required',
       'plane_id'=>'required',


       ]);
if($request_date){

    Package::create([
        'Title'=>$request->Title,
        'Destination'=>$request->Destination,
        'Description'=>$request->Description,
        'Price'=>$request->Price,
        'num_of_people'=>$request->num_of_people,
        'Image'=>$request->Image->store('image','public'),
        'Returning'=>$request->Returning,
        'Departing'=>$request->Departing,
        'hotel_id'=>$request->hotel_id,
        'plane_id'=>$request->plane_id,
        'Include'=>$request->Include,
        'Exclude'=>$request->Exclude,

    ]);
}


   session()->flash('success', __('added_successfully'));
   return redirect('/dashboard/home');
    }


   public function index(){
        $packages= Package::all();
        return view('Dashboard.packages.index',compact('packages'));

    }
    public function edit($id){
        $package= Package::find($id);
        $hotels = Hotel::all();
        $planes = Plane::all();
        return view('Dashboard.packages.edit',compact('package','hotels','planes'));

    }
    public function update(Request $request,$id){

       // print_r($_POST);
        $package = Package::find($id);
        $request_date=$request->validate([
            'Title'=>'required',
            'Destination'=>'required',
            'Description'=>'required',
            'Price'=>'required',
            'num_of_people'=>'required',
            'Returning'=>'required|date',
            'Departing'=>'required|date',
            'hotel_id'=>'required',
            'plane_id'=>'required',



        ]);
        $package->Title = $request->Title;
        $package->Destination = $request->Destination;
        $package->Description = $request->Description;
        $package->Price = $request->Price;
        $package->num_of_people = $request->num_of_people;
        if($request->hasFile('Image')) {
            $image = $request->Image->store('image', 'public');
            Storage::disk('public')->delete($package->Image);
            $package->Image=$image;
        }
        $package->Returning = $request->Returning;
        $package->Departing = $request->Departing;
        $package->hotel_id  = $request->hotel_id;
        $package->plane_id  = $request->plane_id;
        $package->Include = $request->Include;
        $package->Exclude= $request->Exclude;
      // $package->update($request_date);
       $package->save();
     //dd($package);
        session()->flash('success', __('updated_successfully'));

     return redirect('/dashboard/packages/index');

    }
 public function destroy($id){
        $package=Package::find($id);
        $package->delete();


     session()->flash('success', __('deleted_successfully'));

     return redirect('dashboard/packages/index');


 }
}

