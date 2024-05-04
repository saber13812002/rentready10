<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mno2rui.LDpza/hG.IIyy.x213V01lgOLhgGA8dgqSzDmDTfPUmeu',
                'remember_token' => NULL,
                'created_at' => '2024-05-04 08:45:57',
                'updated_at' => '2024-05-04 08:45:57',
            ),
        ));
        
        
    }
}