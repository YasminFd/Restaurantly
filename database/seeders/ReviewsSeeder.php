<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('reviews')->insert([
            [
                'name' => 'Jana',
                'rating' => 5,
                'comment' => 'one of my favorites!',
                'meal_id' => 3,
                'created_at'=>now()
            ],
            [
                'name' => 'Sara',
                'rating' => 5,
                'comment' => 'one of my favorites!',
                'meal_id' => 1,
                'created_at'=>now()
            ],
            [
                'name' => 'Jessica',
                'rating' => 5,
                'comment' => 'one of my favorites!',
                'meal_id' => 7,
                'created_at'=>now()
            ],
            [
                'name' => 'Elon Musk',
                'rating' => 5,
                'comment' => 'one of my favorites!',
                'meal_id' => 5,
                'created_at'=>now()
            ],
            [
                'name' => 'Bill Gates',
                'rating' => 4,
                'comment' => 'Spectacular!',
                'meal_id' => 5,
                'created_at'=>now()
            ],
        ]);
    }
}
