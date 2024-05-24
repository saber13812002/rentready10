<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CallToActionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('call_to_actions')->delete();
        
        \DB::table('call_to_actions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Ready to Level Up Your Make Ready Process? Let’s Talk.',
                'button' => 'Schedule a Call with Sales',
                'link' => '/contact-us',
                'created_at' => '2024-05-24 22:43:29',
                'updated_at' => '2024-05-24 22:43:29',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Ready to Level Up Your Make Ready Process? Let’s Talk.
',
                'button' => 'Schedule a Call with Sales',
                'link' => '/storage/assets/pdf.pdf',
                'created_at' => '2024-05-24 22:43:29',
                'updated_at' => '2024-05-24 22:43:29',
            ),
        ));
        
        
    }
}