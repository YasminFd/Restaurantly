<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create(
            [
                'name' => 'offer',
                'created_at' => now(),
            ]
        );
        category::create(
            [
                'name' => 'starters',
                'created_at' => now(),
            ]
        );
        category::create(
            [
                'name' => 'speciality',
                'created_at' => now(),
            ]
        );
        category::create(
            [
                'name' => 'salads',
                'created_at' => now(),
            ]
        );
    }
}
