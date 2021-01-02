<?php

namespace Database\Seeders;

use App\Models\info;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $infos =
            [
                [
                    'title' => 'Où ?',
                    'content' =>
                        'Chateau du Val Saint Lambert
                        Esplanade du Val,
                        4100 Seraing',
                ],
                [
                    'title' => 'Quand ?',
                    'content' =>
                        'Le samedi 27 mars 2021 de 11h00 à 20h00
                        Le dimanche 28 mars 2020 de 10h00 à 19h00',
                ],
                [
                    'title' => 'Prix',
                    'content' =>
                        'Entrée : 6,00€
                        Entrée gratuite pour les moins de 16 ans',
                ],
            ];
        foreach ($infos as $info) {
            info::create($info);
        }
    }
}
