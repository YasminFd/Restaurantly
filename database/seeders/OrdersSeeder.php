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
            'user_id' => 2,
            'branch_id'=>1,
            'phone_number' =>'76849449',
            'created_at'=>now(),
            'status'=>'ongoing',
            'address'=>'some where',
            'name'=>'Tony Stark',
            'total'=>'20'
        ],
    ]);

    }

}
