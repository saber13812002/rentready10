<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);

        $this->call(MenusTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(FootersTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
        $this->call(BenefitsTableSeeder::class);
        if (App::environment('local'))
            $this->call(UsersTableSeeder::class);
        $this->call(QuotesTableSeeder::class);
        $this->call(OurServicesTableSeeder::class);
    }
}
