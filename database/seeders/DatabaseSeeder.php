<?php

namespace Database\Seeders;

use App\Nova\ImagesCategoriesList;
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
            ExtraSeeder::class,
            FilterSeeder::class,
            ExhibitorFilterSeeder::class,
            PartnerSeeder::class,
            ImageSeeder::class,
            UserSeeder::class,
            ParamSeeder::class,
            ImagesCategoriesListSeeder::class,
        ]);
    }
}
