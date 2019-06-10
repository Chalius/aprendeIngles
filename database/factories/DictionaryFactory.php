<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Dictionary;
use Faker\Generator as Faker;



$factory->define(Dictionary::class, function (Faker $faker) {
    return [
        	'palabra' => $faker->sentence(1),
	        'pronunciacion' =>$faker->words($nb = 3, $asText = false),
	        'nemotecnia' => $faker->sentence(1),
	        'traduccion' => $faker->sentence(2),
	        'img' => $faker->image('public/images', 400, 300, false),
    ];
});
