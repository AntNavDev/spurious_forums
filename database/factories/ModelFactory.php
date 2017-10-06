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

// $factory->define( App\Subject::class, function( Faker $faker ) {
//     /*
//     * Just in case I want random subjects again
//     * =================================
//     * For choosing random moderators
//     * vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
//     */
//     // $moderators = [];
//     // $mod_num = rand( 1, 3 );
//     // for( $index = 0; $index <= $mod_num; $index++ )
//     // {
//     //     $mod_id = rand( 2, 5 );
//     //     while( in_array( $mod_id, $moderators ) )
//     //     {
//     //         $mod_id = rand( 2, 5 );
//     //     }
//     //     $moderators[] = $mod_id;
//     // }


//     return [
//         'title'       => $faker->text( 20 ),
//         'description' => $faker->text( 35 ),
//         'moderators'  => $moderators,
//     ];

// } );

$factory->define( App\Thread::class, function( Faker $faker ) {
    $subject_id = rand( 1, 14 );
    $author_id = rand( 1, 15 );

    return [
        'subject_id'  => $subject_id,
        'title'       => $faker->realText( 40, 5 ),
        'description' => $faker->realText(),
        'author'      => $author_id,
    ];
} );

$factory->define( App\Comment::class, function( Faker $faker ) {
    $thread_id = rand( 1, 44 );
    $author_id = rand( 1, 14 );

    return [
        'thread_id'  => $thread_id,
        'description' => $faker->realText(),
        'author'      => $author_id,
    ];
} );
