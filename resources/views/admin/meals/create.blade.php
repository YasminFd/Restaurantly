@extends('layouts.admin-layout')

@section('title', 'Add Meal')

@section('content')
    <br><br><br>

    <div class="w-full">
        <form action="{{ route('admin-meals.store') }}" method="post" role="form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div>
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="text" name="description" placeholder="Description" required>
                    <input type="number" name="price" placeholder="Price" required>
                    <input type="file" name="image" placeholder="Upload image" required>
                    <select name='category_id'>
                        @foreach ($data as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="text-center"><button type="submit" name="send" class="add">Send Message</button></div>
        </form>
    </div>
@endsection
