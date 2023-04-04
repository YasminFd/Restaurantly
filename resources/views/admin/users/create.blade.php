@extends('layouts.admin-layout')

@section('title', 'Admin Add User')

@section('content')
    <br><br><br>

    <div class="w-full">
        <form action="{{route('admin-users.store')}}" method="post" role="form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div>
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="password" name="password" placeholder="password" required>
                    <input type="email" name="email" placeholder="email" required>
                </div>
            </div>
            <div class="text-center"><button type="submit" name="send" class="add">Add Employee</button></div>
        </form>
    </div>
@endsection
