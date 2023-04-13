@extends('layouts.admin-layout')

@section('title', 'Admin Index')

@section('content')
    <div>
        <br><br><br><br>
        <h1>WELCOME BACK!</h1>
        <br><br>
        <?php $notifications = auth()->user()->unreadNotifications; ?>
        @forelse($notifications as $notification)
            <div class="alert alert-success" role="alert">
                [{{ $notification->created_at }}] {{ $notification->data['user_id'] }} {{ $notification->data['message'] }}
                <a href="{{ route('mark', $notification->id) }}" class=" float-right mark-as-read">
                    Mark as read
                </a>
            </div>

            @if ($loop->last)
                <a href="{{ route('markRead', $notification->id) }}">
                    Mark all as read
                </a>
            @endif
        @empty
            There are no new notifications
        @endforelse
    </div>

@endsection
