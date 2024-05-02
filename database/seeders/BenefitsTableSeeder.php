<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BenefitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('benefits')->delete();
        
        \DB::table('benefits')->insert(array (
            0 => 
            array (
                'id' => 1,
                'logo' => '/storage/assets/img/logo/1.png',
                'title' => 'Faster Turn Times.',
                'description' => 'Our digital turn board automates service scheduling with Rent Ready\'s Vendor Network, helping shave days off your turns so you can put units back on the market faster..',
                'image' => NULL,
                'have_buttons' => 0,
                'enabled' => 1,
                'order' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'logo' => '/storage/assets/img/logo/2.png',
                'title' => 'Reduced Cost Per Turn.',
                'description' => 'Leveraging the Rent Ready Vendor Network, our simplified cost structure provides standardized portfolio wide pricing that drives budgeting and forecasting predictability..',
                'image' => NULL,
                'have_buttons' => 0,
                'enabled' => 1,
                'order' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'logo' => '/storage/assets/img/logo/3.png',
                'title' => 'Improved Operating Efficiency.',
                'description' => 'Our technology, support infrastructure and vendor network enable owners and operators to optimize operations by automating the make-ready process and outsourcing vendor management, thereby reducing costs and turn delays. Optimizing operations across a por',
                'image' => NULL,
                'have_buttons' => 0,
                'enabled' => 1,
                'order' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}