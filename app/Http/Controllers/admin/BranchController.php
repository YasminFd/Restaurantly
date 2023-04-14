<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\orderController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\branch;
use App\Models\Order;
use App\Models\Reservation;
use App\Models\Table;

class BranchController extends Controller
{
    /**
     * Display a listing of the branches.
     */
    public function index()
    {
        $branches=branch::all();
        return view('admin.branches.index',['data'=>$branches]);
    }

    /**
     * Show the form for creating a new branch.
     */
    public function create()
    {
        return view('admin.branches.create');
    }

    /**
     * Store a newly created branch in storage.
     */
    public function store(Request $req)
    {
        $branch=new branch();
        $branch->name=$req->name;
        $branch->phone_number=$req->phone_number;
        $branch->location=$req->location;
        $branch->url_address=$req->url_address;
        $branch->save();
        return redirect(route('admin-branches.index'));
    }

    /**
     * Show the form for editing the specified branch.
     */
    public function edit(string $id)
    {
        $menu = branch::findOrFail($id);
        return view('admin.branches.edit',['data'=>$menu]);
    }

    /**
     * Update the specified branch in storage.
     */
    public function update(Request $req, string $id)
    {
        $branch=branch::find($id);
        $branch->name=$req->name;
        $branch->phone_number=$req->phone_number;
        $branch->location=$req->location;
        $branch->url_address=$req->url_address;
        $branch->save();
        return redirect(route('admin-branches.index'))->with('success', 'Branch updated successfully');
    }

    /**
     * Remove the specified branch from storage.
     */
    public function destroy(string $id)
    {
        $branch = branch::findOrFail($id);
        $data= new ordersController();
        $data2= new ReservationController();
        $data3= new TableController();
        $info2=Reservation::where('branch_id',$branch->id)->get();
        $info = Order::where('branch_id',$branch->id)->get();
        $info3 = Table::where('branch_id',$branch->id)->get();
        foreach($info as $x){
            $data->destroy($x->id);

        }
        foreach($info2 as $x){
            $data2->destroy($x->id);
            
        }
        foreach($info3 as $x){
            $data3->destroy($x->id);
            
        }
        
        $branch->delete();
        return redirect(route('admin-branches.index'))->with('success', 'Branch deleted successfully');
    }
}
