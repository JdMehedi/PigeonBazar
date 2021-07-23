<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;
use Tests\TestCase;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'price' => $faker->numberBetween(100,1000),
        'description' => $faker->paragraph(4),
        'image' => 'uploads/products/mehedi.png'
        
    ];
});
