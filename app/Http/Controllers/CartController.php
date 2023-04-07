<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Meal;
use App\Models\Cart;
use App\Models\Branch;
use App\Models\category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function clear(string $user)
    {
        //
        
        $items = Cart::where('user_id', $user)->get();

        foreach ($items as $item) {
            $item->delete();
        }
    
        return $this->show($user);

    }

    public function index(){
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $branch=branch::all();
        if(($user = auth()->id()))
        {
            $data=cart::where('user_id',$id)
                        ->join('meals','carts.meal_id','=','meals.id')
                        ->select('meals.name','meals.id','meals.price','carts.user_id','carts.quantity','carts.id')
                        ->get();
            return view('cart.show',['data'=>$data,'branch'=>$branch]);
        }
        else{
            return redirect('/login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $item=Cart::find($id);
        $data=Meal::find($item->meal_id);
        $user=$data->user_id;
        $quantity=$item->quantity;
        return view('menu.show',['data'=>$data,'quantity'=>$quantity]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        //
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
            return redirect()->route('home.menu');
        }
        else{
            return redirect('/login');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = cart::find($id);
        $data->delete();
        $user=auth()->id();
        return redirect()->route('cart.show',$user);
    }
}
