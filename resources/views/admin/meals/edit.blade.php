@extends('layouts.admin-layout')

@section('title', 'Edit Meal')

@section('content')
    <div style="display: flex; align-items:center; justify-content:center;">
        <form action="{{ route('admin-meals.update', $data1->id) }}" method="post" role="form" class="php-email-form"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <img src='{{ asset($data1->image) }}' height="300" width="300">
            <div class="flex align-middle justify-center justify-items-center">
                <input type="text" name="name" value="{{ $data1->name }}"required>
                <textarea type="text" name="description" required cols="20" rows="3">{{ $data1->description }}</textarea>
                <input type="number" name="price" value="{{ $data1->price }}" required>
                <select name='category_id'>
                    @foreach ($data as $category)
                        @if ($category->id == $data1->category_id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
                <input type="file" name="image" placeholder="upload image">
            </div>
            <div class="text-center"><button type="submit" name="send" class="add">Edit Meal</button></div>
        </form>
    </div>
@endsection
