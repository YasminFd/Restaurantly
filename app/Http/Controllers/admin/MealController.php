<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\MealStoreRequest;
use App\Models\Meal;

class MealController extends Controller
{

    // Get all the categories
    public function getCategory()
    {
        $categories = DB::table('categories')
            ->select('*')
            ->get();
        return $categories;
    }

    /**
     * Display a listing of the meals.
     *
     */
    public function index()
    {
        $menus = Meal::all();
        return view('admin.meals.index', ['data2' => $menus]);
    }

    /**
     * Show the form for creating a new meal.
     */
    public function create()
    {
        $categories = $this->getCategory();
        return view('admin.meals.create', ['data' => $categories]);
    }

    /**
     * Store a newly created meal in storage.
     */
    public function store(MealStoreRequest $req)
    {
        // the path to the directory you want to store the file in
        $path = 'images\menu';
        $file = $req->image->getClientOriginalName();
        $req->image->move(public_path($path), $file); // get the original file name

        // Create new meal and store it
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
     * Show the form for editing the specified meal.
     */
    public function edit(string $id)
    {
        $meal = Meal::findOrFail($id);
        $categories = $this->getCategory();
        return view('admin.meals.edit', ['data1' => $meal, 'data' => $categories]);
    }

    /**
     * Update the specified meal in storage.
     */
    public function update(Request $req, string $id)
    {
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
     * Remove the specified meal from storage.
     */
    public function destroy(string $id)
    {
        $meal = Meal::findOrFail($id);
        $path = public_path($meal->image);
        if (File::exists($path)) {
            File::delete($path);
        }
        $meal->delete();
        return redirect(route('admin-meals.index'))->with('danger', 'Meal deleted successfully');
    }
}
