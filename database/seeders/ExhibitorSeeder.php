<?php

namespace Database\Seeders;

use App\Models\Exhibitor;
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
                    'country' => 'Belgique',
                    'description' => 'Foie gras, magrets, filets, rillettes, cuisses confites de canard et dérivés',
                    'is_bio' => 0,
                    'active' => 1,
                ],
                [
                    'name' => 'Daphne Olive Oil',
                    'phone' => '0000000000',
                    'website' => 'https://daphneoil.bio/fr/',
                    'address' => 'Avenue Félix Deblon 151',
                    'postal_code' => '4910',
                    'city' => 'Theux',
                    'country' => 'Belgique',
                    'description' => 'Huile d\'olives grecque (région de Kalamata)',
                    'is_bio' => 1,
                    'active' => 1,
                ],
                [
                    'name' => 'Sweet Cuberdons - Bonbons à l\'ancienne',
                    'phone' => '0000000000',
                    'website' => '',
                    'address' => 'Rue des Téris 56',
                    'postal_code' => '4100',
                    'city' => 'Seraing',
                    'country' => 'Belgique',
                    'description' => 'Cuberdons artisanaux',
                    'is_bio' => 0,
                    'active' => 1,
                ],
                [
                    'name' => 'La Boutique du Champignon',
                    'phone' => '0000000000',
                    'website' => 'https://www.laboutiqueduchampignon.com/fr/',
                    'address' => '2b Rempart Nord',
                    'postal_code' => '68420',
                    'city' => 'Eguisheim',
                    'country' => 'France',
                    'description' => 'Produits gastronomiques autour de la thématique du champignon',
                    'is_bio' => 1,
                    'active' => 1,
                ],
            ];
        foreach ($exhibitors as $exhibitor) {
            Exhibitor::create($exhibitor);
        }
    }
}
