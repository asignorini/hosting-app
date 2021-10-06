<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category_id'   => 1,
                'category_name' => 'Tutoriales',
            ],
            [
                'category_id'   => 2,
                'category_name' => 'Servidores',
            ],
            [
                'category_id'   => 3,
                'category_name' => 'Informacion',
            ],
            [
                'category_id'   => 4,
                'category_name' => 'Tecnologia',
            ],
            [
                'category_id'   => 5,
                'category_name' => 'Hosting',
            ],
        ]);
    }
}
