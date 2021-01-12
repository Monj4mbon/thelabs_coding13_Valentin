<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'nom' => "Smith",
                'prénom' => "Michael",
                'fonction' => "CEO Company",
                'photoSrc' => "img/avatar/01.jpg",
            ],
            [
                'nom' => "Smith",
                'prénom' => "Michael",
                'fonction' => "CEO Company",
                'photoSrc' => "img/avatar/02.jpg",
            ],
            [
                'nom' => "Williams",
                'prénom' => "Christinne",
                'fonction' => "Project Manager",
                'photoSrc' => "img/team/1.jpg",
            ],
            [
                'nom' => "Williams",
                'prénom' => "Christinne",
                'fonction' => "Junior developer",
                'photoSrc' => "img/team/2.jpg",
            ],
            [
                'nom' => "Williams",
                'prénom' => "Christinne",
                'fonction' => "Digital designer",
                'photoSrc' => "img/team/3.jpg",
            ],
        ]);
    }
}
