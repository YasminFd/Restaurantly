<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\review;


class ReviewController extends Controller
{
    /**
     * Display a listing of the reviews.
     */
    public function index()
    {
        $reviews  = Review::orderBy('created_at', 'desc')->get();
        $info = array();
        return view('admin.reviews.index', ['data' => $reviews]);
    }

    /**
     * Remove the specified review from storage.
     */
    public function destroy(string $id)
    {
        $review = review::findOrFail($id);
        $review->delete();
        return redirect(route('admin-reviews.index'))->with('success', 'Review deleted successfully');
    }
}
