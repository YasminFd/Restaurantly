@extends('layouts.admin-layout')

@section('title', 'Admin Contacts')

@section('content')
<br><br><br>

<div> 
<form action="admin-category" method="post" role="form" >
    @csrf
    <div class="row">
        <div >
            <input type="text" name="name" 
                placeholder="enter new category Name" required>
        </div>
    </div>
    <div class="text-center"><button type="submit" name="send">Add Category</button></div>
</form>
</div>
@endsection