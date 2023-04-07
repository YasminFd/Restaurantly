@extends('layouts.admin-layout')

@section('title', 'Admin Reviews')

@section('content')
<body>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Comment
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Add Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Rating
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Meal
                    </th>
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $review)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $review->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $review->comment }}
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $review->created_at }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $review->rating}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $review->meal->name}}
                            </td>
                            <td class="px-6 py-4">

                                <form class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    action=" {{ route('admin-reviews.destroy', $review->id) }}" method="POST"
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