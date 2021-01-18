<?php

namespace Database\Seeders;

use App\Models\Exhibitor_filter;
use Illuminate\Database\Seeder;

class ExhibitorFilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exhibitors_filters =
            [
                [
                    'exhibitor_id' => '1',
                    'filter_id' => '3',
                ],
                [
                    'exhibitor_id' => '1',
                    'filter_id' => '4',
                ],
                [
                    'exhibitor_id' => '2',
                    'filter_id' => '4',
                ],
                [
                    'exhibitor_id' => '3',
                    'filter_id' => '5',
                ],
                [
                    'exhibitor_id' => '3',
                    'filter_id' => '6',
                ],
                [
                    'exhibitor_id' => '4',
                    'filter_id' => '4',
                ],
            ];
        foreach ($exhibitors_filters as $exhibitors_filter) {
            Exhibitor_filter::create($exhibitors_filter);
        }
    }
}
