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
            3 => 
            array (
                'id' => 4,
                'key' => 'benefits_image2',
                'value' => '/storage/assets/img/Mask_group.png',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-02 16:30:03',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'why',
                'value' => 'igital turn board automates service scheduling with Rent Ready\'s Vendor Network, helping shave days off your turns so you can pigital turn board automates service scheduling with Rent Ready\'s Vendor Network, helping shave days off your turns so you can p',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-02 16:30:03',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'about_us',
                'value' => 'WG was created to solve the frustrations multifamily portfolios face getting vacant units ready for new residents. Combining an easy-to-use online software platform with a managed network of vendors, Rent Ready allows multifamily owners and operators to a',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-02 16:30:03',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'ceo_word',
                'value' => 'We’re a passionate, hardworking group that cares about making the lives of our customers and pros easier. We set high standards, and relentlessly motivate each other in pursuit our goals...',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-02 16:30:03',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'ceo_title',
                'value' => 's— J.K, Co-Founder & CEO...',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-04 21:19:45',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'discover_more',
                'value' => 'Explore how WG empowers multifamily owners and operators to streamline vendor scheduling, monitor make ready progress, simplify vendor payments, and optimize quality control....',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-02 16:30:03',
            ),
        ));
        
        
    }
}