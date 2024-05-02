<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('options')->delete();
        
        \DB::table('options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'title',
                'value' => 'WG',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-02 16:30:03',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'url',
                'value' => 'https://wg.com',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-02 16:30:03',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'benefits_image',
                'value' => '/storage/assets/img/Group_2772.png',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-02 16:30:03',
            ),
        ));
        
        
    }
}