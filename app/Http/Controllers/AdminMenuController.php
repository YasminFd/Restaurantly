<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use App\Models\menu_item;
use App\Models\category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use App\Http\Requests\CategoryStoreRequest;


class AdminMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.edits.addCategory');

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
    public function store(CategoryStoreRequest $req)
    {
        //
        $category=new category();
        $category->name=$req->name;
        $category->save();
        return redirect('/admin-menu')->with('success','Menu created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $menu = category::findOrFail($id);
        return view('admin.edits.editCategory',['data'=>$menu]);

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
    public function update(Request $req, string $id)
    {
        //
        $menu=category::find($id);
        $menu->name=$req->name;
        $menu->save();
        return redirect('/admin-menu')->with('success','Menu updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = category::findOrFail($id);
        $meals = menu_item::where('category_id', $id)->get();
        foreach($meals as $meal) {
            $meal->delete();
        }
        $menu->delete();
        return redirect('/admin-menu')->with('success', 'Menu deleted successfully');
    }
}
