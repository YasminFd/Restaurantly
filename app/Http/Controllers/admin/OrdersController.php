<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Order;
use App\Models\Ordered_item;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $orders=order::orderBy('created_at', 'desc')->get();
        return view('admin.orders.index',['data'=>$orders]);
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
        
        $total=order::find($id)->total;
        $data=ordered_item::where('order_id',$id)->get();
        return view('admin.orders.show',['data'=>$data,'total'=>$total]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data=order::find($id);
        return view('admin.orders.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        //
        $data=order::find($id);
        $data->status=$req->status;
        $data->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data=order::find($id);
        $info=Ordered_item::where('order_id',$id)->get();
        foreach($info as $x)
        {
            $x->delete();
        }
        $data->delete();
        return $this->index()->with('danger','order deleted succesfully!');
    }
}
