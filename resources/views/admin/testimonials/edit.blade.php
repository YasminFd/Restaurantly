@extends('layouts.admin-layout')

@section('title', 'Admin Edit Testimonials')

@section('content')
    <br><br><br>

    <div>
        <form action="{{ route('admin-testimonials.update', $data->id) }}" method="post" 
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <div>
                    <img src='{{ asset($data->image) }}' height="300" width="300">
                    <input type="text" name="name" value="{{ $data->name }}"required>
                    <input type="text" name="testimony" value="{{ $data->testimony }}" required>
                    <input type="text" name="job" value="{{ $data->job }}" required>
                    <input type="file" name="image" placeholder="upload image">

                </div>
            </div>
            <div class="text-center"><button type="submit" name="send" class="add">Edit Testimonial</button></div>
        </form>
    </div>
@endsection
