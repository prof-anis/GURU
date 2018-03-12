<?php
use App\Discussion_Board;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
/*$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});*/



$factory->define(App\Talk::class, function (Faker\Generator $faker) {
    //static $password;

    return [
        'message' => $faker->text(10),
        'referenced_message' => 3,
        'likes' => 88,
        'featured_image' => $faker->text(5),
        'featured_docs' => $faker->text(5),
        'featured_video'=>'a',
        'board_code'=>'ele230',
         'sender'=>1,
        

       ];
});