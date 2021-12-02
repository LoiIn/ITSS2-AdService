<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('stores')->insert([
            [
                'email' => 'store1@gmail.com',
                'password' => \Hash::make('123456'),
                'name' => 'store1',
                'address' => 'VietNam',
                'phone' => '0999999999',
                'logo' => 'logo.jpg',
                'is_accepted' => 1,
            ],
            [
                'email' => 'store2@gmail.com',
                'password' => \Hash::make('123456'),
                'name' => 'store2',
                'address' => 'VietNam',
                'phone' => '0999999999',
                'logo' => 'logo.jpg',
                'is_accepted' => 1,
            ],
            [
                'email' => 'sample3@gmail.com',
                'password' => \Hash::make('123456'),
                'name' => 'store3',
                'address' => 'VietNam',
                'phone' => '0999999999',
                'logo' => 'logo.jpg',
                'is_accepted' => 0,
            ],
            [
                'email' => 'test@gmail.com',
                'password' => \Hash::make('123456'),
                'name' => 'test',
                'address' => 'VietNam',
                'phone' => '0999999999',
                'logo' => 'logo.jpg',
                'is_accepted' => 0,
            ],
            [
                'email' => 'check@gmail.com',
                'password' => \Hash::make('123456'),
                'name' => 'check',
                'address' => 'VietNam',
                'phone' => '0999999999',
                'logo' => 'logo.jpg',
                'is_accepted' => 0,
            ]
        ]);
    }
}
