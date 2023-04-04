<?php

namespace Database\Seeders;

use App\Enums\TableLocation;
use App\Enums\TableStatus;
use App\Models\Table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tables')->insert([
            [
                'name' => 'Table 1',
                'guest_number' => '10',
                'status' => TableStatus::Pending,
                'location' => TableLocation::Inside,
                'branch_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Table 2',
                'guest_number' => '8',
                'status' => TableStatus::Available,
                'location' => TableLocation::Front,
                'branch_id' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Table 3',
                'guest_number' => '4',
                'status' => TableStatus::Unavailable,
                'location' => TableLocation::Outside,
                'branch_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Table 4',
                'guest_number' => '2',
                'status' => TableStatus::Available,
                'location' => TableLocation::Front,
                'branch_id' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
