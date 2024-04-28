<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FootersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('footers')->delete();

        \DB::table('footers')->insert(array (
            0 =>
            array (
                'id' => 1,
                'address' => '1431 West Morehead Street Charlotte, North Carolina 28208.',
                'phone' => '1.866.651.1004.',
                'linkedin' => 'https://www.linkedin.com/company/rent-ready/.',
                'facebook' => 'https://www.facebook.com/RentReadyApartments/.',
                'instagram' => 'https://www.instagram.com/rentready/.',
                'logo' => '/storage/assets/img/RR-logo-white.png?format=500w.',
                'terms_show' => 1,
                'privacy_show' => 1,
                'contact_us_show' => 1,
                'become_pro_show' => 1,
                'become_pro_link' => 'https://forms.office.com/pages/responsepage.aspx?id=qwYkC7-7nkuVok9d2X9z69ifxk1djudFjSJPDr2zyIdUNVIxWjcyTjdGRlM5RkwzWDBMRlcwR0hIMC4u/.',
                'created_at' => '2024-04-28 12:28:06',
                'updated_at' => '2024-04-28 12:28:09',
            ),
        ));


    }
}
