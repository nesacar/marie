<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'user_id' => 1,
        'brand_id' => rand(1,3),
        'title' => $title,
        'slug' => str_slug($title),
        'code' => $faker->word,
        'short' => $faker->paragraph,
        'content' => $faker->paragraph,
        'link' => $faker->url,
        'gender' => rand(0,2),
        'image' => null,
        'price' => rand(100, 5000),
        'outlet_price' => 0,
        'publish_at' => $faker->dateTimeBetween('-30 days', 'now'),
        'is_visible' => true,
    ];
});
