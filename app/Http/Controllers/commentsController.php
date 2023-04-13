<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class commentsController extends Controller
{
    // Add a review to a specific item
    public function addReview(Request $req)
    {
        $data = new review();
        $data->name = $req->name;
        $data->rating = $req->rating;
        $data->comment = $req->comment;
        $data->meal_id = $req->meal_id;
        $data->save();
        return redirect()->route('home.menu.view', $req->meal_id)->with('success', 'review added successfully!');
    }
}
