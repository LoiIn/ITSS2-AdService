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
                'store_id' => '1',
                'title' => 'Puma shoes',
                'image' =>  'https://www.shutterstock.com/vi/search/fake+shoes?image_type=photo'
            ],
            [
                'store_id' => '1',
                'title' => 'Puma T-shirt',
                'image' => 'https://www.shutterstock.com/vi/search/fake+shoes?image_type=photo'
            ],
            [
                'store_id' => '2',
                'title' => 'Nike shoes',
                'image' =>  'https://www.shutterstock.com/vi/search/fake+shoes?image_type=photo'
            ],
            [
                'store_id' => '2',
                'title' => 'Nike T-shirt',
                'image' => 'https://www.shutterstock.com/vi/search/fake+shoes?image_type=photo'
            ],
        ]);
    }
}
