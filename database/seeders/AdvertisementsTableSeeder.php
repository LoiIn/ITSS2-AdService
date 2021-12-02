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
                'title' => 'this is demo of shoes advertisements',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => 'demo content',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 1,
                'product_id' => 2,
                'title' => 'this is demo of T shirts advertisements',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => 'demo content',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 2,
                'product_id' => 3,
                'title' => 'this is demo of shoes advertisements',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => 'demo content',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 2,
                'product_id' => 4,
                'title' => 'this is demo of T shirt advertisements',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => 'demo content',
                'image' =>  'product.jpg',
                'published_flag' => 0,
            ],
        ]);
    }
}
