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
                'title' => '靴の広告のデモです。',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => '内容のデモ',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 1,
                'product_id' => 2,
                'title' => 'Tーシャツの広告のデモです。',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => '内容のデモ',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 2,
                'product_id' => 3,
                'title' => '靴の広告のデモです。',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => '内容のデモ',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 2,
                'product_id' => 4,
                'title' => 'Tーシャツの広告のデモです。',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => '内容のデモ',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 1,
                'product_id' => 5,
                'title' => 'Jeanの広告のデモです。',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => '内容のデモ',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 1,
                'product_id' => 6,
                'title' => 'ポロシャツの広告のデモです。',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => '内容のデモ',
                'image' =>  'product.jpg',
                'published_flag' => 0,
            ],
            [
                'store_id' => 2,
                'product_id' => 7,
                'title' => '靴の広告のデモです。',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => '内容のデモ',
                'image' =>  'product.jpg',
                'published_flag' => 0,
            ],
            [
                'store_id' => 2,
                'product_id' => 8,
                'title' => 'Tーシャツの広告のデモです。',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => '内容のデモ',
                'image' =>  'product.jpg',
                'published_flag' => 0,
            ],
        ]);
    }
}
