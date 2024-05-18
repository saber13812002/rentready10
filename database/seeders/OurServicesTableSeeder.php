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
                'odd' => 1,
                'enabled' => 1,
                'order' => 1,
                'created_at' => '2024-05-11 19:12:06',
                'updated_at' => '2024-05-11 19:12:06',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Clean',
                'odd' => 1,
                'enabled' => 1,
                'order' => 2,
                'created_at' => '2024-05-11 19:12:33',
                'updated_at' => '2024-05-11 19:12:33',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Carpet Cleaning',
                'odd' => 1,
                'enabled' => 1,
                'order' => 3,
                'created_at' => '2024-05-11 19:14:07',
                'updated_at' => '2024-05-11 19:14:07',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Maintenace',
                'odd' => 1,
                'enabled' => 1,
                'order' => 4,
                'created_at' => '2024-05-11 19:15:31',
                'updated_at' => '2024-05-11 19:15:31',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Paint2',
                'odd' => 0,
                'enabled' => 1,
                'order' => 1,
                'created_at' => '2024-05-11 19:12:06',
                'updated_at' => '2024-05-11 19:12:06',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Clean3',
                'odd' => 0,
                'enabled' => 1,
                'order' => 2,
                'created_at' => '2024-05-11 19:12:33',
                'updated_at' => '2024-05-11 19:12:33',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Carpet Cleaning4',
                'odd' => 0,
                'enabled' => 1,
                'order' => 3,
                'created_at' => '2024-05-11 19:14:07',
                'updated_at' => '2024-05-11 19:14:07',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Maintenace5',
                'odd' => 0,
                'enabled' => 1,
                'order' => 4,
                'created_at' => '2024-05-11 19:15:31',
                'updated_at' => '2024-05-11 19:15:31',
            ),
        ));
        
        
    }
}