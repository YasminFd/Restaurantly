<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Meal;
use App\Models\Review;
use App\Models\Cart;
use App\Models\category as cat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class menuController extends Controller
{
    public function menuItemsForCategory()
    {
        $categories = cat::all();

        $info = array();
        foreach ($categories as $category) {
            $info[$category->name] = $category->meals;
        }

        
        return view('menu.index', ['data' => $info]);
    }
    public function viewMeal(string $id){

        $meal=Meal::findOrFail($id);
        $info=Review::where('meal_id',$id)->get();
        $average = $meal->reviews->avg('rating');
        $quantity=1;
        return view('menu.show',['data'=>$meal,'quantity'=>$quantity,'info'=>$info,'average'=>$average]);
        
    }
}
