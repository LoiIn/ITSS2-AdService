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
                'title' => '靴の広告。',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => 'Nike Air Yeezy 1スニーカーの詳細はこちらでご覧いただけます。 ロゴはブラックプレミアムレザーにレーザーカットされました。 次は、Glow In TheDarkソールと一緒にシグネチャー水平ストラップです。 さらに、YEEZYのシグネチャーロゴが付いた赤いレースロックアイコンがあります。',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 1,
                'product_id' => 2,
                'title' => 'Tーシャツの広告。',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => 'とてもきれいです。',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 2,
                'product_id' => 3,
                'title' => '靴の広告。',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => 'Nike Air Yeezy 1スニーカーの詳細はこちらでご覧いただけます。 ロゴはブラックプレミアムレザーにレーザーカットされました。 次は、Glow In TheDarkソールと一緒にシグネチャー水平ストラップです。 さらに、YEEZYのシグネチャーロゴが付いた赤いレースロックアイコンがあります。',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 2,
                'product_id' => 4,
                'title' => 'Tーシャツの広告。',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => 'とてもきれいです。',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 1,
                'product_id' => 5,
                'title' => 'Jeanの広告。',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => 'ルーズジーンズは同サイズのTシャツとスニーカーのペアになります。当時、私はとても若くて活動的でした。最初のジーンズは母が買ってくれたのを覚えています。もう着ていませんが、大切にしています。久しぶりですが、私も含めてジーンズは今でも多くの人に選ばれています。',
                'image' =>  'product.jpg',
                'published_flag' => 1,
            ],
            [
                'store_id' => 1,
                'product_id' => 6,
                'title' => 'ポロシャツの広告。',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => 'とてもきれいです。',
                'image' =>  'product.jpg',
                'published_flag' => 0,
            ],
            [
                'store_id' => 2,
                'product_id' => 7,
                'title' => '靴の広告。',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => 'Nike Air Yeezy 1スニーカーの詳細はこちらでご覧いただけます。 ロゴはブラックプレミアムレザーにレーザーカットされました。 次は、Glow In TheDarkソールと一緒にシグネチャー水平ストラップです。 さらに、YEEZYのシグネチャーロゴが付いた赤いレースロックアイコンがあります。',
                'image' =>  'product.jpg',
                'published_flag' => 0,
            ],
            [
                'store_id' => 2,
                'product_id' => 8,
                'title' => 'Tーシャツの広告。',
                'started_date' => '2021-12-01',
                'ended_date' => '2021-12-20',
                'content' => 'とてもきれいです。',
                'image' =>  'product.jpg',
                'published_flag' => 0,
            ],
        ]);
    }
}
