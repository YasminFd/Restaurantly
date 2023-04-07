<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Models\Meal;
use App\Models\Review;
use App\Models\Cart;
use App\Models\category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class commentsController extends Controller
{
    //
    public function addReview(Request $req){
        $data=new review();
        $data->name=$req->name;
        $data->rating=$req->rating;
        $data->comment=$req->comment;
        $data->meal_id=$req->meal_id;
        $data->save();
        return redirect()->route('home.menu.view',$req->meal_id)->with('success','review added successfully!');
    }
}
