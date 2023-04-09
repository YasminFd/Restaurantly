<?php

namespace App\Http\Controllers;

use App\Models\branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Mail\FromCustomer;

class contactsController extends Controller
{
    //
    function display(){
        $data = DB::table('branches')->get();
        return view('contact',['contact'=>$data]);
    }

    function sendInfo(Request $req){
        Mail::to($req->email)->send(new TestMail());
        Mail::to("restaurantly@gmail.com")->send(new FromCustomer($req));
        return redirect()->route('home.contact')->with('success', 'Email sent successfully!');
    }
}
