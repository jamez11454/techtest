<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'First_Name' => $faker->name,
        'Last_Name' => $faker->name,
        'Company' => $faker->name,
        'Profession' => $faker->name,
        'Chapter_Name' => $faker->name,
        'Phone_Number' => $faker->phoneNumber,
        'Alt_Phone_Number' => $faker->phoneNumber,
        'Fax_Number' => $faker->phoneNumber,
        'Cell_Number' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'website' => $faker->url,
        'Address' => $faker->address,
        'City' => $faker->city,
        'State' => $faker->state,
        'ZIP' => $faker->name,
        'Substitute' => $faker->text,
        'Status' => $faker->boolean(),
        'Join_Date' => $faker->time(),
        'Renewal_Date' => $faker->time(),
        'Sponsor' => $faker->name,
    ];
});
