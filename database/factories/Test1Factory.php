<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\test1;
use Faker\Generator as Faker;

$factory->define(test1::class, function (Faker $faker) {
    return [
        'username'=>$faker->name,
    ];
});
