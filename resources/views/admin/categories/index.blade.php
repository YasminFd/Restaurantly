@extends('layouts.admin-layout')

@section('title', 'Admin Category')

@section('content')

    <body>
        <br>
        <div class="flex justify-end m-2 p-2 ">
            <a href="{{ route('admin-categories.create') }}"
                class=" px-4 py-2 bg-indigo-500 hover:bg-indigo-800 rounded-lg text-white mx-2 ">Add Category</a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Catagory Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category Id
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $category)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                {{ $category->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $category->id }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin-categories.edit', $category->id) }}"
                                    class="font-medium text-blue-600
                                    dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                            <td class="px-6 py-4">
                                <form class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    action="{{ route('admin-categories.destroy', $category->id) }}" method="POST"
                                    onsubmit="return confirm('Are you Sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete"></button>
                                </form>
                            </td>
                        </tr>

                </tbody>
                @endforeach
            </table>
        </div>
    </body>
@endsection
