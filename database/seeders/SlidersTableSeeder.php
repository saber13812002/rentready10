<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('sliders')->delete();

        \DB::table('sliders')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'Power Over
Your Make Ready Process',
                'description' => 'With Rent Ready, we offer multifamily owners and operators the ability to streamline and monitor make ready progress, automate vendor scheduling, outsource service delivery, and oversee quality control — all from one centralized platform',
                'image' => '/storage/assets/img/Frame_2856.png',
                'have_buttons' => 0,
                'enabled' => 1,
                'order' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
