<?php


    use App\GroupDevs\Models\Category;
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

$factory->define(Category::class, function (Faker $faker) {
    return [
        'type' => rand(1,2),
        'name' => $faker->unique()->name,
        'active' => $faker->boolean
    ];
});
