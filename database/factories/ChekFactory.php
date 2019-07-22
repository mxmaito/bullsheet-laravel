<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ChekNew;
use Faker\Generator as Faker;

$factory->define(ChekNew::class, function (Faker $faker) {
    return [
      'chek1' => $faker->numberBetween($min=0, $max=1),
      'chek2' => $faker->numberBetween($min=0, $max=1),
      'chek3' => $faker->numberBetween($min=0, $max=1),
      'chek4' => $faker->numberBetween($min=0, $max=1),
      'chek5' => $faker->numberBetween($min=0, $max=1),
      'chek6' => $faker->numberBetween($min=0, $max=1),
      'chek7' => $faker->numberBetween($min=0, $max=1),
      'chek8' => $faker->numberBetween($min=0, $max=1),
      'chek9' => $faker->numberBetween($min=0, $max=1),
      'chek10' => $faker->numberBetween($min=0, $max=1),
      'chekresult' => 0,
      'user_id' => function () {
          return \DB::table('users')->get()->random()->id;
      },
      'fake_news_id' => function () {
          return \DB::table('fake_news')->get()->random()->id;
      }
    ];
});
