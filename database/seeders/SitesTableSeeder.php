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
                'name' => 'site1'
            ],
            [
                'url' => 'localhost:8080/sites/2',
                'name' => 'site2'
            ],
        ]);
    }
}
