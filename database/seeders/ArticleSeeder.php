<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'article_id'            => 1,
            'article_title'         => 'Post de prueba',
            'article_description'   => 'Este es un post de prueba ejecutado a traves de un seeder',
            'article_text'          => 'Texto de relleno para el post de prueba',
            'user_id'               => '1',
            'category_id'           => '1',

        ]);
    }
}
