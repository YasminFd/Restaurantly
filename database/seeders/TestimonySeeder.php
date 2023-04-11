<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([[
            'name' => 'Saul Goodman',
            'testimony' => 'Spectacular!',
            'image' => '/images/testimonials/testimonials-1.jpg',
            'job' => 'CEO & Founder'
        ],
        [
            'name' => 'Sara Wilsson',
            'testimony' => 'Amazing!',
            'image' => '/images/testimonials/testimonials-2.jpg',
            'job' => 'Designer'
        ],
        [
            'name' => 'Jena Karlis',
            'testimony' => 'Fancy and elegant.',
            'image' => '/images/testimonials/testimonials-3.jpg',
            'job' => 'Store Owner'
        ],
        [
            'name' => 'Matt Brandon',
            'testimony' => 'Great food, atmosphere, and service.',
            'image' => '/images/testimonials/testimonials-4.jpg',
            'job' => 'Freelancer'
        ],
        [
            'name' => 'John Larson',
            'testimony' => 'I would definitely go there again!',
            'image' => '/images/testimonials/testimonials-5.jpg',
            'job' => 'Entrepreneur'
        ]
        ]);
    }
}
