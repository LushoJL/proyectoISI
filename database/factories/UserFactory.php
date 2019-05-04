<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'last_name' => $faker->lastName,
        'ci'=>$faker->phoneNumber,
        'nick'=>'abs'.$faker->randomNumber(),
        'birthdate'=>$faker->date('Y-m-d'),
        'address'=>$faker->city,
        'phone'=>'12345678',
        'gender'=>$faker->randomElement($array=['masculino','femenino']),
        'civil_status'=>$faker->randomElement($array=['soltero','casado','divorsiado','viudo']),
        'country'=>$faker->country,
        'nationality'=>$faker->century,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => Hash::make('12345678'), // password
        'remember_token' => Str::random(10),
    ];
});
