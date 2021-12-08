<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([
            [
                'title' => 'shoes',
                'content' => 'shoes'
            ],
            [
                'title' => 'T-shirt',
                'content' => 'T-shirt'
            ],
            [
                'title' => 'Jeans',
                'content' => 'Jeans'
            ],
            [
                'title' => 'Polo',
                'content' => 'Polo'
            ],
        ]);
    }
}
