<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            [
                'title' => 'Puma shoes',
                'image' =>  'https://www.shutterstock.com/vi/search/fake+shoes?image_type=photo'
            ],
            [
                'title' => 'Puma T-shirt',
                'image' => 'https://www.shutterstock.com/vi/search/fake+shoes?image_type=photo'
            ],
        ]);
    }
}
