<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [

                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123123123A@'),
                'user_type' => '1',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [

                'name' => 'Jana Al Sabeh',
                'email' => 'jana@gmail.com',
                'password' => Hash::make('123123123A@'),
                'user_type' => '0',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [

                'name' => 'Yasmine Fadel',
                'email' => 'yasmine@gmail.com',
                'password' => Hash::make('123123123A@'),
                'user_type' => '0',
                'updated_at' => now(),
                'created_at' => now(),
            ]
        ]);
    }
}
