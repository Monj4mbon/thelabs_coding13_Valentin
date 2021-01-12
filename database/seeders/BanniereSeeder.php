<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanniereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bannieres')->insert([
            [
                'src' => 'img/01.jpg'
            ],
            [
                'src' => 'img/02.jpg'
            ],
        ]);
    }
}
