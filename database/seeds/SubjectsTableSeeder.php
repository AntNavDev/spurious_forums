<?php

use Illuminate\Database\Seeder;

use App\Subject;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = array(
                array( 'General', 'Just general talk. Have something you think doesn\'t quite fit? Put it here!', [ 1 ] ),
                array( 'Funny Stories', 'Talk about that crazy night.', [ 1, 4 ] ),
                array( 'News', 'What\'s happening in the world today?', [ 2, 3 ] ),
                array( 'Squirrels Surfing', 'Happy stories that make you feel good.', [ 4, 6 ] ),
                array( 'Gaming', 'News from the world of gaming.', [ 3, 4, 5 ] ),
                array( 'Memes', 'Cause life just sucks.', [ 3 ] ),
                array( 'Political', 'Join the circus!', [ 2, 4 ] ),
                array( 'Internet of Things', 'Everything is connected now days.', [ 1, 2, 3 ] ),
                array( 'Bears Destroying Stuff', 'Campsites, cars, bedding, expectations, etc.', [ 2, 4 ] ),
                array( 'I\'m on fire!', 'Videos of stupid shit you\'ve done.', [ 5, 6, 7 ] ),
                array( 'Titanfall 2', 'Gaming just isn\'t big enough.', [ 1, 3, 5 ] ),
                array( 'Cow Patties', 'Farmers need forums too.', [ 2, 4, 6 ] ),
                array( 'Agoraphobics Anonymous', 'You\'ll never have to leave the house again.', [ 2, 4, 5 ] ),
                array( 'Found in my Closet', 'Fashion over the years.', [ 1, 3 ] ),
                array( 'Water Fountains', 'Water Fountains...', [ 5 ] ),
            );

        foreach( $subjects as $subject )
        {
            Subject::create( [
                'title' => $subject[ 0 ],
                'description' => $subject[ 1 ],
                'moderators' => $subject[ 2 ]
            ] );
        }
    }
}
