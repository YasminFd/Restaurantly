<?php

namespace Database\Seeders;

use App\Enums\ReservationType;
use App\Models\Reservation;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $time = Carbon::now()->toDateTimeString();
        DB::table('reservations')->insert([
            [
                'first_name' => 'Tom',
                'last_name' => 'Flare',
                'email' => 'tom@gmail.com',
                'phone_number' => '1234',
                'res_date' => $time,
                'type' => ReservationType::Table,
                'table_id' => '1',
                'guest_number' =>  '9',
                'branch_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => 'Sara',
                'last_name' => 'Blake',
                'email' => 'sara@gmail.com',
                'phone_number' => '5678',
                'res_date' => $time,
                'type' => ReservationType::Table,
                'table_id' => '2',
                'guest_number' =>  '8',
                'branch_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => 'Jake',
                'last_name' => 'Sand',
                'email' => 'jake@gmail.com',
                'phone_number' => '91011',
                'res_date' => $time,
                'type' => ReservationType::Table,
                'table_id' => '3',
                'guest_number' =>  '5',
                'branch_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => 'John',
                'last_name' => 'Miller',
                'email' => 'john@gmail.com',
                'phone_number' => '102030',
                'res_date' => $time,
                'type' => ReservationType::Event,
                'table_id' => null,
                'guest_number' =>  '0',
                'branch_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
