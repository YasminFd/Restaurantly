<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Models\Ordered_item;
use App\Models\order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=User::all();
        return view('admin.users.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        //
        $user = new user();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->user_type=1;
        $user->created_at= now();
        $user->updated_at = now();
        $user->save();
        return redirect(route('admin-users.index'))->with('success','employee created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $orders=order::where('user_id',$id)->get();
        return view('admin.users.show',['data'=>$orders]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=order::where('user_id',$id)->get();
        foreach($data as $order){
            $info=Ordered_item::where('order_id',$order->id)->get();
            foreach($info as $x)
            {
                $x->delete();
            }
            $order->delete();
        }
        
        $user = User::findOrFail($id);
        $user->delete();
        return redirect(route('admin-users.index'))->with('danger', 'Employee deleted successfully');
    }
}
