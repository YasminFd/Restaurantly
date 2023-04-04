@extends('layouts.admin-layout')

@section('title', 'Admin Contacts')

@section('content')

    <body>

        <div class="flex justify-end m-2 p-2 ">
            <a href="{{ route('admin-branches.create') }}"
                class=" px-4 py-2 bg-indigo-500 hover:bg-indigo-800 rounded-lg text-white ">Add Branch</a>
        </div>
        <div class="relative  shadow-md sm:rounded-lg">
            <table class=" text-sm text-left text-gray-500 dark:text-gray-400" style=" table-layout: fixed;">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Branch Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Branch Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3">
                            URL Location
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone Number
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $branch)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                {{ $branch['name'] }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $branch['id'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $branch['location'] }}
                            </td>
                            <td class="px-6 py-4" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis;">
                                {{ $branch->url_address }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $branch['phone_number'] }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin-branches.edit', $branch['id']) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                            <td class="px-6 py-4">
                                <form class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    action="{{ route('admin-branches.destroy', $branch['id']) }}" method="POST"
                                    onsubmit="return confirm('Are you Sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>

                </tbody>
                @endforeach
            </table>
        </div>
    </body>
@endsection
