<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sites')->insert([
            [
                'url' => 'localhost:8080/sites/1',
                'name' => 'site1',
                'desc' => 'サイト説明',
            ],
            [
                'url' => 'localhost:8080/sites/2',
                'name' => 'site2',
                'desc' => 'サイト説明',
            ],
            [
                'url' => 'localhost:8080/sites/3',
                'name' => 'site3',
                'desc' => 'サイト説明',

            ],
            [
                'url' => 'localhost:8080/sites/4',
                'name' => 'site4',
                'desc' => 'サイト説明',

            ],
            [
                'url' => 'localhost:8080/sites/5',
                'name' => 'site5',
                'desc' => 'サイト説明',

            ],
            [
                'url' => 'localhost:8080/sites/6',
                'name' => 'site6',
                'desc' => 'サイト説明',

            ],
        ]);
    }
}
