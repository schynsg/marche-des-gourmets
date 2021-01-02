<?php

namespace Database\Seeders;

use App\Models\exhibitor;
use Illuminate\Database\Seeder;

class ExhibitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exhibitors =
            [
                [
                    'name' => 'Ferme D\'artagan',
                    'phone' => '0000000000',
                    'website' => 'https://www.lafermedartagnan.be/',
                    'address' => 'Rue de Tongres 77',
                    'postal_code' => '4684',
                    'city' => 'Haccourt',
                    'country' => 'BE',
                    'description' => 'Foie gras, magrets, filets, rillettes, cuisses confites de canard et dérivés',
                    'is_bio' => 0,
                ],
                [
                    'name' => 'Daphne Olive Oil',
                    'phone' => '0000000000',
                    'website' => 'https://daphneoil.bio/fr/',
                    'address' => 'Avenue Félix Deblon 151',
                    'postal_code' => '4910',
                    'city' => 'Theux',
                    'country' => 'BE',
                    'description' => 'Huile d\'olives grecque (région de Kalamata)',
                    'is_bio' => 1,
                ],
                [
                    'name' => 'Sweet Cuberdons - Bonbons à l\'ancienne',
                    'phone' => '0000000000',
                    'website' => '',
                    'address' => 'Rue des Téris 56',
                    'postal_code' => '4100',
                    'city' => 'Seraing',
                    'country' => 'BE',
                    'description' => 'Cuberdons artisanaux',
                    'is_bio' => 0,
                ],
                [
                    'name' => 'La Boutique du Champignon',
                    'phone' => '0000000000',
                    'website' => 'https://www.laboutiqueduchampignon.com/fr/',
                    'address' => '2b Rempart Nord',
                    'postal_code' => '68420',
                    'city' => 'Eguisheim',
                    'country' => 'FR',
                    'description' => 'Produits gastronomiques autour de la thématique du champignon',
                    'is_bio' => 1,
                ],
            ];
        foreach ($exhibitors as $exhibitor) {
            exhibitor::create($exhibitor);
        }
    }
}
