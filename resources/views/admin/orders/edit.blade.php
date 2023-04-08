@extends('layouts.admin-layout')

@section('title', 'Edit Status')

@section('content')
    <div style="display: flex; align-items:center; justify-content:center;">
        <form action="{{ route('admin-orders.update', $data->id) }}" method="post" >
            @csrf
            @method('PUT')
            <h1 class="mr-2">Status</h1>
            <div class="flex align-middle justify-center justify-items-center">
                <select name='status'>
                    <option value="ongoing">ongoing</option>
                    <option value="canceled">canceled</option>
                    <option value="delivered">delivered</option>
                </select>
            <div class="text-center"><button type="submit" name="send" class="add">Edit order</button></div>
        </form>
    </div>
@endsection
