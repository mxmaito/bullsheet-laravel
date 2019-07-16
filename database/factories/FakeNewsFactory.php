<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\FakeNew;
use Faker\Generator as Faker;

$factory->define(FakeNew::class, function (Faker $faker) {
    return [
      'title' => $faker->sentence(1),
      'question' => $faker->sentence(10),
      'fakenewsfile' => 'default_img.png',
      'user_id' => function () {
          return \DB::table('users')->get()->random()->id;
      }
    ];
});
