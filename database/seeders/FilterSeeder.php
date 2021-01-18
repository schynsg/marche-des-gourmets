<?php

namespace Database\Seeders;

use App\Models\Filter;
use Illuminate\Database\Seeder;

class FilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filters =
            [
                [
                    'value' => 'alcohol',
                    'text' => 'Vins, Gins, Rhums,...',
                ],
                [
                    'value' => 'cheese',
                    'text' => 'Fromages',
                ],
                [
                    'value' => 'meat',
                    'text' => 'Charcuterie, salaisons,...',
                ],
                [
                    'value' => 'grocery',
                    'text' => 'Épicerie',
                ],
                [
                    'value' => 'dessert',
                    'text' => 'Pâtisserie, desserts,...',
                ],
                [
                    'value' => 'other',
                    'text' => 'Autres',
                ],
            ];
        foreach ($filters as $filter) {
            Filter::create($filter);
        }
    }
}
