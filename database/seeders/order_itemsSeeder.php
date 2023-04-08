<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class order_itemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ordered_items')->insert([[
            'order_id' => 1,
            'item_id'=>1,
            'quantity' =>3,
            'created_at'=>now()

        ],
    ]);
    }
}
