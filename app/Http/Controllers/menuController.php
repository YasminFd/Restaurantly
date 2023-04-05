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

        return view('menu.menu', ['data' => $info]);
    }
    public function viewMeal(string $id){
        if(($user = auth()->id()))
        {
            $data=Meal::findOrFail($id);
            $quantity=1;
            return view('menu.view',['data'=>$data,'user'=>$user,'quantity'=>$quantity]);
        }
        else{
            return redirect('/login');
        }
    }

    
    public function addCart(Request $req, string $id){
        if(($user = auth()->id()))
        {
            if(!($cart = Cart::where('user_id', $user)->where('meal_id', $id)->first())){
                $cart=new Cart();
            }
            $food=$id;
            $quantity=$req->quantity;
            $cart->user_id=$user;
            $cart->meal_id=$food;
            $cart->quantity=$quantity;
            $cart->save();
            return $this->menuItemsForCategory();
        }
        else{
            return redirect('/login');
        }
    }

    public function viewCart(string $id){
        if(($user = auth()->id()))
        {
            $count=cart::where('user_id',$id)->count();
            $data=cart::where('user_id',$id)
                        ->join('meals','carts.meal_id','=','meals.id')
                        ->select('meals.name','meals.id','meals.price','carts.user_id','carts.quantity','carts.id')
                        ->get();
            return view('menu.cart',['count'=>$count,'data'=>$data]);
        }
        else{
            return redirect('/login');
        }
    }

    public function removeCart(string $id){
        $data = cart::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function editCart(string $id){
        $data=Cart::findOrFail($id);
        $user=$data->user_id;
        $quantity=$data->quantity;
        return view('menu.view',['data'=>$data,'user'=>$user,'quantity'=>$quantity]);
        
    }
}
