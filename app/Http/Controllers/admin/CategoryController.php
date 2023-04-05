<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use App\Models\Meal;
use App\Models\category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use App\Http\Requests\CategoryStoreRequest;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = DB::table('categories')
            ->select('*')
            ->get();
        return view('admin.categories.index',['data'=> $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
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
        return redirect(route('admin-categories.index'))->with('success','Menu created successfully');
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
        $menu = category::findOrFail($id);
        return view('admin.categories.edit',['data'=>$menu]);
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
        return redirect(route('admin-categories.index'))->with('success','Menu updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = category::findOrFail($id);
        /*
        $meals = Meal::where('category_id', $id)->get();
        foreach($meals as $meal) {
            $meal->delete();
        }
        */

        $category->detachAll();
        $category->delete();
        return redirect(route('admin-categories.index'))->with('danger', 'Menu deleted successfully');
    }
}
