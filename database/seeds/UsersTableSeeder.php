<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert( [
            'first_name'     => 'Anthony',
            'last_name'      => 'Navarro',
            'username'       => 'rifner',
            'email'          => 'anavarro@three29.com',
            'password'       => '$2y$10$UHVBr8XE8oVXwHqOFBV6eO1U5CpTgtHAi2QsYqDYUSZ2pZoLnFB9C', //this encoded password is 'testing'
            'role'           => 'admin',
            'profile_picture'    => 'http://spurious_forums.dev/storage/profiles/user-1/sea-nemesis.jpg',
            'remember_token' => str_random(10),
        ] );

        factory( 'App\User', 15 )->create();
    }
}
