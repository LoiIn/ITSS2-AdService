<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminsTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(AdvertisementsTableSeeder::class);
        $this->call(SitesTableSeeder::class);
        $this->call(ReportsTableSeeder::class);
        $this->call(ProductCategoryTableSeeder::class);
    }
}
