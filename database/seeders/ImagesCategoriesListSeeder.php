<?php

namespace Database\Seeders;

use App\Models\ImagesCategoriesList;
use Illuminate\Database\Seeder;

class ImagesCategoriesListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =
            [
                [
                    'name' => '18e Marché des Gourmets 2019'
                ],
            ];
        foreach ($categories as $category) {
            ImagesCategoriesList::create($category);
        }
    }
}
