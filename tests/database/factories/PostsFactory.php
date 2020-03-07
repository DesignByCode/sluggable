<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(DesignByCode\Sluggable\Tests\Stubs\PostStub::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
    ];
});
