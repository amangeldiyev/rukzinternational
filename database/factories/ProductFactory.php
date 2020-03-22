<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => factory(Category::class),
        'name' => $faker->sentence(2),
        'desc' => $faker->sentence(10),
        'price' => $faker->numberBetween(1000, 100000),
        'img' => '["products\\March2020\\Uuxwlx1OTEBwT8tBFKRx.png"]'
    ];
});
