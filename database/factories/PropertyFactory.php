<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Property;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Property::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->text,
        'price' => rand(1000,10000),
        'area' => rand(1,100),
        'rooms' => rand(1,8),
        'baths' => rand(0,5),
        'garages' => rand(0,2),
        'address' => $faker->address,
        'city' => Str::random(10),
        'lat' => rand(1,2),
        'long' => rand(1,2),
        'zip' => rand(5,100),
        'status' => rand(0,1),
        'propertytype_id' => rand(1,3),
        'user_id' => rand(1,2),
        'approved' => rand(0,1),
    ];
});
