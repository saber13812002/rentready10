<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('quotes')->delete();
        
        \DB::table('quotes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'content' => 'I have no special talent. I am only passionately curious.',
                'author' => 'Albert Einstein',
                'location' => 'aaaaa',
                'enabled' => 1,
                'order' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'content' => 'Until we can manage time, we can manage nothing else.',
                'author' => 'Peter Drucker',
                'location' => 'bbbb',
                'enabled' => 1,
                'order' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'content' => 'The best way to predict your future is to create it.',
                'author' => 'Peter Drucker',
                'location' => 'ccccc',
                'enabled' => 1,
                'order' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}