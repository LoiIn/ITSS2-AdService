<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->insert([
            [
                'email' => 'admin@gmail.com',
                'password' => \Hash::make('123456'),
                'name' => 'admin',
            ],
        ]);
    }
}
