@extends('layouts.admin-layout')

@section('title', 'Edit Tables')

@section('content')
    <br><br><br>

    <div>
        <form action="{{ route('admin-tables.update', $table->id) }}" method="post" role="form">
            @csrf
            @method('PUT')
            <div>
                <div>
                    <input type="text" name="name" value="{{ $table->name }}"required>
                    <select name='location'>
                        @foreach (App\Enums\TableLocation::cases() as $location)
                            @if ($location == $table->location)
                                <option value={{ $location->value }} selected='selected'>{{ $location->name }}</option>
                            @else
                                <option value={{ $location->value }}>{{ $location->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <input type="number" name="guest_number" value="{{ $table->guest_number }}" required>
                    <select name='status'>
                        @foreach (App\Enums\TableStatus::cases() as $stat)
                            @if ($stat == $table->status)
                                <option value={{ $stat->value }} selected='selected'>{{ $stat->name }}</option>
                            @else
                                <option value={{ $stat->value }}>{{ $stat->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <select name='branch_id'>
                        @foreach ($branches as $branch)
                            @if ($branch->id == $table->branch_id)
                                <option value="{{ $branch->id }}" selected>{{ $branch->name }}</option>
                            @else
                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                            @endif
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="text-center"><button type="submit" name="send" class="add">Edit Table</button></div>
        </form>
    </div>
@endsection
