<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images =
            [
                [
                    'category_id' => 1,
                    'alternative' => 'Représentation du 17e marché des Gourmets 2017',
                    'file_name' => '../img/exemple.png',
                ],
            ];
        foreach ($images as $image) {
            Image::create($image);
        }
    }
}
