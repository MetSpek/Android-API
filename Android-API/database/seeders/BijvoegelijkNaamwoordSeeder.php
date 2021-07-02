<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BijvoegelijkNaamwoordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bnwen = Array("Big", "Small", "Long", "Short", "Adorable", "Aweful", "Creepy", "Cute", "Delightful", "Brave", "Giant", "Massive", "Fantastic", "Frightend", "Friendly", "Clever", "Fragile", "Happy", "Sad", "Gentle", "Old-fashioned", "Spotless", "Troubled", "Uninterested", "Intrested", "Talented", "Tasty", "Disgusting", "Selfish", "Sparkling", "Outstanding", "Old", "Young", "Helpless", "Helpful", "Glorious", "Grumpy", "Salty", "Important", "Hungry", "Crying", "Smiling", "Crazy", "Agressive", "Anxious", "Adventurous", "Magical", "Flying", "Shy", "Scary", "Sleepy", "Greasy", "Precious", "Poor", "Rich", "Strange", "Unusual", "Wild", "Forgotten", "Odd", "Ancient", "Lonely", "Enchanting", "Embarrassed", "Stinky", "Nasty", "Bloody", "Wet", "Dry", "Blue", "Red", "Yellow", "Green", "Purple", "Pink");

        foreach ($bnwen as $bnw){
            DB::table('bijvoegelijk_naamwoord')->insert([
                'bnw' => $bnw
            ]);
        }
    }
}
