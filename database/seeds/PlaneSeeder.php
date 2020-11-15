<?php

use Illuminate\Database\Seeder;
use App\Plane;
class PlaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $planes =array(array("1","N12345","Cairo","2020-12-5"),array("2","N1234Z","Cairo","2020-12-10"),array("3","N123AZ","Cairo","2020-12-15"),array("4","N125AZ","Cairo","2020-12-20"));


        foreach($planes as $plane){
         Plane::create([
           "id"=>$plane[0],
           "plane_number"=>$plane[1],
           "airport_place"=>$plane[2],
           "take_off"=>$plane[3]
             ]);
        }
    }
}
