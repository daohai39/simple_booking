<?php

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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Staff::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'tele_phone' => $faker->phoneNumber,
    ];
});

$factory->define(App\Customer::class, function(Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'cellphone' => $faker->phoneNumber,
        'workphone' => $faker->phoneNumber,
        'homephone' => $faker->phoneNumber,
        'country' => $faker->country,
        'city' => $faker->city,
        'state' => $faker->state,
        'postal_code' => $faker->postcode,
    ];
});

$factory->define(App\Service::class, function(Faker\Generator $faker) {
    $start_date =  $faker->dateTimeThisDecade();
    $end_date = $faker->dateTimeThisDecade();
    if ($start_date > $end_date) {
        $copy = $start_date;
        $start_date = $end_date;
        $end_date = $copy;
    }
    return [
        'name' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->text($maxNbChars = 200),
        'start_date' => $start_date,
        'end_date' => $end_date,
        'is_over' => $faker->biasedNumberBetween(0,1),
    ];
});
