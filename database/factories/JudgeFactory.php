<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\JudgeNew;
use Faker\Generator as Faker;

$factory->define(JudgeNew::class, function (Faker $faker) {
    return [
      'judge' => $faker->numberBetween($min=1, $max=5),
      'user_id' => function () {
          return \DB::table('users')->get()->random()->id;
      },
      'real_news_id' => function () {
          return \DB::table('real_news')->get()->random()->id;
      }
    ];
});
