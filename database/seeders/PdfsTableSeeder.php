<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PdfsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pdfs')->delete();
        
        \DB::table('pdfs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'price_list',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}