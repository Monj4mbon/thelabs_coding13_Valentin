<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            [
                'name' => 'Home',
                'view' => 'Home',
            ],
            [
                'name' => 'Services',
                'view' => 'Services',
            ],
            [
                'name' => 'Blog',
                'view' => 'Blog',
            ],
            [
                'name' => 'Contact',
                'view' => 'Contact',
            ],
        ]);
    }
}
