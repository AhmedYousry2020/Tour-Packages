<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  User::where('email','admin2020@app.com')->first();
        if(!$user){
            User::create([
                 'name'=>'admin',
                'email'=>'admin2020@app.com',
                'password'=>bcrypt('Ahmed12345'),
                'privilege'=>'admin'

         ]);
 }

    }
}
