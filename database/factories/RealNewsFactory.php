<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\RealNew;
use Faker\Generator as Faker;

$factory->define(RealNew::class, function (Faker $faker) {
    return [
      'headline' => $faker->sentence(1),
      'subheading' => $faker->sentence(1),
      'text' => $faker->paragraph(2),
      'realnewsfile' => "default_img.png",
      'caption'=>$faker->sentence(2),
      'user_id' => function () {
          return \DB::table('users')->get()->random()->id;
      }
    ];
});
