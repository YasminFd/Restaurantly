@extends('layouts.admin-layout')

@section('title', 'Admin Edit Contacts')

@section('content')
<br><br><br>

<div> 
<form action="/admin-contacts" method="post" role="form" >
    @csrf
    <div class="row">
        <div >
            <input type="text" name="name" 
                placeholder="enter new Branch Name" required>
            <input type="text" name="location" 
            placeholder="enter new location" required>
            <input type="url" name="url_address" 
            placeholder="enter address url" required>
            <input type="phone" name="phone_number" 
            placeholder="enter phone_number" required>
        </div>
    </div>
    <div class="text-center"><button type="submit" name="send">Add Branch</button></div>
</form>
</div>
@endsection