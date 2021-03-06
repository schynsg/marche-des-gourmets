<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ExhibitorSeeder::class,
            InfoSeeder::class,
            TextSeeder::class,
            ExtraSeeder::class,
            FilterSeeder::class,
            ExhibitorFilterSeeder::class,
            PartnerSeeder::class,
            ImageSeeder::class,
            UserSeeder::class,
        ]);
    }
}
