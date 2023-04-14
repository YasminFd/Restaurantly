<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            MenuItemSeeder::class,
            TestimonySeeder::class,
            BranchesTableSeeder::class,
            TablesSeeder::class,
            ReservationsSeeder::class,
            ReviewsSeeder::class,
            ordersSeeder::class,
            order_itemsSeeder::class
        ]);
    }
}
