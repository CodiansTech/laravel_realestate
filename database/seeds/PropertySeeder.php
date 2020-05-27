<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i = 1 ; $i <= 50 ; $i++){
           
            $user = factory(App\Property::class, 50)->create();
        }
            
    }
}
