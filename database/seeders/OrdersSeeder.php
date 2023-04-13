<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'user_id' => 3,
                'branch_id' => 1,
                'phone_number' => '76849449',
                'created_at' => now(),
                'status' => 'ongoing',
                'address' => 'Berut Hadath',
                'name' => 'Bill Gates',
                'total' => '39.7'
            ], [
                'user_id' => 2,
                'branch_id' => 2,
                'phone_number' => '71320757',
                'created_at' => now(),
                'status' => 'cancelled',
                'address' => 'Wall street',
                'name' => 'Tommas Edison',
                'total' => '72.65'
            ], [
                'user_id' => 2,
                'branch_id' => 1,
                'phone_number' => '76069071',
                'created_at' => now(),
                'status' => 'delivered',
                'address' => 'LU faculty of sciences',
                'name' => 'Newton',
                'total' => '79.5'
            ]
        ]);
    }
}
