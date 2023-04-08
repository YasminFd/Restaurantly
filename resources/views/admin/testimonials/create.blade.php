@extends('layouts.admin-layout')

@section('title', 'Add Testimonials')

@section('content')
    <br><br><br>

    <div class="w-full">
        <form action="{{route('admin-testimonials.store')}}" method="post" role="form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div>
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="text" name="testimony" placeholder="testimony" required>
                    <input type="text" name="job" placeholder="job" required>
                    <input type="file" name="image" placeholder="Upload image" required>

                </div>
            </div>
            <div class="text-center"><button type="submit" name="send" class="add">Add Testimonial</button></div>
        </form>
    </div>
@endsection
