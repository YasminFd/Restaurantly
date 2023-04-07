@extends('layouts.admin-layout')

@section('title', 'Add Table')

@section('content')
    <div class="w-full">
        @if ($reservation->table_id != null)
            <form action="{{ route('admin-reservations.update', $reservation->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row" style="width=100%;">
                    <div>
                        <input type="text" name="first_name" placeholder="First name" required
                            value="{{ $reservation->first_name }}">
                        <input type="text" name="last_name" placeholder="Last name" required
                            value="{{ $reservation->last_name }}">
                        <input type="email" name="email" placeholder="Email" required value="{{ $reservation->email }}">
                        <input type="tel" name="phone_number" placeholder="Phone" required
                            value="{{ $reservation->phone_number }}">
                        <input type="datetime-local" name="res_date" placeholder="Reservation Date" required
                            value="{{ $reservation->res_date }}">
                        <input type="number" name="guest_number" placeholder="Guest Number" required
                            value="{{ $reservation->guest_number }}">
                        <select name='branch_id'">
                            @foreach ($branches as $branch)
                                <option value="{{ $branch->id }}"
                                    @if ($branch->id == $reservation->branch_id) selected = "selected" @endif>{{ $branch->name }}
                                </option>
                            @endforeach
                        </select>

                        <select name='table_id'>
                            @foreach ($tables as $location)
                                <option value={{ $location->id }}
                                    @if ($location->id == $reservation->table_id) selected = "selected" @endif>{{ $location->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-center"><button type="submit" name="send" class="add">Edit Reservation</button>
                </div>
            </form>
    </div>
@else
    <div class="w-full">
        <form action="{{ route('admin-reservations.update', $reservation->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row" style="width=100%;">
                <div>
                    <input type="text" name="first_name" placeholder="First name" required
                        value="{{ $reservation->first_name }}">
                    <input type="text" name="last_name" placeholder="Last name" required
                        value="{{ $reservation->last_name }}">
                    <input type="email" name="email" placeholder="Email" required value="{{ $reservation->email }}">
                    <input type="tel" name="phone_number" placeholder="Phone" required
                        value="{{ $reservation->phone_number }}">
                    <input type="datetime-local" name="res_date" placeholder="Reservation Date" required
                        value="{{ $reservation->res_date }}">
                    <select name='branch_id'">
                        @foreach ($branches as $branch)
                            <option value="{{ $branch->id }}"
                                @if ($branch->id == $reservation->branch_id) selected = "selected" @endif>{{ $branch->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="text-center"><button type="submit" name="send" class="add">Edit Reservation</button></div>
        </form>
    </div>

    @endif
@endsection
