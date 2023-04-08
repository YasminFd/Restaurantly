@extends('layouts.admin-layout')

@section('title', 'Add Contacts')

@section('content')
    <br><br><br>

    <div>
        <form action="{{route('admin-branches.store')}}" method="post" role="form">
            @csrf
            <div class="row">
                <div>
                    <input type="text" name="name" placeholder="Branch Name" required>
                    <input type="text" name="location" placeholder="Location" required>
                    <input type="url" name="url_address" placeholder="Map URL" required>
                    <input type="tel" name="phone_number" placeholder="Phone Number" required>
                </div>
            </div>
            <div class="text-center"><button type="submit" name="send" class="add">Add Branch</button></div>
        </form>
    </div>
@endsection
