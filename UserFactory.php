<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description'=>$faker->description,
        'price_cost' => $faker->price_cost,
        'price_resale' => $faker->price_resale,
		'category_id' =>1,
		'brand_id' => 1,
        'provider_id' => 1,
        'remember_token' => str_random(10),
    ];
});


