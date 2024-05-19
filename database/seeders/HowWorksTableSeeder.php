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
                'text' => 'The residents\' notice to vacate status automatically triggers the turn scheduling process through our integration with your property management system.

۴
The residents\' notice to vacate status automatically triggers the turn scheduling process through',
                'enabled' => 1,
                'order' => 1,
                'created_at' => '2024-05-11 19:31:53',
                'updated_at' => '2024-05-11 19:31:53',
            ),
            1 => 
            array (
                'id' => 2,
                'text' => 'The residents\' notice to vacate status automatically triggers the turn scheduling process through our integration with your property management system...2',
                'enabled' => 1,
                'order' => 2,
                'created_at' => '2024-05-11 19:38:50',
                'updated_at' => '2024-05-11 19:38:50',
            ),
            2 => 
            array (
                'id' => 3,
                'text' => 'The residents\' notice to vacate status automatically triggers the turn scheduling process through our integration with your property management system.

۴
The residents\' notice to vacate status automatically triggers the turn scheduling process through',
                'enabled' => 1,
                'order' => 3,
                'created_at' => '2024-05-11 19:31:53',
                'updated_at' => '2024-05-11 19:31:53',
            ),
            3 => 
            array (
                'id' => 4,
                'text' => 'The residents\' notice to vacate status automatically triggers the turn scheduling process through our integration with your property management system...2',
                'enabled' => 1,
                'order' => 4,
                'created_at' => '2024-05-11 19:38:50',
                'updated_at' => '2024-05-11 19:38:50',
            ),
            4 => 
            array (
                'id' => 5,
                'text' => 'The residents\' notice to vacate status automatically triggers the turn scheduling process through our integration with your property management system.

۴
The residents\' notice to vacate status automatically triggers the turn scheduling process through',
                'enabled' => 1,
                'order' => 5,
                'created_at' => '2024-05-11 19:31:53',
                'updated_at' => '2024-05-11 19:31:53',
            ),
            5 => 
            array (
                'id' => 6,
                'text' => 'The residents\' notice to vacate status automatically triggers the turn scheduling process through our integration with your property management system...2',
                'enabled' => 1,
                'order' => 6,
                'created_at' => '2024-05-11 19:38:50',
                'updated_at' => '2024-05-11 19:38:50',
            ),
        ));
        
        
    }
}