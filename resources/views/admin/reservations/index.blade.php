@extends('layouts.admin-layout')

@section('title', 'Admin Reservations')

@section('content')

    <body>
        <br><br><br><br>
        <p>Admin Reservations Page</p>
        <div class="flex justify-end m-2 p-2 ">
            <a href="{{ route('admin-reservations.create') }}"
                class=" px-4 py-2 bg-indigo-500 hover:bg-indigo-800 rounded-lg text-white ">Add Reservation</a>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date Time
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Table ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Guest Number
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Branch ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Delete</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                {{ $reservation->first_name }} {{ $reservation->last_name }}
                            </th>

                            <td class="px-6 py-4">
                                {{ $reservation->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $reservation->phone_number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $reservation->res_date }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $reservation->table->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $reservation->guest_number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $reservation->branch_id }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('admin-reservations.edit', $reservation->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <form class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    action="{{ route('admin-reservations.destroy', $reservation->id) }}" method="POST"
                                    onsubmit="return confirm('Are you Sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </body>
@endsection
