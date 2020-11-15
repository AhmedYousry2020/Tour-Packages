<?php

use Illuminate\Database\Seeder;
use App\Hotel;
class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotels =array(array("1","Hilton"),array("2","Chriton"),array("3","Life Grand"),array("4","House Awery"));


       foreach($hotels as $hotel){
        Hotel::create([
          "id"=>$hotel[0],
          "hotel_name"=>$hotel[1],
          "description"=>"comfortabel and nice"

            ]);
       }


    }
}
