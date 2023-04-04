<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\branch;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches=branch::all();
        return view('admin.branches.index',['data'=>$branches]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.branches.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        //
        $branch=new branch();
        $branch->name=$req->name;
        $branch->phone_number=$req->phone_number;
        $branch->location=$req->location;
        $branch->url_address=$req->url_address;
        $branch->save();
        return redirect(route('admin-branches.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu = branch::findOrFail($id);
        return view('admin.branches.edit',['data'=>$menu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        //
        $branch=branch::find($id);
        $branch->name=$req->name;
        $branch->phone_number=$req->phone_number;
        $branch->location=$req->location;
        $branch->url_address=$req->url_address;
        $branch->save();
        return redirect(route('admin-branches.index'))->with('success', 'Branch updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $branch = branch::findOrFail($id);
        $branch->delete();
        return redirect(route('admin-branches.index'))->with('success', 'Branch deleted successfully');
    }
}
