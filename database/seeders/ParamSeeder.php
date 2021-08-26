<?php

namespace Database\Seeders;

use App\Models\Params;
use Illuminate\Database\Seeder;

class ParamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params =
            [
                [
                    'price' => 6.00,
                    'age_for_free' => 16,
                    'address' => 'Chateau du Val Saint Lambert. Esplanade du Val, 4100 Seraing',
                    'contact_address' => 'Philippe Vanstalle. Quai de Rome 10/23, 4000 Liège',
                    'contact_phone' => '+32000 00 00 00',
                    'date' => '27 & 28 mars 2022',
                    'timetable' => 'Le samedi 27 mars 2021 de 11h00 à 20h00<br>Le dimanche 28 mars 2020 de 10h00 à 19h00',
                    'edition_number' => 21,
                    'entries_number' => 4000,
                ]
            ];
        foreach ($params as $param) {
            Params::create($param);
        }
    }
}
