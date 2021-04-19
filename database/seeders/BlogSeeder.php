<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'src' => "img/blog/blog-1.jpg",
                'day' => "03",
                'month_and_year' => "Nov 2017",
                'titre' => "JUST A SIMPLE BLOG POST",
                'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam.",
                'user_id' => 2,
            ],
            [
                'src' => "img/blog/blog-2.jpg",
                'day' => "03",
                'month_and_year' => "Nov 2017",
                'titre' => "JUST A SIMPLE BLOG POST",
                'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam.",
                'user_id' => 2,
            ],
            [
                'src' => "img/blog/blog-3.jpg",
                'day' => "03",
                'month_and_year' => "Nov 2017",
                'titre' => "JUST A SIMPLE BLOG POST",
                'texte' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam.",
                'user_id' => 2,
            ],
        ]);
    }
}
