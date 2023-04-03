<?php

namespace Database\Seeders;

use App\Models\menu_item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

    class MenuItemSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            DB::table('menu_items')->insert([[
                
                    'name' => 'Lobster Bisque',
                    'category_id' => '4',
                    'description'=> 'Lorem, deren, trataro, filede, nerada',
                    'price' => '5.95',
                    'image' => '/images/menu/lobster-bisque.jpg',
                    'updated_at' => now(),
                    'created_at' => now(),
            ], [
            
                'name' => 'Bread Barrel',
                'category_id' => '4',
                'description'=> 'Lorem, deren, trataro, filede, nerada',
                'price' => '6.95',
                'image' => '/images/menu/bread-barrel.jpg',
                'updated_at' => now(),
                'created_at' => now(),
            ],[
                
                'name' => 'Crab Cake',
                'category_id' => '4',
                'description'=> 'A delicate crab cake served on a toasted roll with lettuce and tartar sauce',
                'price' => '7.95',
                'image' => '/images/menu/cake.jpg',
                'updated_at' => now(),
                'created_at' => now(),
            ],[
                
                'name' => 'Caesar Selections',
                'category_id' => '3',
                'description'=> 'Lorem, deren, trataro, filede, nerada',
                'price' => '8.95',
                'image' => '/images/menu/caesar.jpg',
                'updated_at' => now(),
                'created_at' => now(),
            ], [
                
                'name' => 'Tuscan Grilled',
                'category_id' => '2',
                'description'=> 'Grilled chicken with provolone, artichoke hearts, and roasted red pesto',
                'price' => '9.95',
                'image' => '/images/menu/tuscan-grilled.jpg',
                'updated_at' => now(),
                'created_at' => now(),
            ], [
                
                'name' => 'Greek Salad',
                'category_id' => '3',
                'description'=> 'Fresh spinach, crisp romaine, tomatoes, and Greek olives',
                'price' => '9.95',
                'image' => '/images/menu/greek-salad.jpg',
                'updated_at' => now(),
                'created_at' => now(),
            ], [
                
                'name' => 'Lobster Roll',
                'category_id' => '2',
                'description'=> 'Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll',
                'price' => '12.95',
                'image' => '/images/menu/lobster-roll.jpg',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                
                'name' => 'Spinach Salad',
                'category_id' => '3',
                'description'=> 'Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette',
                'price' => '9.95',
                'image' => '/images/menu/lobster-roll.jpg',
                'updated_at' => now(),
                'created_at' => now(),
            ],[
                
                'name' => 'Crab Salad Rice Bowl',
                'category_id' => '1',
                'description'=> 'A bed of steamed rice topped with a generous serving of crab salad made with a mixture of crab meat, mayonnaise, herbs, and seasonings. The salad is then garnished with fresh vegetables such as sliced avocado, cucumber, and radish, and drizzled with a soy or sesame dressing for added flavo. The combination of tangy citrus flavors and sweet blueberries makes this salad a refreshing and delicious option for a light lunch or as a side dish. It is also a great source of vitamins, minerals, and antioxidants',
                'price' => '12',
                'image' => '/images/specials-1.png',
                'updated_at' => now(),
                'created_at' => now(),
            ],[
                    
                'name' => 'Citrus and Blueberry Salad',
                'category_id' => '1',
                'description'=> 'A bed of fresh greens such as baby spinach or arugula topped with slices of fresh oranges and lemons, a handful of fresh blueberries, and crumbled feta cheese. The salad is then drizzled with a citrus vinaigrette dressing made with a combination of lemon and orange juice, olive oil, honey, and Dijon mustard.',
                'price' => '8',
                'image' => '/images/specials-2.png',
                'updated_at' => now(),
                'created_at' => now(),
            ],[
                    
                'name' => 'Spaghetti with Tomato and Basil Sauce',
                'category_id' => '1',
                'description'=> 'A classic Italian dish consists of spaghetti noodles cooked until al dente and topped with a rich tomato sauce made with ripe tomatoes, garlic, onions, and fresh basil leaves. The sauce is typically seasoned with salt, black pepper, and a touch of sugar to balance out the acidity of the tomatoe. The dish is often finished with a sprinkle of grated Parmesan cheese and served with a side of garlic bread or a simple green salad.',
                'price' => '18',
                'image' => '/images/specials-3.png',
                'updated_at' => now(),
                'created_at' => now(),
            ],[
                    
                'name' => 'Mediterranean Hummus Plate',
                'category_id' => '1',
                'description'=> 'dish typically consists of a generous serving of creamy hummus made with chickpeas, tahini, lemon juice, and garlic, and then garnished with sliced tomatoes, cucumber, and a variety of greens such as parsley, mint, and cilantro. The hummus is often drizzled with a bit of olive oil and sprinkled with sumac or paprika for added flavor.This dish is commonly served with warm pita bread or crackers on the side for dippin.  It is a healthy and filling option that is popular in Mediterranean cuisine.',
                'price' => '10',
                'image' => '/images/specials-4.png',
                'updated_at' => now(),
                'created_at' => now(),
            ],
        ]);
            
        }
    }
    ?>