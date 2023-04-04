<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('orders')->insert([[
            'id'=>1,
            'user_id' => 2,
            'item_id'=>1,
            'quantity' =>2,
            'order_date'=>now(),
            'status'=>'ongoing',
        ],
    ]);

    }

}
