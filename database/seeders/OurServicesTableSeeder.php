<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OurServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('our_services')->delete();
        
        \DB::table('our_services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Paint',
                'enabled' => 1,
                'order' => 1,
                'odd' => 1,
                'created_at' => '2024-05-11 19:12:06',
                'updated_at' => '2024-05-11 19:12:06',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Clean',
                'enabled' => 1,
                'order' => 2,
                'odd' => 1,
                'created_at' => '2024-05-11 19:12:33',
                'updated_at' => '2024-05-11 19:12:33',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Carpet Cleaning',
                'enabled' => 1,
                'order' => 3,
                'odd' => 1,
                'created_at' => '2024-05-11 19:14:07',
                'updated_at' => '2024-05-11 19:14:07',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Maintenace',
                'enabled' => 1,
                'order' => 4,
                'odd' => 1,
                'created_at' => '2024-05-11 19:15:31',
                'updated_at' => '2024-05-11 19:15:31',
            ),
        ));
        
        
    }
}