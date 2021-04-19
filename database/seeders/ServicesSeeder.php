<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'balise' => 'servicesServices-primésTitre',
                'vert' => 'oui',
                'texte' => 'GET IN THE LAB AND DISCOVER THE WORLD',
            ],
            [
                'balise' => 'servicesServices-primésBoutton',
                'vert' => 'non',
                'texte' => 'BROWSE',
            ],
        ]);
    }
}
