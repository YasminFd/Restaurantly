@extends('layouts.admin-layout')

@section('title', 'Admin Testimonials')
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

    <body>

        <div class="flex justify-end m-2 p-2 ">
            <a href="{{ route('admin-testimonials.create') }}"
                class=" px-4 py-2 bg-indigo-500 hover:bg-indigo-800 rounded-lg text-white ">Add Testimonial</a>
        </div>
        <div class="section-title">
            <h2>Testimonials</h2>
        </div>
        <div class="relative  shadow-md sm:rounded-lg">
            <table class=" text-sm text-left text-gray-500 dark:text-gray-400" style=" table-layout: fixed;">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Job
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Testimony
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $testimonial)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                {{ $testimonial['name'] }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $testimonial['job'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $testimonial['testimony'] }}
                            </td>
                            <td class="px-6 py-4" style="max-width: 200px; overflow: hidden; text-overflow: ellipsis;">
                                {{ $testimonial['image'] }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin-testimonials.edit', $testimonial['id']) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                            <td class="px-6 py-4">
                                <form class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    action="{{ route('admin-testimonials.destroy', $testimonial['id']) }}" method="POST"
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
