<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ZelfstandigNaamwoordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $znwen = Array("House", "Dog", "Hamburger", "Cat", "Passenger", "Stranger", "Mailman", "Mouse", "Bird", "Music", "Sky", "Storage", "Sea", "Virus", "Bear", "Beer", "Hotel", "Guitar", "Clothes", "Mountain", "Orange", "Fruit", "Skateboard", "Farmer", "Tea", "Candy", "Fastfood", "Garbage", "King", "Piano", "Wedding", "Computer", "Supermarket", "Diamond", "Toyota Supra", "Truck", "Car", "Journal", "Art", "Home", "Bed", "Dream", "Friend", "Capital", "Grandma", "Teacher", "Novel", "Master", "Dungeon", "Doctor");

        foreach ($znwen as $znw){
            DB::table('zelfstandig_naamwoord')->insert([
                'znw' => $znw
            ]);
        }
    }
}
