<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ServicesCreateSeeder::class,
            BanniereSeeder::class,
            TeamSeeder::class,
            NavbarSeeder::class,
            TemoignageSeeder::class,
            UserSeeder::class,
            LogoSeeder::class,
            HomeModifSeeder::class,
            ServicesSeeder::class,
            ContactFormSeeder::class,
            BlogSeeder::class,
        ]);
    }
}
