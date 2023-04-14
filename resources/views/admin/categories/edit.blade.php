@extends('layouts.admin-layout')

@section('title', 'Edit Category')

@section('content')
    <br><br><br>

    <div class="contact container">
        <form action="{{ route('admin-categories.update', $data->id) }}" method="post" role="form" class="php-email-form">
            @csrf
            @method('PUT')
            <div>
                <div>
                    <input type="text" name="name" value="{{ $data->name }}" required>
                </div>
            </div>
            <div class="text-center"><button type="submit" name="send" class="add">Edit Category</button></div>
        </form>
    </div>
@endsection
