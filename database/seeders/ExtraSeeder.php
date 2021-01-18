<?php

namespace Database\Seeders;

use App\Models\Extra;
use Illuminate\Database\Seeder;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $extras =
            [
                [
                    'title' => 'Restauration',
                    'content' => 'Venez déguster les plats réalisés par le Rotary Club de Flémalle avec les <b>produits des exposants</b> ou venez faire une petite pause à <b>notre bar</b>.',
                    'svg' => '<svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103 97.81" height="110" width="110"><defs><style>.cls-1{fill:#d87d1a;}</style></defs><path id="Icon_material-restaurant-menu" data-name="Icon material-restaurant-menu" class="cls-1" d="M76.8,61,61.55,45.73,99.37,8a21.6,21.6,0,0,1,0,30.49ZM40.27,51.22C32,55.05,20.45,52.35,11.89,43.79,1.6,33.5-.4,18.74,7.52,10.82s22.63-5.93,33,4.36c8.57,8.57,11.26,20.15,7.43,28.39L100.5,96.15l-7.6,7.6-37.11-37L18.73,103.8l-7.6-7.6L48.19,59.14Z" transform="translate(-2.67 -5.99)"></path></svg>',
                ],
                [
                    'title' => 'Garderie',
                    'content' => 'Profitez pleinement du Marché grâce à notre service de <b>garderie</b> assuré par les Papys et Mamys câlins.',
                    'svg' => '<svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103 108.46" height="110" width="110"><defs><style>.cls-1{fill:#d87d1a;}</style></defs><path id="Icon_material-child-friendly" data-name="Icon material-child-friendly" class="cls-1" d="M62.82.82V44.18h43.36A43.34,43.34,0,0,0,62.84.82Zm34.26,75.3a43.11,43.11,0,0,0,9.1-26.52H27.25L22.1,38.76H3.18V49.6h12s10.25,22.07,11.49,24A19,19,0,1,0,54.47,93H65.74A19,19,0,1,0,97.08,76.12ZM35.71,98.39a8.13,8.13,0,1,1,8.13-8.13h0a8.11,8.11,0,0,1-8.11,8.13Zm48.79,0a8.13,8.13,0,1,1,8.13-8.13h0a8.11,8.11,0,0,1-8.11,8.13Z" transform="translate(-3.18 -0.82)"></path></svg>',
                ],
                [
                    'title' => 'Nocturne',
                    'content' => 'Le Marché est ouvert en <b>nocturne</b> le samedi jusqu\'à 20h00.',
                    'svg' => '<svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96.9 108.44" height="110" width="110"><defs><style>.cls-1{fill:#d87d1a;}</style></defs><path id="Icon_awesome-moon" data-name="Icon awesome-moon" class="cls-1" d="M60.57,108.86a54.12,54.12,0,0,0,42.11-20.08,2.53,2.53,0,0,0-.37-3.57,2.59,2.59,0,0,0-2.08-.53,42.47,42.47,0,0,1-29-78.63,2.54,2.54,0,0,0-.8-4.71,54.22,54.22,0,1,0-9.9,107.52Z" transform="translate(-6.35 -0.42)"></path></svg>',
                ],
                [
                    'title' => 'Etudiants',
                    'content' => 'Les élèves des filières "Métiers de bouche" et "Hôtellerie" vous ferons découvrir, durant tout le weekend, leur <b>savoir-faire</b>.',
                    'svg' => '<svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103.01 105.58" height="110" width="110"><defs><style>.cls-1{fill:#d87d1a;}</style></defs><path id="Icon_ionic-ios-person" data-name="Icon ionic-ios-person" class="cls-1" d="M106.23,104.5c-1.93-8.75-13-13-16.76-14.38-4.19-1.52-10.14-1.87-14-2.75-2.2-.5-5.39-1.73-6.46-3.05s-.43-13.56-.43-13.56a41.89,41.89,0,0,0,3.06-6c1.07-2.78,2.25-10.42,2.25-10.42s2.2,0,3-4c.83-4.32,2.14-6,2-9.21S77,38.13,77,38.13s1.64-4.59,1.82-14.1c.24-11.31-8.39-22.44-24-22.44C39,1.59,30.51,12.72,30.75,24c.21,9.51,1.8,14.1,1.8,14.1S30.86,38,30.7,41.2s1.15,4.9,2,9.21c.75,4,3,4,3,4S36.84,62,37.91,64.79a42,42,0,0,0,3.06,6s.65,12.23-.43,13.55-4.26,2.56-6.46,3c-3.84.88-9.79,1.24-14,2.75C16.29,91.49,5.27,95.75,3.34,104.5A2.18,2.18,0,0,0,5,107.11a2.59,2.59,0,0,0,.47,0h98.69a2.19,2.19,0,0,0,2.15-2.21A1.74,1.74,0,0,0,106.23,104.5Z" transform="translate(-3.28 -1.59)"></path></svg>',
                ],
                [
                    'title' => 'Bancontact',
                    'content' => 'A la caisse du restaurant, un terminal <b>bancontact</b> vous permet de retirer de l\'argent pour effectuer vos achats.',
                    'svg' => '<svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103 61.23" height="110" width="110"><defs><style>.cls-1{fill:#d87d1a;}</style></defs><path id="Icon_payment-bancontact-mister-cash" data-name="Icon payment-bancontact-mister-cash" class="cls-1" d="M11.2,55.66H54.12L59,50.8H74.72L61.27,65.68H11.2ZM47.64,45.25l-9.26,9.52H53.51l5-4.86H76.69L72,55.27H97.71v-10ZM99,24.76H10.35a7.18,7.18,0,0,0-7.16,7.18V78.8A7.18,7.18,0,0,0,10.35,86H99a7.18,7.18,0,0,0,7.17-7.18h0V31.94A7.18,7.18,0,0,0,99,24.76Zm5.42,54.08a5.65,5.65,0,0,1-5.66,5.65H10.59a5.65,5.65,0,0,1-5.65-5.65h0V31.91a5.65,5.65,0,0,1,5.65-5.65H98.78a5.65,5.65,0,0,1,5.66,5.65h0ZM18,29.1a3.75,3.75,0,0,1,2.82,3.68A3.37,3.37,0,0,1,19.89,35l-.25.26c1.62,1.15,2.28,2.65,1.49,4.53A3.54,3.54,0,0,1,17.92,42a3.78,3.78,0,0,0-.47-.06H11.89c-.39,0-.42,0-.42-.41q0-6.18,0-12.36h6.07Zm-3,2.53,0,2.44,0,0h1.37a1,1,0,0,0,1-.82A1.31,1.31,0,0,0,16.88,32,2.2,2.2,0,0,0,15,31.63Zm0,7.76a13.75,13.75,0,0,0,1.7,0,1.18,1.18,0,0,0,1.1-1.19,1.27,1.27,0,0,0-.95-1.34,11.43,11.43,0,0,0-1.85,0,1.22,1.22,0,0,0-.06.26c0,.71,0,1.43,0,2.14,0,0,0,.09.07.14Zm33.64-1.68a4.64,4.64,0,0,1,3.54-4.46,5,5,0,0,1,5.69,2.44,4.48,4.48,0,0,1-1.9,6,5.58,5.58,0,0,1-.67.28,5.78,5.78,0,0,1-1.43.24,6.14,6.14,0,0,1-1.66-.1,4.59,4.59,0,0,1-3.56-4.43Zm3.15,0a1.72,1.72,0,0,0,1.59,1.84h.11a1.79,1.79,0,0,0,1.81-1.74A1.71,1.71,0,0,0,53.7,36h-.19a1.6,1.6,0,0,0-1.75,1.43,1.31,1.31,0,0,0,0,.28Zm-21.54,4.4H27.75c-.12,0-.24-.1-.44-.19a5.25,5.25,0,0,1-2,.44,4.38,4.38,0,0,1-2.39-.47,2.18,2.18,0,0,1-1.1-2.2,3.31,3.31,0,0,1,2.82-3.14,17.05,17.05,0,0,1,1.86-.28c.1,0,.23,0,.3,0s.34-.2.39-.34-.16-.25-.25-.38-.2-.16-.29-.16c-.45,0-.91,0-1.37,0a.83.83,0,0,0-.32.14c-.52.11-1,.21-1.56.35a7.73,7.73,0,0,0-.95.33c0-.29.08-.54.12-.79.08-.44.18-.87.25-1.31,0-.2.12-.35.33-.38l1.74-.28a9.09,9.09,0,0,1,1.28-.12,6.21,6.21,0,0,1,2.91.63,2.54,2.54,0,0,1,1.43,1.7.94.94,0,0,0-.07.22c0,1.89,0,3.78,0,5.67a1.64,1.64,0,0,1-.2.56ZM27.39,38.9a3.85,3.85,0,0,0,0-.48c0-.07-.12-.2-.18-.2a2.53,2.53,0,0,0-1.94.68A.9.9,0,0,0,25.1,40a1.1,1.1,0,0,0,1,.46A1.34,1.34,0,0,0,27.4,39s0-.09,0-.13Zm49.66,3.37a8.44,8.44,0,0,1-1.2-.4,2,2,0,0,1-1.15-1.81A2.93,2.93,0,0,1,76,37.24a5.79,5.79,0,0,1,1.58-.72,16.25,16.25,0,0,1,2-.29h.13c.24,0,.48-.11.5-.39s-.24-.34-.44-.35a13.4,13.4,0,0,0-1.9.05c-.83.13-1.64.36-2.49.55l.26-1.42a4.42,4.42,0,0,0,.1-.5.49.49,0,0,1,.41-.5,9.21,9.21,0,0,1,5.1,0,3.15,3.15,0,0,1,1.73,1.1,5.22,5.22,0,0,1,.45.92.77.77,0,0,0-.08.27q0,2.82,0,5.64a.55.55,0,0,1-.28.53c-.77,0-1.55,0-2.32,0a1.63,1.63,0,0,1-.43-.18l-1.45.37L77.2,42.2s-.1,0-.15.07Zm1-2.21a.92.92,0,0,0,1.22.28,1.29,1.29,0,0,0,1-1.54,1.31,1.31,0,0,1,0-.28c0-.21-.07-.34-.29-.3a6.49,6.49,0,0,0-1.31.35A1.05,1.05,0,0,0,78,39.9a1.11,1.11,0,0,0,.07.16Zm-46.77,2a2.76,2.76,0,0,1-.06-.4V33.84c0-.44,0-.44.44-.44h2.37c.4,0,.4,0,.43.41,0,0,0,.09,0,.19l.36-.21a3.43,3.43,0,0,1,4.39.52,3.06,3.06,0,0,1,.82,2.13c0,1.78,0,3.57,0,5.35a1.1,1.1,0,0,1-.06.26.51.51,0,0,0-.17-.07c-.7,0-1.4,0-2.11,0a3.73,3.73,0,0,0-.46.09h-.07a1.82,1.82,0,0,1-.2-.55c0-1.33,0-2.66,0-4a2.32,2.32,0,0,0-.07-.46A1.24,1.24,0,0,0,36,36a1.31,1.31,0,0,0-1.55.7c-.26,0-.2.22-.2.38s.05.34.05.51v3.54c0,.27,0,.55-.06.81H33.9c-.56,0-1.12,0-1.67.07-.3,0-.62-.1-.91.09ZM59,33.42h2.78c.21,0,.33.07.32.3,0,.08,0,.15,0,.29l.55-.3a3.49,3.49,0,0,1,4.21.54A3.06,3.06,0,0,1,67.7,36a3.62,3.62,0,0,0-.06.46c0,1.69,0,3.37,0,5a3,3,0,0,1-.13.59c-.88,0-1.76,0-2.64,0-.3,0-.3-.17-.3-.38V38c0-.32,0-.64,0-.95a1.13,1.13,0,0,0-1-1.16,1.26,1.26,0,0,0-1.33.74c0,.1-.07.22-.11.32a3,3,0,0,0-.06.4q0,2.34,0,4.68h-3A5.51,5.51,0,0,1,59,41.5c0-2.69,0-5.38,0-8.07Zm9.21,1.65c0-.46,0-.91,0-1.37,0-.23.09-.29.31-.3.73,0,.73,0,.73-.78,0-.36,0-.73,0-1.1a.45.45,0,0,1,.19-.32c1-.52,1.94-1,2.92-1.52h.1a2.83,2.83,0,0,1,0,.29c0,1,0,2.06,0,3.09,0,.26.08.36.35.35s.78,0,1.17,0c.16,0,.27,0,.26.23v2.12H72.55a1.43,1.43,0,0,0-.09.42c0,.7,0,1.41,0,2.11v1.16c0,.07-.07.26.14.15.41.37.85.22,1.29.07a.33.33,0,0,1,.25.38s0,0,0,0a1.82,1.82,0,0,0,0,.57,1,1,0,0,1-.67,1.17,1.43,1.43,0,0,0-.32.28A3.22,3.22,0,0,1,70.72,42a2.38,2.38,0,0,1-1.5-2.3c0-1.25,0-2.51,0-3.76-.21,0-.42-.07-.62-.08s-.32,0-.31-.28a2.34,2.34,0,0,0-.09-.54Zm28.23,4.59a1.19,1.19,0,0,0,1.17,0,.33.33,0,0,1,.26.38h0c0,.11,0,.23,0,.34a2.74,2.74,0,0,1-.13,1.27,3.22,3.22,0,0,1-2.29.59,2.48,2.48,0,0,1-2.24-1.53,2.81,2.81,0,0,1-.19-1c0-1.11,0-2.22,0-3.32A2.05,2.05,0,0,0,92.9,36a5.54,5.54,0,0,0-.6-.06c-.23,0-.36-.07-.35-.33,0-.59,0-1.18,0-1.77,0-.13.12-.24.19-.37h.14c.71,0,.71,0,.71-.72V31.56a.4.4,0,0,1,.23-.41l2.37-1.22c.47,0,.47,0,.47.54V33a3.15,3.15,0,0,0,.09.42h1.7v2.33H96.31a1.78,1.78,0,0,0-.1.38c0,.45,0,.89,0,1.33v1.95c0,.12-.08.35.21.25Zm-5-3.14a4.65,4.65,0,0,0-.63-.32,3.36,3.36,0,0,0-2.53-.1,1.81,1.81,0,0,0-1.14,1.95,1.13,1.13,0,0,0,.52.87,3.47,3.47,0,0,0,3.47.1l.29-.15a.48.48,0,0,1,0,.18v2.26a.36.36,0,0,1-.21.38,5.12,5.12,0,0,1-6.9-2.21l0-.09a4.44,4.44,0,0,1,2.34-5.82,4.91,4.91,0,0,1,.74-.24,6.38,6.38,0,0,1,3.67.23.54.54,0,0,1,.41.61c0,.67,0,1.35,0,2,0,.1,0,.2,0,.33ZM47.8,36.36A3.49,3.49,0,0,0,45.31,36a1.88,1.88,0,0,0-1.53,1.45,1.35,1.35,0,0,0,.33,1.27,2.11,2.11,0,0,0,1.38.69,5,5,0,0,0,2-.2L48,39.1c0,.15,0,.27,0,.4,0,.52,0,1,0,1.54a3.53,3.53,0,0,1-.13.63,4.77,4.77,0,0,1-3,.52,4.45,4.45,0,0,1-2.35-.93c-.22-.25-.42-.51-.65-.75a3.37,3.37,0,0,0-.38-.28,4,4,0,0,1-.78-3,4.3,4.3,0,0,1,3.7-3.93,5.46,5.46,0,0,1,3.47.4,3,3,0,0,1,.13.52q0,.87,0,1.74a1.34,1.34,0,0,1-.19.44Zm-36.33-7.2V41.52c0,.38,0,.41.42.41h5.56a3.78,3.78,0,0,1,.47.06H11.6l-.19,0c0-.13,0-.26,0-.38V29.41a2.32,2.32,0,0,1,.06-.38.53.53,0,0,1,0,.13Zm19.84,12.9c.29-.19.6-.07.91-.09l1.67-.06h.38c0-.26.06-.54.06-.82q0-1.77,0-3.54c0-.17,0-.34,0-.51s-.05-.35.2-.38a5,5,0,0,0-.07.54v4.46c0,.42,0,.42-.42.42l-2.68,0ZM59,33.42q0,4,0,8.07c0,.19,0,.38.06.58a1.13,1.13,0,0,1-.13-.33c0-1.13,0-2.26,0-3.39V33.77a2,2,0,0,1,.07-.35Zm24,8.65a.56.56,0,0,0,.28-.54q0-2.82,0-5.64a.92.92,0,0,1,.08-.27l0,2.56v3.87l-.36,0Zm-52.81,0a1.59,1.59,0,0,0,.2-.55c0-1.89,0-3.79,0-5.68a.73.73,0,0,1,.06-.21c0,.2,0,.4,0,.61v5.47c0,.2,0,.42-.29.36Zm42.93,0a1.39,1.39,0,0,1,.32-.27,1,1,0,0,0,.66-1.17h0a1.88,1.88,0,0,1,0-.58.31.31,0,0,0-.19-.4h0l.34-.22c0,.72,0,1.37,0,2,0,.07-.09.16-.16.2l-.92.43Zm-5.64,0a2.4,2.4,0,0,0,.13-.59c0-1.68,0-3.36,0-5A3.55,3.55,0,0,1,67.7,36c0,2,0,3.9,0,5.85C67.72,42,67.72,42.1,67.5,42.07Zm-30.56-5a2.54,2.54,0,0,1,.07.47c0,1.33,0,2.66,0,4a1.8,1.8,0,0,0,.19.55c-.28.06-.28-.12-.28-.32V37.06Zm25.07,5V37.39a2.76,2.76,0,0,1,.06-.4c0,1.61,0,3.22,0,4.83a1.82,1.82,0,0,1-.07.25Zm34.15-8.65a3.15,3.15,0,0,1-.09-.42V30.48c0-.52,0-.52-.47-.55l.56-.32v3.81Zm.26,6.24c-.28.1-.21-.13-.21-.25,0-.65,0-1.3,0-1.94,0-.45,0-.89,0-1.33a1.72,1.72,0,0,1,.1-.39c0,1.15,0,2.3,0,3.45A1.47,1.47,0,0,0,96.42,39.66ZM72.6,39.59c-.21.12-.15-.07-.15-.14,0-.39,0-.77,0-1.16V36.17a2.13,2.13,0,0,1,.1-.42c0,1.17,0,2.34,0,3.51a1.86,1.86,0,0,0,.06.34Zm19.55-6.17c-.07.12-.19.24-.19.37,0,.59,0,1.18,0,1.77,0,.26.12.33.35.33s.4,0,.6.06h-1V33.68c0-.21.07-.3.27-.26ZM47.87,41.66A4.26,4.26,0,0,0,48,41c0-.51,0-1,0-1.54,0-.12,0-.24,0-.4l-.49.08.59-.35v2.46c0,.17,0,.32-.22.37Zm-.07-5.3a1.16,1.16,0,0,0,.19-.44c0-.58,0-1.16,0-1.74a2.31,2.31,0,0,0-.12-.52c.07.09.2.18.2.27,0,.85,0,1.7,0,2.61ZM37.29,42.07a1.87,1.87,0,0,1,.46-.09h2.11a.53.53,0,0,1,.17.08ZM24.93,35.49a1,1,0,0,1,.32-.14c.46,0,.92,0,1.37,0,.1,0,.2.11.3.16h-2Zm72.79,6.18a2.74,2.74,0,0,0,.13-1.27c0-.11,0-.23,0-.34a.32.32,0,0,0-.26-.38l.33-.21c0,.7,0,1.34,0,2,0,.07-.13.14-.19.21ZM41.47,40.23a2.66,2.66,0,0,1,.38.28c.23.24.44.5.65.75l-1-1Zm35.58,2s.1-.07.15-.07l1.62.07Zm20.8-6.52V33.42s.06.07.06.11q0,1,0,2.1s0,.08-.06.11Zm-29.66-.68a2.54,2.54,0,0,1,.09.54c0,.24.11.28.31.28s.41,0,.62.08h-.76c-.21,0-.28-.09-.27-.28s0-.41,0-.62ZM15,36.86v2.53s-.07-.09-.07-.14c0-.71,0-1.42,0-2.14a1.14,1.14,0,0,1,.06-.25Zm0-5.23v2.48s0,0,0,0C15,33.26,15,32.45,15,31.63Zm63.09,8.43a1.49,1.49,0,0,0,1.22.28.92.92,0,0,1-1.22-.28Zm-58,41.42a3,3,0,0,1-.05-.43q0-3.17,0-6.34a.85.85,0,0,0-.08-.35l-2.49,3.52-.24-.31c-.73-1-1.47-2.1-2.21-3.14a.67.67,0,0,0-.14-.15c0,.1-.05.21-.07.31v6.89c-1,0-2,0-3,0-.23,0-.3-.1-.3-.31,0-2.1,0-4.2,0-6.3a1.91,1.91,0,0,0,.06-.33V69.17a3,3,0,0,0-.07-.32,2.2,2.2,0,0,1,.37,0c.9,0,1.8,0,2.71,0a.61.61,0,0,1,.56.3c.7,1,1.42,2.08,2.13,3.11l.25.35.33-.46,2-3a.63.63,0,0,1,.59-.32c.92,0,1.85,0,2.78,0,.24,0,.35.08.34.34,0,2-.05,3.93-.07,5.9a.7.7,0,0,0-.13.29c0,.88,0,1.76,0,2.64,0,1,0,2.06,0,3.08,0,.24-.07.32-.32.31-.8,0-1.6,0-2.4,0-.4,0-.43,0-.43-.39V75c0-.15.05-.29.06-.44s-.05-.09-.07-.14l-.07,0v7Zm71.77,0-2.57,0c-.17,0-.26-.07-.25-.24v-12c0-.5,0-.5.49-.5h2.26l.4,0a.64.64,0,0,0-.06.18v3.84a2.2,2.2,0,0,0,.06.37,2.43,2.43,0,0,0,.37-.16,3.69,3.69,0,0,1,4.24.17A3.18,3.18,0,0,1,98,75.85V81c0,.55,0,.55-.55.52l-.4-.07H95.36c-.48,0-.53,0-.52-.53,0-1.49,0-3,0-4.48,0,0-.07-.08-.1-.12-.32-.78-.74-1.1-1.41-1a1.33,1.33,0,0,0-1.19,1s0,0,0,0h0c0,.1,0,.2,0,.3v4.38a.52.52,0,0,1-.27.53Zm-31.1-7.2a6.33,6.33,0,0,1,4.76-5.37,9.26,9.26,0,0,1,5.29.25l.18.09a.85.85,0,0,0,.06.17c.06.15.19.29.19.44q0,1,0,2a1,1,0,0,1-.15.35,4.38,4.38,0,0,0-1.74-.65,6.87,6.87,0,0,0-2.89.11A3.49,3.49,0,0,0,64,74.61c-.31,2.54,2.15,4.2,4.12,4.15A5.19,5.19,0,0,0,71,78a1.11,1.11,0,0,1,.19.43c0,.67,0,1.34,0,2a1.27,1.27,0,0,0,.06.28,9.88,9.88,0,0,1-1.57.67A7.43,7.43,0,0,1,63,80,6.1,6.1,0,0,1,60.71,76v-1.7Zm19.7,7.06H77.81s-.08,0-.1,0c-.28-.29-.53,0-.8,0a5.64,5.64,0,0,1-3.4.06,2.41,2.41,0,0,1-1.75-2.75,3.29,3.29,0,0,1,2.74-2.9,19.81,19.81,0,0,1,2-.28,1.34,1.34,0,0,0,.52-.14.51.51,0,0,0,.23-.37c0-.1-.18-.24-.3-.28a2,2,0,0,0-.6-.09,9.65,9.65,0,0,0-3.79.66l-.23.08c.06-.34.1-.63.16-.92s.16-.85.26-1.28A.4.4,0,0,1,73,72.9c.65-.15,1.31-.27,2-.4l1,.06c.32,0,.63,0,.94-.06a5.45,5.45,0,0,1,2.6.85,2.28,2.28,0,0,1,1,1.62,3.32,3.32,0,0,0-.06.44c0,1.79,0,3.58,0,5.37a1.81,1.81,0,0,1-.12.56Zm-3-3.15c0-.82,0-.81-.82-.64a2.21,2.21,0,0,0-1.29.64.9.9,0,0,0-.17,1,1.17,1.17,0,0,0,1,.49,1.35,1.35,0,0,0,1.27-1.43.17.17,0,0,1,0-.07Zm-32.83-.76a1.09,1.09,0,0,0,.61,1.26,3.67,3.67,0,0,0,2.6.28c.7-.16,1.37-.43,2-.65.2,0,.23.16.23.32,0,.41,0,.82,0,1.23s0,.57.06.85a5.07,5.07,0,0,1-2.07.84c-.29.06-.59.08-.88.12l-.06,0-1.5-.12c-.75,0,0,.1,0,.15a4.64,4.64,0,0,1-.6-9.16,4.89,4.89,0,0,1,3,.28A3.89,3.89,0,0,1,50.19,76c0,.19,0,.38.07.58a1.76,1.76,0,0,0-.06.4c0,.26-.1.35-.34.34H45a2.42,2.42,0,0,0-.47.07Zm-.14-1.78H47.2a1.15,1.15,0,0,0-1.12-1.09C45,74.45,44.58,74.85,44.43,75.65Zm-4.86-3,1.47,0c.27,0,.4.07.39.36,0,.6,0,1.19,0,1.79,0,.24-.1.32-.33.32-.45,0-.91,0-1.39,0l0,.28v3.16c0,.49.25.72.74.63a8.35,8.35,0,0,0,1-.3,1.13,1.13,0,0,1,0,.18c0,.56,0,1.12,0,1.68a.51.51,0,0,1-.17.34,3.6,3.6,0,0,1-3.17.46,2.34,2.34,0,0,1-1.68-2.66,2.09,2.09,0,0,0,.07-.36q0-1.42,0-2.85a2.2,2.2,0,0,0-.07-.37c-.29,0-.58,0-.87,0s-.31-.07-.3-.3v-2c0-.23.1-.28.3-.3s.58,0,.87-.07a1.78,1.78,0,0,0,.07-.39c0-.44,0-.87,0-1.3,0-.2,0-.38.26-.45,0,0,0-.1.07-.15l2.56-1.35a1.72,1.72,0,0,1,.13.48c0,1,0,1.91,0,2.87a1.86,1.86,0,0,0,.07.34Zm-4.15,6.93A3.15,3.15,0,0,1,33,81.42a8.72,8.72,0,0,1-4.36-.28.52.52,0,0,1-.44-.58h0c0-.67,0-1.34,0-2.1l.9.34-.06,0s0,0,0,0a6.79,6.79,0,0,0,2.69.27c.1,0,.18-.14.27-.21.32-.4.28-.68-.2-.88s-.79-.2-1.19-.32a6.51,6.51,0,0,1-.94-.32,2.31,2.31,0,0,1-1.17-3.05A3.35,3.35,0,0,1,31,72.49a7.5,7.5,0,0,1,3.48.4c.07,0,.18.1.18.16.07.73.12,1.46.18,2.22-.41-.13-.82-.24-1.24-.33a10.85,10.85,0,0,0-1.4-.1.67.67,0,0,0-.38.13.33.33,0,0,0-.15.44.34.34,0,0,0,.21.18,4.69,4.69,0,0,0,.76.19,4.28,4.28,0,0,1,2.34,1.12,5.8,5.8,0,0,1,.56.89,1.36,1.36,0,0,0-.06.29c0,.27,0,.54,0,.82s0,.44,0,.66Zm51.72-6.71c.44.07.46.09.48.51l.1,1.93-.29-.09a5.63,5.63,0,0,0-2.11-.38,1.09,1.09,0,0,0-.47.08.63.63,0,0,0-.29.37c0,.1.15.29.27.34a3.4,3.4,0,0,0,.7.17,4.92,4.92,0,0,1,2,.82A2.42,2.42,0,0,1,88.18,80l-.07.1A3.18,3.18,0,0,1,86,81.4a8.28,8.28,0,0,1-4.33-.26.34.34,0,0,1-.12-.06.63.63,0,0,1-.27-.61c0-.53,0-1.06,0-1.6a.67.67,0,0,1,.05-.19h.49a6.85,6.85,0,0,0,2.42.38,1.61,1.61,0,0,0,.65-.17.39.39,0,0,0,.24-.49.39.39,0,0,0-.2-.22,3.83,3.83,0,0,0-.81-.33c-.46-.14-.94-.21-1.38-.39a2.37,2.37,0,0,1-1.36-3,2.62,2.62,0,0,1,.41-.68,4.81,4.81,0,0,1,.51-.5l.77-.15s.06-.07.09-.09a1.06,1.06,0,0,1,.36-.26,5.14,5.14,0,0,1,1.1-.17,8.84,8.84,0,0,1,1.14.13l1.3.23s.08,0,.12-.08ZM54,73.31a3.45,3.45,0,0,1,1.77-.9,1.81,1.81,0,0,1,1.4.19.66.66,0,0,1,.25.4c0,.8,0,1.6,0,2.4a1,1,0,0,1,0,.17l-.4-.21a2.09,2.09,0,0,0-2.78.68,1.32,1.32,0,0,0-.21.67c0,1.46,0,2.92,0,4.39,0,.4,0,.4-.4.4-.78,0-1.57,0-2.36,0-.26,0-.33-.09-.33-.34q0-4.16,0-8.33c0-.29.11-.35.36-.34q1.18,0,2.37,0c.28,0,.4.09.37.37,0,.12,0,.24,0,.46Zm-26.25-2.2a1.81,1.81,0,0,1-2.27,1.18,1.93,1.93,0,0,1-.8-.51,1.87,1.87,0,0,1-.07-2.34,1.83,1.83,0,0,1,2.27-.4,1.46,1.46,0,0,0,.32.42,1.11,1.11,0,0,1,.5,1c0,.23,0,.45.05.67Zm-.07,1.59a.31.31,0,0,1,0,.1v8.55h-.2a3,3,0,0,0,.07-.5v-8H24.38l.06-.13Zm-7.6,8.78v-7h.07s.07.1.07.14-.06.29-.06.43q0,3,0,5.94c0,.38,0,.39.43.39.8,0,1.6,0,2.4,0,.24,0,.32-.08.32-.31,0-1,0-2.06,0-3.09,0-.88,0-1.76,0-2.64a.81.81,0,0,1,.12-.29v2.89c0,.11,0,.22-.05.34,0,.83,0,1.66,0,2.5s0,.73-.7.74-1.74,0-2.61,0Zm67.09-8.64c-.05,0-.09.09-.13.08-.43-.07-.86-.16-1.3-.22a6.12,6.12,0,0,0-1.14-.13,5.84,5.84,0,0,0-1.1.16c-.13,0-.24.17-.36.26s-.05.09-.09.1l-.77.14a3,3,0,0,1,1.56-.72,6.86,6.86,0,0,1,3.33.33Zm-62.7-.13-.06.13v8a2.2,2.2,0,0,0,.13.55l-.2-.07c0-1.82,0-3.65,0-5.47,0-1,0-2.07,0-3.11h.12Zm70.31,3.57s.1.08.1.13c0,1.49,0,3,0,4.48,0,.48,0,.53.52.53H97a2.57,2.57,0,0,1,.4.06H95.07c-.27,0-.32-.11-.32-.34,0-1.63,0-3.25,0-4.87Zm-80,5.21V74.6a1.14,1.14,0,0,1,.07-.32V81.1a2.66,2.66,0,0,1-.07.39Zm65.65-.15a2.66,2.66,0,0,0,.12-.56c0-1.79,0-3.58,0-5.37a3.32,3.32,0,0,1,.06-.44c0,1.14,0,2.27,0,3.4V81c0,.14.06.33-.2.3ZM44.57,77.43a3.78,3.78,0,0,1,.47-.06c1.49,0,3,0,4.48,0,.11,0,.23,0,.34,0s.36-.08.35-.34a1.75,1.75,0,0,1,0-.4v.81H44.57Zm47.25,4a.53.53,0,0,0,.27-.54c0-1.46,0-2.92,0-4.38,0-.1,0-.2,0-.3h0s0,0,0,0v5.19ZM31.93,78.92c-.09.08-.18.2-.27.21A6.6,6.6,0,0,1,29,78.86a.1.1,0,0,1,0,0l.06,0c.64.1,1.28.22,1.92.27A3.75,3.75,0,0,0,31.93,78.92Zm60.22-5.68a2.25,2.25,0,0,1-.06-.36c0-1.28,0-2.56,0-3.84a.48.48,0,0,1,.06-.18c0,1.46,0,2.92,0,4.38ZM27.73,71.11c0-.22,0-.45-.05-.67a1.16,1.16,0,0,0-.5-1,1.7,1.7,0,0,1-.33-.42,1.66,1.66,0,0,1,.88,2.07Zm11.84,1.51a1.4,1.4,0,0,1-.08-.34c0-1,0-1.92,0-2.87a1.55,1.55,0,0,0-.13-.48c.23-.13.22,0,.22.18v3.51Zm31.48-.4a1,1,0,0,0,.15-.34c0-.68,0-1.35,0-2a1.46,1.46,0,0,0-.2-.44s0-.11,0-.17c.3.08.35.28.34.57,0,.84,0,1.68,0,2.6l-.23-.2Zm10.72,6.47h-.49a.58.58,0,0,0,0,.19c0,.53,0,1.07,0,1.6a.62.62,0,0,0,.27.61c-.26,0-.37-.15-.36-.43,0-.71,0-1.41,0-2.17l.61.2ZM36.39,75.3a1.53,1.53,0,0,1,.07.36c0,1,0,1.91,0,2.86a1.53,1.53,0,0,1-.07.36V75.3Zm-12.07,6,.2.07h3.15a1,1,0,0,1-.28.07c-.93,0-1.86,0-2.78,0-.1,0-.19-.09-.29-.13Zm.12-8.57h-.11a.87.87,0,0,1,.22,0q1.44,0,2.88,0a.64.64,0,0,1,.23,0Zm46.83,8a1.4,1.4,0,0,1-.06-.28c0-.67,0-1.35,0-2A1.18,1.18,0,0,0,71,78l.26-.16v2.89ZM35.42,79.55c0-.22,0-.44,0-.66s0-.55,0-.82a1.5,1.5,0,0,1,.06-.29A2.82,2.82,0,0,1,35.42,79.55Zm1.37-9.27s0,.14-.07.14c-.24.07-.26.25-.26.46q0,.65,0,1.29a1.78,1.78,0,0,1-.07.39c0-.62,0-1.25,0-1.87,0-.3.21-.34.41-.41ZM23.36,80.75c0-.83,0-1.66,0-2.5a1.88,1.88,0,0,1,.05-.33v2.5C23.4,80.53,23.38,80.64,23.36,80.75Zm26.76,0c0-.28,0-.56-.06-.84s0-.83,0-1.24c0-.16,0-.3-.23-.32l.29-.14v2.54ZM77,72.5c-.31,0-.62.06-.93.06s-.7,0-1,0h2ZM45.6,81.68c0-.05,0-.14,0-.14q.75,0,1.5.12a.09.09,0,0,1,.06,0Zm15.11-7.4V76c0-.56,0-1.13,0-1.7ZM27.47,81.34H24.52a2,2,0,0,1-.13-.55q0-4,0-8h3.15v8a2.87,2.87,0,0,1-.07.5Z" transform="translate(-3.19 -24.76)"></path></svg>',
                ],
            ];
        foreach ($extras as $extra) {
            Extra::create($extra);
        }
    }
}
