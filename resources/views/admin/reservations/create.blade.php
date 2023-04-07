@extends('layouts.admin-layout')

@section('title', 'Add Table')

@section('content')
    <div class="w-full">
        <form action="{{ route('admin-reservations.store') }}" method="post">
            @csrf
            <div class="row" style="width=100%;">
                <div>
                    <input type="text" name="first_name" placeholder="First name" required>
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
                        @foreach ($tables as $table)
                            <option value={{ $table->id }}>{{ $table->name }} ({{ $table->guest_number }} Guests)
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="text-center"><button type="submit" name="send" class="add">Add Table Reservation</button>
            </div>
        </form>
    </div>


    <div class="w-full mt-9">
        <form action="{{ route('admin-reservations.store') }}" method="post">
            @csrf
            <div class="row" style="width=100%;">
                <div>
                    <input type="text" name="first_name" placeholder="First name" required>
                    <input type="text" name="last_name" placeholder="Last name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="tel" name="phone_number" placeholder="Phone" required>
                    <input type="datetime-local" name="res_date" placeholder="Reservation Date" required>
                    <select name='branch_id'>
                        @foreach ($data as $branch)
                            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                        @endforeach
                    </select>


                    <textarea class="form-control" name="message" rows="5" placeholder="Message" rows="10" cols="10"></textarea>

                </div>
            </div>

            <div class="text-center"><button type="submit" name="send" class="add">Add Event Reservation</button>
            </div>
        </form>
    </div>
@endsection
