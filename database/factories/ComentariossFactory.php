<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comentarioss;
use Faker\Generator as Faker;

$factory->define(Comentarioss::class, function (Faker $faker) {
    return [
        'comentario'=>$faker->text,
        'productos'=> App\Productos::All()->random()->id,
    ];
});
