@extends('layouts.admin-layout')

@section('title', 'Admin Contacts')

@section('content')
<br><br><br>

<div > 
<form action="{{ route('admin-meal.update', $data1->id) }}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div >
        <div>
            <img src='{{asset($data1->image)}}' height="300" width="300">
            <input type="text" name="name"
                value="{{ $data1->name }}"required>
            <input type="text" name="description"
                value="{{ $data1->description }}" required>  
            <input type="number" name="price"
                value="{{ $data1->price }}" required>
            <input type="file" name="image"
                placeholder="upload image" >
            <select name='category_id'>
                @foreach($data as $category )
                @if($category->id==$data1->category_id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option> 
                @endif
                @endforeach
            </select>
            
        </div>
    </div>
    <div class="text-center"><button type="submit" name="send">Edit Meal</button></div>
</form>
</div>
@endsection