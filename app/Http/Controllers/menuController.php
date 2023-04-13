<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Review;
use App\Models\category as cat;

class menuController extends Controller
{
    // Create an associative array [category=> menu_items] and show the menu page
    public function menuItemsForCategory()
    {
        $categories = cat::all();
        $info = array();
        foreach ($categories as $category) {
            $info[$category->name] = $category->meals;
        }
        return view('menu.index', ['data' => $info]);
    }

    // View the information of a specified meal
    public function viewMeal(string $id)
    {
        $meal = Meal::findOrFail($id);
        $info = Review::where('meal_id', $id)->get();
        $average = $meal->reviews->avg('rating');
        $quantity = 1;
        return view('menu.show', ['data' => $meal, 'quantity' => $quantity, 'info' => $info, 'average' => $average]);
    }
}
