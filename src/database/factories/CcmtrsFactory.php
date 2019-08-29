<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\API\Ccmtrs;
use Faker\Generator as Faker;

$factory->define(Ccmtrs::class, function (Faker $faker) {
    return [
        'MCODTRSP' => $faker->randomElement($array = array ('0','1','2', '3', '4', '5', '6', '7', '8', '9'))->unique(),
        'MNOMBRE' => $faker->company,
        'MDIRECC' => $faker->address,
        'MTELEF1' => $faker->phoneNumber,
        'MTELEF2' => $faker->phoneNumber,
        'MRUCTRSP'=> $faker->randomElement($array = array ('0','1','2', '3', '4', '5', '6', '7', '8', '9'))->unique()
    ];
});
