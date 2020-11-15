<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'Title', 'Destination', 'Description','Price','num_of_people','Image','Returning','Departing','hotel_id','plane_id','Include','Exclude'
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    public function plane()
    {
        return $this->belongsTo(Plane::class);
    }
    // public function GetInculudeAtteribute($value){
    // $lines = explode("<br>",$value);
    //  return $lines;
    // }
    // protected $dates = ['Returning'];
    // public function GetReturningAttribute($value){
    //     return $value->format('l, d F,Y');
    // }
    public function users(){

        return $this->belongsToMany(User::class,'bookings');
    }
}
