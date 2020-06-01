<?php

use Illuminate\Database\Seeder;
use App\PropertyType;
class PropertyTypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new PropertyType();
        $type->name = 'House';
        $type->save();

        $type = new PropertyType();
        $type->name = 'Apartment';
        $type->save();

        $type = new PropertyType();
        $type->name = 'Land';
        $type->save();

       
    }
}
