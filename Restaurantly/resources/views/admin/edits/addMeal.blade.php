@extends('layouts.admin-layout')

@section('title', 'Admin Contacts')

@section('content')
<br><br><br>

<div class="w-full max-w-xs"> 
<form action="admin-meal" method="post" role="form"  enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div >
            <input type="text" name="name"
                placeholder="enter new dish name" required>
            <input type="text" name="description" 
            placeholder="enter description" required>  
            <input type="number" name="price" 
                placeholder="enter price" required>
            <input type="file" name="image" 
            placeholder="upload image" required>
            <select name='category_id'>
                @foreach($data as $category )
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            
        </div>
    </div>
    <div class="text-center"><button type="submit" name="send">Send Message</button></div>
</form>
</div>
@endsection