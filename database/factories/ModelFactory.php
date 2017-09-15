<?php

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

$factory->define( App\Subject::class, function( Faker $faker ) {
    $moderators = [];
    $mod_num = rand( 1, 3 );
    for( $index = 0; $index <= $mod_num; $index++ )
    {
        $moderators[] = $faker->name();
    }


    return [
        'title'  => $faker->text( 20 ),
        'description'     => $faker->text( 35 ),
        'moderators' => $moderators,
    ];

} );
