<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Meal;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Ordered_item;
use App\Models\Branch;
use App\Models\category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function addOrder(Request $req, string $id)
    {
        // Your code here
        $order = new order();
        $order->name=$req->name;
        $order->address=$req->address;
        $order->phone_number=$req->phone_number;
        $order->user_id=$id;
        $order->branch_id=$req->branch_id;
        $order->save();

    }
}