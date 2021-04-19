<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeModifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_modifs')->insert([
            [
                'balise' => 'Home : presentation, titre',
                'vert' => 'oui',
                'texte' => 'Get in the Lab and discover the world',
            ],
            [
                'balise' => 'Home : presentation, boutton',
                'vert' => 'non',
                'texte' => 'Browse',
            ],
            [
                'balise' => 'Home : presentation, texte1',
                'vert' => 'non',
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue.',
            ],
            [
                'balise' => 'Home : presentation, texte2',
                'vert' => 'non',
                'texte' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum.',
            ],
            [
                'balise' => 'Home : video',
                'vert' => 'non',
                'texte' => 'https://www.youtube.com/watch?v=JgHfx2v9zOU',
            ],
            [
                'balise' => 'Home : testimonial, titre',
                'vert' => 'non',
                'texte' => 'What our clients say',
            ],
            [
                'balise' => 'Home : team, titre',
                'vert' => 'oui',
                'texte' => 'Get in the Lab and  meet the team',
            ],
            [
                'balise' => 'Home : ready, titre',
                'vert' => 'non',
                'texte' => 'Are you ready to stand out?',
            ],
            [
                'balise' => 'Home : ready, sous-titre',
                'vert' => 'non',
                'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.',
            ],
            [
                'balise' => 'Home : ready, boutton',
                'vert' => 'non',
                'texte' => 'Browse',
            ],
        ]);
    }
}
