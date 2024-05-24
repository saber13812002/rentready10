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
                'id' => 5,
                'key' => 'why',
                'value' => 'igital turn board automates service scheduling with Rent Ready\'s Vendor Network, helping shave days off your turns so you can pigital turn board automates service scheduling with Rent Ready\'s Vendor Network, helping shave days off your turns so you can p',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-02 16:30:03',
            ),
            3 => 
            array (
                'id' => 6,
                'key' => 'about_us',
                'value' => 'WG was created to solve the frustrations multifamily portfolios face getting vacant units ready for new residents. Combining an easy-to-use online software platform with a managed network of vendors, Rent Ready allows multifamily owners and operators to a',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-02 16:30:03',
            ),
            4 => 
            array (
                'id' => 7,
                'key' => 'ceo_word',
                'value' => 'We’re a passionate, hardworking group that cares about making the lives of our customers and pros easier. We set high standards, and relentlessly motivate each other in pursuit our goals...',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-02 16:30:03',
            ),
            5 => 
            array (
                'id' => 8,
                'key' => 'ceo_title',
                'value' => 's— J.K, Co-Founder & CEO...',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-04 21:19:45',
            ),
            6 => 
            array (
                'id' => 9,
                'key' => 'discover_more',
                'value' => 'Explore how WG empowers multifamily owners and operators to streamline vendor scheduling, monitor make ready progress, simplify vendor payments, and optimize quality control....--',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-04 21:33:31',
            ),
            7 => 
            array (
                'id' => 10,
                'key' => 'solutions_title',
                'value' => 'solution title is some words that appear in solution page..',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-04 21:35:00',
            ),
            8 => 
            array (
                'id' => 11,
                'key' => 'our_services_title',
                'value' => 'our services:',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-04 21:33:31',
            ),
            9 => 
            array (
                'id' => 12,
                'key' => 'solution_benefits_title',
                'value' => 'solution benefits title:',
                'created_at' => '2024-05-02 16:30:03',
                'updated_at' => '2024-05-04 21:35:00',
            ),
            10 => 
            array (
                'id' => 13,
                'key' => 'how_works_title',
                'value' => 'how its work title:',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'key' => 'why_title',
                'value' => 'why wg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'key' => 'login_link',
                'value' => 'https://secure.getjobber.com',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}