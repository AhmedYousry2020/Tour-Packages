<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
 protected $fillable = [

    'user_id','package_id','Payment_method','Individuals','address','Zip','Name on Card','Credit Card Number','cvv','expiration'
  ];
}
