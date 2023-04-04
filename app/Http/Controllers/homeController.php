<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class homeController extends Controller
{
    function display(){
        if (Auth::check()) {
        $userType= Auth:: User()->user_type;
        if($userType==1)
        {
            return view('admin.index');
        }}
        $testimonials = DB::table('testimonials')->get();
        return view('index',['testimonials'=>$testimonials]);
    }
    function redirects(){
        
    }
}
