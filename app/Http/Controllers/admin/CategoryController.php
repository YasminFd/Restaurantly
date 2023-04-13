<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;


class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        $categories = DB::table('categories')
            ->select('*')
            ->get();
        return view('admin.categories.index',['data'=> $categories]);
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(CategoryStoreRequest $req)
    {
        //
        $category=new category();
        $category->name=$req->name;
        $category->save();
        return redirect(route('admin-categories.index'))->with('success','Menu created successfully');
    }

    /**
     * Show the form for editing the specified category.
     */
    public function edit(string $id)
    {
        $menu = category::findOrFail($id);
        return view('admin.categories.edit',['data'=>$menu]);
    }

    /**
     * Update the specified category in storage.
     */
    public function update(Request $req, string $id)
    {
        $menu=category::find($id);
        $menu->name=$req->name;
        $menu->save();
        return redirect(route('admin-categories.index'))->with('success','Menu updated successfully');
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy(string $id)
    {
        $category = category::findOrFail($id);
        $category->detachAll();
        $category->delete();
        return redirect(route('admin-categories.index'))->with('danger', 'Menu deleted successfully');
    }
}
