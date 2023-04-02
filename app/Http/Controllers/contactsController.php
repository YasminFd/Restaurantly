<?php

namespace App\Http\Controllers;

use App\Models\branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Mail;


class contactsController extends Controller
{
    //
    function display(){
        $data = DB::table('branches')->get();
        return view('contact',['contact'=>$data]);
    }
    
}
