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
                'content' => 'sdfasdfasdfasdfasdfasdfasdfasdfadsf ads f asdf as df asdf a dsf adsf asd f asdf asdf ',
                'author' => 'adsfasdfadsf',
                'location' => 'adsfadsf',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'content' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'author' => 'a-a-a-a-',
                'location' => '-a-a-a',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'content' => 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb b b b b b b b b b b  ',
                'author' => 'b-b-b-',
                'location' => 'bbbb',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}