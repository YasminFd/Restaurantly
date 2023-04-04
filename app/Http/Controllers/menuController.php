<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

use App\Models\menu_item;
use App\Models\category;
use Illuminate\Support\Facades\DB;
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
                ->join('menu_items', 'categories.id', '=', 'menu_items.category_id')
                ->where('categories.name', $category->name)
                ->orderBy('menu_items.name', 'asc')
                ->select('menu_items.id', 'menu_items.name', 'menu_items.description', 'menu_items.image', 'menu_items.price')
                ->get();
            $info[$category->name] = $menuItems;
        }

        return view('menu', ['data' => $info]);
    }
    public function editMenu(){
    }
}
