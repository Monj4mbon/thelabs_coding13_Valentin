<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesCreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_creates')->insert([
            [
                'services_icone' => 'flaticon-023-flask',
                'services_titre' => 'GET IN THE LAB',
                'services_texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'services_icone' => 'flaticon-011-compass',
                'services_titre' => 'PROJECTS ONLINE',
                'services_texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'services_icone' => 'flaticon-037-idea',
                'services_titre' => 'SMART MARKETING',
                'services_texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'services_icone' => 'flaticon-039-vector',
                'services_titre' => 'SOCIAL MEDIA',
                'services_texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'services_icone' => 'flaticon-036-brainstorming',
                'services_titre' => 'BRAINSTORMING',
                'services_texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'services_icone' => 'flaticon-026-search',
                'services_titre' => 'DOCUMENTED',
                'services_texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'services_icone' => 'flaticon-018-laptop-1',
                'services_titre' => 'RESPONSIVE',
                'services_texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'services_icone' => 'flaticon-043-sketch',
                'services_titre' => 'RETINA READY',
                'services_texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'services_icone' => 'flaticon-012-cube',
                'services_titre' => 'ULTRA MODERN',
                'services_texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
        ]);
    }
}
