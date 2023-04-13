<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Notification as ModelsNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    //
    
    
    public function mark($id)
    {
        auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
        return redirect('/');
    }
    public function markNotification()
    {
        foreach(auth()->user()->unreadNotifications as $x)
        {
            $id = $x->id;
            auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
        }
        
        return redirect('/');
    }
    public function deleteNotification($id){
        $user = auth()->user();
        $notifications = $user->notifications;
        $notificationToDelete = $notifications->find($id);
        $notificationToDelete->delete();
        return redirect('/admin-notifications');
    }
    public function deleteNotifications(){

        $user = auth()->user();
        $notifications = $user->notifications;
        foreach($notifications as $not)
        {
            $not->delete();
        }
        return redirect('/admin-notifications');
    }
}
