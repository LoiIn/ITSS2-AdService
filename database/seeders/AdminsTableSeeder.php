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
            [
                'email' => 'company1@gmail.com',
                'password' => \Hash::make('123456'),
                'name' => 'company1',
            ],
            [
                'email' => 'company2@gmail.com',
                'password' => \Hash::make('123456'),
                'name' => 'company2',
            ],
        ]);
    }
}
