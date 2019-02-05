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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Models\Restaurante::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'parceiro_id' => '1',
        'endereco' => $faker->address,
        'numero' => str_random(3),
    ];
});

$factory->define(App\Models\Parceiro::class, function (Faker\Generator $faker) {

    return [
        'fantasia' => $faker->name,
        'user_id' => '1',
        'cnpj' => str_random(9),
        'email' => $faker->unique()->safeEmail,
        'telefone' => $faker->phoneNumber,
    ];
});


$factory->define(App\Models\Evento::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'parceiro_id' => '1',
        'data_evento' => $faker->dateTime,

    ];
});




