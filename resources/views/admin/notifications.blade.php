@extends('layouts.admin-layout')

@section('title', 'Admin Notifications')

@section('content')
    <br><br><br>

    <div class="w-full">
        <ul>
            <?php $notifications = auth()->user()->unreadNotifications;?>
            @forelse($notifications as $notification)
            <li><div class=" text-gray-500 border-cyan-700 mr-auto border-b m-2 text-lg px-6 py-3">
               <span class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-700"> [{{ $notification->created_at }}] </span>: {{ $notification->data['user_id'] }} {{ $notification->data['message'] }}
                    <a href="{{ route('delete',$notification->id ) }}" class=" float-right mark-as-read" >
                        remove
                    </a>
                    @if($loop->last)
                    <a href="{{ route('deleteAll') }}">
                    </li><li class="text-lg">clear notifications</li>
                    </a>
                    @endif
            @empty
                There are no new notifications
            @endforelse</div>
            </li>
        </ul>
    </div>
@endsection
