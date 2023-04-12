<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
USE APP\Models\Notification;


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
    public function mark($id)
    {
        $user = Auth::user();

        // retrieve the notifications for the user
        $notifications = $user->notifications;

        // find the notification you want to delete
        $notificationToDelete = $notifications->find($id);

        // delete the notification from the database
        $notificationToDelete->delete();
        return $this->display();
    }
}
