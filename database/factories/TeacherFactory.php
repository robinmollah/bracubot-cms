<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'name' => "Robert Roar",
        'email' => "robert.roar@bracu.ac.bd",
        'initial' => "RRR"
    ];
});
