@extends('layouts.admin-layout')

@section('title', 'Edit Contacts')

@section('content')
    <br><br><br>

    <div>
        <form action="{{ route('admin-branches.update', $data->id) }}" method="post" role="form">
            @csrf
            @method('PUT')
            <div>
                <div>
                    <input type="text" name="name" value="{{ $data->name }}" required>
                </div>
                <div>
                    <input type="text" name="location" value="{{ $data->location }}" required>
                </div>
                <div>
                    <input type="url" name="url_address" value="{{ $data->url_address }}" required>
                </div>
                <div>
                    <input type="tel" name="phone_number" value="{{ $data->phone_number }}" required>
                </div>
            </div>
            <div class="text-center"><button type="submit" name="send" class="add">Edit Branch</button></div>
        </form>
    </div>
@endsection
