<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "membre",
                'email' => "membre@gmail.com",
                'password' => "membre@gmail.com",
                'function' => "Membre", 
            ],
            [
                'name' => "rédacteur",
                'email' => "rédacteur@gmail.com",
                'password' => "rédacteur@gmail.com",
                'function' => "Rédacteur",

            ],
            [
                'name' => "webmaster",
                'email' => "webmaster@gmail.com",
                'password' => "webmaster@gmail.com",
                'function' => "Webmaster",

            ],
            [
                'name' => "admin",
                'email' => "admin@gmail.com",
                'password' => "admin@gmail.com",
                'function' => "Admin",

            ],
        ]);
    }
}
