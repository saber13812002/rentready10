<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HowWorksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('how_works')->delete();
        
        \DB::table('how_works')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text' => 'sdasdfasdfasdfasdfasdfadsfa',
                'created_at' => '2024-05-11 19:31:53',
                'updated_at' => '2024-05-11 19:31:53',
            ),
            1 => 
            array (
                'id' => 2,
                'text' => 'tewrtwr sgsdfsdfasf asdf adsf asdf asdf asdf adsf asdf',
                'created_at' => '2024-05-11 19:38:50',
                'updated_at' => '2024-05-11 19:38:50',
            ),
        ));
        
        
    }
}