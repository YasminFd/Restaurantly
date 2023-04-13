<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    // Mark the notification as read
    public function mark($id)
    {
        auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
        return redirect('/');
    }

    // Show unread notifications
    public function markNotification()
    {
        foreach (auth()->user()->unreadNotifications as $x) {
            $id = $x->id;
            auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
        }
        return redirect('/');
    }

    // Delete a notification
    public function deleteNotification($id)
    {
        $user = auth()->user();
        $notifications = $user->notifications;
        $notificationToDelete = $notifications->find($id);
        $notificationToDelete->delete();
        return redirect('/admin-notifications');
    }

    // Delete all notifications
    public function deleteNotifications()
    {

        $user = auth()->user();
        $notifications = $user->notifications;
        foreach ($notifications as $not) {
            $not->delete();
        }
        return redirect('/admin-notifications');
    }
}
