<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\category;
use Illuminate\Support\Facades\DB;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('branches')->insert([[
            'name' => 'Beirut',
            'url_address' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621',
            'location' => 'Hadath, Beirut Lebanon',
            'phone_number' => '+961 1 612 831',
            'capacity' => 200,
            'created_at' => now()
        ],[
            'name' => 'New York',
            'url_address' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621',
            'location' => 'A108 Adam Street, New York, NY 535022',
            'phone_number' => '+1 5589 55488 55',
            'capacity' => 150,
            'created_at' => now(),
        ],]);
    }
}
