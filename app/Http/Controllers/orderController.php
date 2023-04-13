<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Meal;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Ordered_item;
use App\Models\Branch;
use Illuminate\Support\Facades\Mail;
use App\Mail\receipt;
use Illuminate\Http\Request;
use App\Notifications\TestingNotification;

class orderController extends Controller
{
    // Create an Order when the user checks out
    public function addOrder(Request $req, $i, $total)
    {
        // Create a new order from the request
        $order = new Order();
        $order->name = $req->name;
        $order->status = 'ongoing';
        $order->address = $req->address;
        $order->phone_number = $req->phone_number;
        $order->user_id = $i;
        $order->total = $total;
        $order->branch_id = $req->branch_id;
        $order->save();

        $orderId = $order->id;
        $cart = Cart::where('user_id', $i)->get();

        $order_details = array();

        /*
        * For each cart item, create a enw ordered_item and add it to the ordered_items table
        * Delete the item from the cart
        */
        foreach ($cart as $item) {
            $order_item = new Ordered_item();
            $order_item->order_id = $orderId;
            $order_item->item_id = $item->meal_id;
            $order_item->quantity = $item->quantity;
            $order_item->save();
            $item->delete();

            $meal = Meal::find($item->meal_id);
            $meal_details['name'] = $meal->name;
            $meal_details['price'] = $meal->price;
            $meal_details['quantity'] = $order_item->quantity;

            $order_details[] = $meal_details;
        }

        // Mail the receipt to the user
        $user = user::find($i);
        $info[$req->name] = $order_details;
        $data = branch::find($req->branch_id);
        Mail::to($user->email)->send(new receipt($info, $total));

        // Add a notification to the admin that a new order was made
        $admin = User::where('user_type', 1)->get();
        foreach ($admin as $admin1) {
            if ($admin1) {
                $admin1->notify(new TestingNotification('Branch: ' . $data->name, 'new order has been made!'));
            }
        }

        // Add a notification ot the user that a new order was made
        $user->notify(new TestingNotification('Order: ', 'order made successfully!'));
        
        return redirect()->route('home.index')->with('success', 'Order Sent Successfully!');
    }
}
