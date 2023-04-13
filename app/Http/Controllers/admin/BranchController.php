<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\branch;

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
        $branch->delete();
        return redirect(route('admin-branches.index'))->with('success', 'Branch deleted successfully');
    }
}
