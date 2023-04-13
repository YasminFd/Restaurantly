<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Ordered_item;
use App\Models\User;
use App\Notifications\TestingNotification;

class OrdersController extends Controller
{
    /**
     * Display a listing of the orders.
     */
    public function index()
    {
        $orders=order::orderBy('created_at', 'desc')->get();
        return view('admin.orders.index',['data'=>$orders]);
    }

    /**
     * Display the specified order information.
     */
    public function show(string $id)
    {
        $total=order::find($id)->total;
        $data=ordered_item::where('order_id',$id)->get();
        return view('admin.orders.show',['data'=>$data,'total'=>$total]);
    }

    /**
     * Show the form for editing the specified order.
     */
    public function edit(string $id)
    {
        $data=order::find($id);
        return view('admin.orders.edit',['data'=>$data]);
    }

    /**
     * Update the specified order in storage.
     */
    public function update(Request $req, string $id)
    {
        // Change status to order
        $data=order::find($id);
        $data->status=$req->status;
        $data->save();

        // Send notification to user
        $user=user::find($data->user_id);
        $user->notify(new TestingNotification('Status :'.$data->status,'your order status has changed'));
    
        return $this->index();
    }

    /**
     * Remove the specified order from storage.
     */
    public function destroy(string $id)
    {
        // Delete all the ordered_items from the ordered_items table
        $data=order::find($id);
        $info=Ordered_item::where('order_id',$id)->get();
        foreach($info as $x)
        {
            $x->delete();
        }
        
        // Delete the order
        $data->delete();
        
        return $this->index()->with('danger','order deleted succesfully!');
    }
}
