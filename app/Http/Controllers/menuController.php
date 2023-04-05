<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Meal;
use App\Models\Cart;
use App\Models\category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class menuController extends Controller
{
    public function menuItemsForCategory()
    {
        $categories = DB::table('categories')
            ->select('*')
            ->get();

        $info = array();
        foreach ($categories as $category) {
            $menuItems = DB::table('categories')
                ->join('meals', 'categories.id', '=', 'meals.category_id')
                ->where('categories.name', $category->name)
                ->orderBy('meals.name', 'asc')
                ->select('meals.id', 'meals.name', 'meals.description', 'meals.image', 'meals.price')
                ->get();
            $info[$category->name] = $menuItems;
        }

        return view('menu.index', ['data' => $info]);
    }
    public function viewMeal(string $id){
        if(($user = auth()->id()))
        {
            $data=Meal::findOrFail($id);
            $quantity=1;
            return view('cart.update',['data'=>$data,'quantity'=>$quantity]);
        }
        else{
            return redirect('/login');
        }
    }
}
