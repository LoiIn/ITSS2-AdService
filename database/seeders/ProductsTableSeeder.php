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
                'info' => 'Hang nhap khau chinh hang'
            ],
            [
                'store_id' => '1',
                'title' => 'Puma T-shirt',
                'image' => 'tshirt.jpg',
                'info' => 'Hang nhap khau chinh hang'
            ],
            [
                'store_id' => '2',
                'title' => 'Nike shoes',
                'image' =>  'shoe.jpg',
                'info' => 'Hang nhap khau chinh hang'
            ],
            [
                'store_id' => '2',
                'title' => 'Nike T-shirt',
                'image' => 'tshirt.jpg',
                'info' => 'Hang nhap khau chinh hang'
            ],
            [
                'store_id' => '1',
                'title' => 'Adidas Jeans',
                'image' =>  'jean.jpg',
                'info' => 'Hang nhap khau chinh hang'
            ],
            [
                'store_id' => '1',
                'title' => 'Adidas polo',
                'image' => 'polo.jpg',
                'info' => 'Hang nhap khau chinh hang'
            ],
            [
                'store_id' => '2',
                'title' => 'Thuong Dinh shoes',
                'image' =>  'shoe.jpg',
                'info' => 'Hang nhap khau chinh hang'
            ],
            [
                'store_id' => '2',
                'title' => 'Thuong Dinh T-shirt',
                'image' => 'tshirt.jpg',
                'info' => 'Hang nhap khau chinh hang'
            ],
        ]);
    }
}
