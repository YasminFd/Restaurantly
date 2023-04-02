@extends('layouts.admin-layout')

@section('title', 'Add Table')

@section('content')
    <br><br><br>


    <div class="w-full">
        <form action="/admin-reservations" method="post">
            @csrf
            <div class="row" style="width=100%;">
                <div>
                    <input type="text" name="first_name" placeholder="First name" required @error('name') border-red-500 @enderror>
                    @error('name')
                        <div class="text-sm text-red-400">Enter name</div>
                    @enderror

                    <input type="text" name="last_name" placeholder="Last name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="tel" name="phone_number" placeholder="Phone" required>
                    <input type="datetime-local" name="res_date" placeholder="Reservation Date" required>
                    <input type="number" name="guest_number" placeholder="Guest Number" required>
                    <select name='branch_id'>
                        @foreach ($data as $branch)
                            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                        @endforeach
                    </select>

                    <select name='table_id'>
                        @foreach ($tables as $location)
                            <option value={{ $location->id }}>{{ $location->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="text-center"><button type="submit" name="send" class="add">Add Reservation</button></div>
        </form>
    </div>
@endsection
