@extends('layouts.admin-layout')

@section('title', 'Add Table')

@section('content')
<br><br><br>

 
<div class="w-full max-w-xs"> 
    <form action="/admin-tables" method="post" >
        @csrf
        <div class="row">
            <div >
                <input type="text" name="name"
                    placeholder="enter new table name" required>
                <select name='location'>
                    @foreach(App\Enums\TableLocation::cases() as $location)
                    <option value={{ $location->value }}>{{ $location->name }}</option>
                    @endforeach
                </select> 
                <input type="number" name="guest_number" 
                    placeholder="enter guest_number" required>
                <select name='branch_id'>
                    @foreach($data as $branch )
                    <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                    @endforeach
                </select>
                
            </div>
        </div>
        <div class="text-center"><button type="submit" name="send">Add Table</button></div>
    </form>
    </div>
@endsection