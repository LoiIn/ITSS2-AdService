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
                'name' => 'Nganのブログ',
                'desc' => 'Nganさんのブログ、アクセス数は１００万人',
            ],
            [
                'url' => 'localhost:8080/sites/2',
                'name' => 'ABCニュースサイト',
                'desc' => 'ニュースサイト、アクセス数は１００万人',
            ],
            [
                'url' => 'localhost:8080/sites/3',
                'name' => 'DEFファッションのブログ',
                'desc' => 'ファッションについてサイト、アクセス数は２００万人',

            ],
            [
                'url' => 'localhost:8080/sites/4',
                'name' => 'ELKサイト',
                'desc' => 'ファッションについてサイト、アクセス数は４００万人',

            ],
            [
                'url' => 'localhost:8080/sites/5',
                'name' => 'Kenh14ニュースサイト',
                'desc' => '生活ニュース、アクセス数は１００００万人',

            ],
            [
                'url' => 'localhost:8080/sites/6',
                'name' => 'OOOファッション',
                'desc' => 'ファッションをレビューサイト,アクセス数は１００万人',

            ],
        ]);
    }
}
