<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_forms')->insert([
            [
                'balise' => 'contact form title',
                'texte' => 'CONTACT US',
            ],
            [
                'balise' => 'contact form text',
                'texte' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
            ],
            [
                'balise' => 'contact form subtitle',
                'texte' => 'Main Office',
            ],
            [
                'balise' => 'contact form street',
                'texte' => 'C/ Libertad, 34',
            ],
            [
                'balise' => 'contact form city',
                'texte' => '05200 Arévalo',
            ],
            [
                'balise' => 'contact form phone',
                'texte' => '0034 37483 2445 322',
            ],
            [
                'balise' => 'contact form mail',
                'texte' => 'hello@company.com',
            ],
            [
                'balise' => 'contact form button',
                'texte' => ' SEND',
            ],
        ]);
    }
}
