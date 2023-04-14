@extends('layouts.admin-layout')

@section('title', 'Admin Tables')
<style>
    .section-title h2 {
        font-size: 14px;
        font-weight: 500;
        padding: 0;
        line-height: 1px;
        margin: 40px 0 20px 0;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #aaaaaa;
        font-family: "Poppins", sans-serif;
    }

    .section-title h2::after {
        content: "";
        width: 120px;
        height: 1px;
        display: inline-block;
        background: rgba(255, 255, 255, 0.2);
        margin: 4px 10px;
    }
</style>

@section('content')
    <div>
        <br><br><br><br>
        <div class="flex justify-end m-2 p-2 ">
            <a href="{{ route('admin-tables.create') }}"
                class=" px-4 py-2 bg-indigo-500 hover:bg-indigo-800 rounded-lg text-white ">Add
                Table</a>
        </div>
        <div class="section-title">
            <h2>Tables</h2>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Guest Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Location
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Branch
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>
                        <th scope="col" class="px-6 py-3">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $branch_name => $tables)
                        @foreach ($tables as $table)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $table->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $table->guest_number }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $table->location }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $branch_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $table->status }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('admin-tables.edit', $table->id) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                                <td class="px-6 py-4">

                                    <form class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                        action=" {{ route('admin-tables.destroy', $table->id) }}" method="POST"
                                        onsubmit="return confirm('Are you Sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
