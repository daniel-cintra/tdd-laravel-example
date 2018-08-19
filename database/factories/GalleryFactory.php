<?php

use Faker\Generator as Faker;

$factory->define(App\Gallery::class, function (Faker $faker) {

    static $order = 1;
    $title = $faker->name;

    $imgs = [
        'acoustic-guitar.jpg', 'guitar-grass.jpg', 'lake-house.jpg',
        'mini-marshall.jpg', 'sun-mountains.jpg', 'tennis-ball.jpg'
    ];

    return [
        'title' => $order . ' - ' . $title,
        'description' => $faker->paragraph,
        'img_src' => $imgs[$order - 1],
        'order' => $order++
    ];

});
