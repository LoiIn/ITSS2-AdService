<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdvertisementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('advertisements')->insert([
            [
                'store_id' => 1,
                'product_id' => 1,
                'title' => 'Adidas靴',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => '内容のデモ',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 1,
                'product_id' => 2,
                'title' => 'AdidasTーシャツ',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => '内容のデモ',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 2,
                'product_id' => 3,
                'title' => 'Nike靴',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => '内容のデモ',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 2,
                'product_id' => 4,
                'title' => 'NikeTーシャツ',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => '内容のデモ',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 1,
                'product_id' => 5,
                'title' => 'NikeのJean',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => '内容のデモ',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 1,
                'product_id' => 6,
                'title' => 'Nikeのポロシャツ',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => '内容のデモ',
                'image' =>  'product.jpg',
                'published_flag' => 0,
            ],
            [
                'store_id' => 2,
                'product_id' => 7,
                'title' => 'Uniqlo靴',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => '内容のデモ',
                'image' =>  'product.jpg',
                'published_flag' => 0,
            ],
            [
                'store_id' => 2,
                'product_id' => 8,
                'title' => 'UniqloTーシャツ',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => '内容のデモ',
                'image' =>  'product.jpg',
                'published_flag' => 0,
            ],
        ]);
    }
}
