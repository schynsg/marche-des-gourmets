<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partners =
            [
                [
                    'name' => 'Rotary Club de Flémalle',
                    'website' => 'https://www.rotaryclubflemalle.be/',
                    'file_name' => '../img/RotaryFlemalle.jpg'
                ],
                [
                    'name' => 'Province de Liège',
                    'website' => 'https://www.provincedeliege.be/',
                    'file_name' => '../img/ProvinceLiege.jpg'
                ],
            ];
        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
