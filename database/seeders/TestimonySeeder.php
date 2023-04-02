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
            'testimony' => 'Some things that Saul said',
            'image' => '/images/testimonials/testimonials-1.jpg',
            'job' => 'CEO & Founder'
        ],
        [
            'name' => 'Sara Wilsson',
            'testimony' => 'Some things that Sara said',
            'image' => '/images/testimonials/testimonials-2.jpg',
            'job' => 'Designer'
        ],
        [
            'name' => 'Jena Karlis',
            'testimony' => 'Some things that Jena said',
            'image' => '/images/testimonials/testimonials-3.jpg',
            'job' => 'Store Owner'
        ],
        [
            'name' => 'Matt Brandon',
            'testimony' => 'Some things that Matt said',
            'image' => '/images/testimonials/testimonials-4.jpg',
            'job' => 'Freelancer'
        ],
        [
            'name' => 'John Larson',
            'testimony' => 'Some things that John said',
            'image' => '/images/testimonials/testimonials-5.jpg',
            'job' => 'Entrepreneur'
        ]
        ]);
    }
}
