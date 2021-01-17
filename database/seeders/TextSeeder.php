<?php

namespace Database\Seeders;

use App\Models\text;
use Illuminate\Database\Seeder;

class TextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $texts =
            [
                [
                    'title' => 'Edition number',
                    'content' =>
                        '20',
                ],
                [
                    'title' => 'Date',
                    'content' =>
                        '27 & 28 mars 2021',
                ],
                [
                    'title' => 'Index welcome first part',
                    'content' =>
                        'Vous y trouverez toutes les informations concernant cet événement annuel se tenant dans le merveilleux cadre du <b>Val Saint Lambert (BE)</b>.

                        Marché des Gourmets est une organisation du <b>Rotary club de Flémalle</b> en partenariat avec le <b>Collège Provincial de Liège</b>.',
                ],
                [
                    'title' => 'Index welcome second part',
                    'content' =>
                        'Il est placé sous le patronage de :

                        <b>Mme Isabelle SIMONIS</b>, Ministre de la Fédération Wallonie-Bruxelles

                        <b>M. Paul-Emile MOTTARD</b>, Député provincial-Président et les membres du Collège provincial de Liège

                        <b>M. Jean-Michel JAVAUX</b>, Bourgmestre d\'Amay',
                ],
                [
                    'title' => 'About the event',
                    'content' =>
                        'Le Marché des Gourmets est un événement annuel organisé par le <b>Rotary Club de Flémalle</b> dans le merveilleux cadre du <b>Val Saint Lambert</b> afin d\'obtenir des fonds pour aider les plus démunis.

                        En 2002 nous accueillions une étape du <b>terroir de Wallonie</b> organisée avec la participation de l\'Office des Produits Wallons.

                        En 2003 nous inaugurions, en collaboration avec <b>la Province de Liège</b>, notre 1ère année du marché des produits des terroirs européens en accueillant notre 1er invité d\'honneur, <b>la Province du Frioul</b>.

                        Depuis lors, la fréquentation n\'a cessé d\'augmenter pour atteindre <b>4000 visiteurs</b> et plusieurs pays et régions se sont succédés comme Invité d\'honneur : l\'Irlande, le Portugal, l\'Italie, Les Pays-Bas, l\'Espagne, l\'Alsace, le terroir de Wallonie qui est revenu pour notre 10ème édition, le tour des terroirs de France, la Communauté Germanophone de Belgique, la Province de Liège dans le cadre du « Circuit Court », la Grèce.',
                ],
                [
                    'title' => 'About the club',
                    'content' =>
                        'Le Rotary Club de Flémalle, composé de <b>36 membres</b>, fait partie du réseau des <b>34.164 clubs</b> du Rotary International, fort de <b>1.223.083 membres</b> répartis dans le <b>monde entier</b>. Conscient des difficultés présentes dans notre société, il a inscrit dans ses objectifs <b>l’aide en faveur de la jeunesse et des plus démunis</b>.

                        Le Rotary Club de Flémalle est animé à 100% par des <b>bénévoles</b> qui préparent des activités destinées à récolter des fonds pour les œuvres soutenues par le club. Les bénéfices ainsi dégagés sont <b>intégralement</b> distribués aux associations que nous aidons. Ce soutien peut prendre la forme d’une <b>aide financière ou de dons matériels</b>. Une étude préalable est toujours réalisée.

                        Citons, pour celle-ci :

                        <b>La Traille, à Engis</b>

                        <b>Le Foyer d’Accueil, à Grâce-Hollogne</b>

                        <b>Le Télé-Service, à Flémalle</b>

                        <b>Thermos, à Liège</b>

                        <b>La Vie par un Fil, à Montegnée</b>

                        etc,...',
                ],
                [
                    'title' => 'Exhibitors page introduction',
                    'content' =>
                        'Nous avons sélectionnez une <b>trentaine d\'exposants</b> pour vous accueillir au Marché des Gourmets, qu\'ils soient producteurs, vignerons commerçants, épiciers,... Nous les avons sélectionnés pour la <b>passion</b> qu\'ils transmettent dans leurs <b>produits de qualités</b>.',
                ],
                [
                    'title' => 'New exhibitors page introduction',
                    'content' =>
                        'Vous êtes producteurs, vignerons commerçants, épiciers,... Vous pouvez compléter ce formulaire afin de nous soumettre votre <b>inscription</b>. Veuillez noter que, au vu des <b>places limitées</b>, nous sommes obligés de limiter le nombre d\'exposants. Nous reviendrons donc vers vous après votre inscription.',
                ],
                [
                    'title' => 'Contact informations',
                    'content' =>
                        'Philippe Vanstalle

                        Quai de Rome, 10/23

                        4000 Liège',
                ],
                [
                    'title' => 'Ticketing page introduction',
                    'content' =>
                        'Merci de bien vouloir sélectionner le <b>nombre d\'entrées</b> que vous désirez.',
                ],
                [
                    'title' => 'Price',
                    'content' =>
                        '6',
                ],
            ];
        foreach ($texts as $text) {
            text::create($text);
        }
    }
}
