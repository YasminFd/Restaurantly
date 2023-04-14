<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class order_itemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ordered_items')->insert([
            [
                'order_id' => 1,
                'item_id' => 1,
                'quantity' => 3,
                'created_at' => now(),
                'updated_at' => now()

            ], [
                'order_id' => 1,
                'item_id' => 2,
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now()

            ], [
                'order_id' => 2,
                'item_id' => 3,
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now()

            ], [
                'order_id' => 2,
                'item_id' => 9,
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now()

            ], [
                'order_id' => 2,
                'item_id' => 2,
                'quantity' => 7,
                'created_at' => now(),
                'updated_at' => now()

            ], [
                'order_id' => 3,
                'item_id' => 1,
                'quantity' => 10,
                'created_at' => now(),
                'updated_at' => now()

            ],

        ]);
    }
}
