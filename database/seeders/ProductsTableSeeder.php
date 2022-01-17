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
                'image' =>  'shoe.jpg',
                'info' => '日本からの輸入'
            ],
            [
                'store_id' => '1',
                'title' => 'Puma T-shirt',
                'image' => 'tshirt.jpg',
                'info' => '日本からの輸入'
            ],
            [
                'store_id' => '2',
                'title' => 'Nike shoes',
                'image' =>  'shoe.jpg',
                'info' => '日本からの輸入'
            ],
            [
                'store_id' => '2',
                'title' => 'Nike T-shirt',
                'image' => 'tshirt.jpg',
                'info' => '日本からの輸入'
            ],
            [
                'store_id' => '1',
                'title' => 'Adidas Jeans',
                'image' =>  'jean.jpg',
                'info' => '日本からの輸入'
            ],
            [
                'store_id' => '1',
                'title' => 'Adidas polo',
                'image' => 'polo.jpg',
                'info' => '日本からの輸入'
            ],
            [
                'store_id' => '2',
                'title' => 'Thuong Dinh shoes',
                'image' =>  'shoe.jpg',
                'info' => '日本からの輸入'
            ],
            [
                'store_id' => '2',
                'title' => 'Uniqlo T-shirt',
                'image' => 'tshirt.jpg',
                'info' => '日本からの輸入'
            ],
        ]);
    }
}
