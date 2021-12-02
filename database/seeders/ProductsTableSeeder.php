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
                'image' =>  'shoe.jpg'
            ],
            [
                'store_id' => '1',
                'title' => 'Puma T-shirt',
                'image' => 'tshirt.jpg'
            ],
            [
                'store_id' => '2',
                'title' => 'Nike shoes',
                'image' =>  'shoe.jpg'
            ],
            [
                'store_id' => '2',
                'title' => 'Nike T-shirt',
                'image' => 'tshirt.jpg'
            ],
        ]);
    }
}
