@extends('layouts.admin-layout')

@section('title', 'Edit Tables')

@section('content')
    <br><br><br>

    <div>
        <form action="{{ route('admin-tables.update', $data1->id) }}" method="post" role="form">
            @csrf
            @method('PUT')
            <div>
                <div>
                    <input type="text" name="name" value="{{ $data1->name }}"required>
                    <select name='location'>
                        @foreach (App\Enums\TableLocation::cases() as $location)
                            @if ($location->value == $data1->location)
                                <option value={{ $location->value }} selected>{{ $location->name }}</option>
                            @else
                                <option value={{ $location->value }}>{{ $location->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <input type="number" name="guest_number" value="{{ $data1->guest_number }}" required>
                    <select name='status'>
                        @foreach (App\Enums\TableStatus::cases() as $status)
                            @if ($status->value == $data1->status)
                                <option value={{ $status->value }} selected>{{ $status->name }}</option>
                            @else
                                <option value={{ $status->value }}>{{ $status->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <select name='branch_id'>
                        @foreach ($data as $branch)
                            @if ($branch->id == $data1->branch_id)
                                <option value="{{ $branch->id }}" selected>{{ $branch->name }}</option>
                            @else
                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                            @endif
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="text-center"><button type="submit" name="send">Edit Table</button></div>
        </form>
    </div>
@endsection
