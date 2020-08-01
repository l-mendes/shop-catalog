<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $categories = Category::pluck('id')->toArray();
    return [
        'category_id' => $faker->randomElement($categories),
        'name' => $faker->name,
        'description' => $faker->realText(200),
        'price' => $faker->numberBetween(1000, 1000000)
    ];
});
