<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('reports')->insert([
            [
                'ad_id' => 1,
                'site_id' => 1,
                'views' => 100,
                'clicks' => 10
            ],
            [
                'ad_id' => 2,
                'site_id' => 1,
                'views' => 200,
                'clicks' => 30
            ],
            [
                'ad_id' => 3,
                'site_id' => 2,
                'views' => 200,
                'clicks' => 50
            ],
            [
                'ad_id' => 4,
                'site_id' => 2,
                'views' => 10,
                'clicks' => 5,
            ],
            [
                'ad_id' => 5,
                'site_id' => 1,
                'views' => 10,
                'clicks' => 5,
            ],
        ]);
    }
}
