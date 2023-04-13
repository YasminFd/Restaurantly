@extends('layouts.admin-layout')

@section('title', 'Add Category')

@section('content')
    <br><br><br>

    <div>
        <form action="{{ route('admin-categories.store') }}" method="post" role="form">
            @csrf
            <div class="row">
                <div>
                    <input type="text" name="name" placeholder="Category Name" required>
                </div>
            </div>
            <div class="text-center"><button type="submit" name="send" class="add">Add Category</button></div>
        </form>
    </div>
@endsection
