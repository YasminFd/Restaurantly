<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class homeController extends Controller
{
    // Display the interface depending on the logged in user or not
    function display()
    {
        if (Auth::check()) {
            $userType = Auth::User()->user_type;
            if ($userType == 1) {
                return view('admin.index');
            }
        }
        $testimonials = DB::table('testimonials')->get();
        return view('index', ['testimonials' => $testimonials]);
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
        return redirect('/');
    }
}
