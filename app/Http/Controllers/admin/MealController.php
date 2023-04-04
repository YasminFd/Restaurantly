<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\menu_item;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\MealStoreRequest;
use App\Models\Meal;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function getCategory()
    {
        $categories = DB::table('categories')
            ->select('*')
            ->get();
        return $categories;
    }
    public function index()
    {
        $menus = Meal::all();
        return view('admin.meals.index', ['data2' => $menus]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->getCategory();
        return view('admin.meals.create', ['data' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MealStoreRequest $req)
    {
        //
        $path = 'images\menu'; // the path to the directory you want to store the file in
        $file = $req->image->getClientOriginalName();
        $req->image->move(public_path($path), $file); // get the original file name

        // store the file in the public/images directory

        $item = new Meal();
        $item->name = $req->name;
        $item->price = $req->price;
        $item->description = $req->description;
        $item->category_id = $req->category_id;
        $item->image = "/images/menu/" . $req->image->getClientOriginalName();
        $item->save();
        return redirect(route('admin-meals.index'))->with('success', 'Mean created successfully');
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
        $meal = Meal::findOrFail($id);
        $categories = $this->getCategory();
        return view('admin.meals.edit', ['data1' => $meal, 'data' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        //
        $meal = Meal::find($id);
        if ($req->hasFile('image')) {
            $path = public_path($meal->image);
            if (File::exists($path)) {
                File::delete($path);
            }
            $path = 'images\menu'; // the path to the directory you want to store the file in
            $file = $req->image->getClientOriginalName();
            $req->image->move(public_path($path), $file);
            $meal->image = "/images/menu/" . $req->image->getClientOriginalName();
        }
        $meal->name = $req->name;
        $meal->price = $req->price;
        $meal->description = $req->description;
        $meal->category_id = $req->category_id;
        $meal->save();
        return redirect(route('admin-meals.index'))->with('success', 'Meal updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $meal = Meal::findOrFail($id);
        $path = public_path($meal->image);
        if (File::exists($path)) {
            File::delete($path);
        }
        $meal->delete();
        return redirect(route('admin-meals.index'))->with('danger', 'Meal deleted successfully');
    }
}
