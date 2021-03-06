<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->slug(2),
    ];
});

$factory->define(App\Url::class, function (Faker\Generator $faker) {
    return [
        'url' => $faker->url,
        'hits' => $faker->unique()->numberBetween(1, 100),
    ];
});

