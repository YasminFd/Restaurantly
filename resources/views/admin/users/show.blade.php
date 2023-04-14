@extends('layouts.admin-layout')

@section('title', 'User Orders')

@section('content')

    <body>
        <div class="relative  shadow-md sm:rounded-lg">
            <table class=" text-sm text-left text-gray-500 dark:text-gray-400" style=" table-layout: fixed;">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Order
                        </th>
                        <th scope="col" class="px-6 py-3">
                            branch
                        </th>
                        <th scope="col" class="px-6 py-3">
                            total
                        </th>
                        <th scope="col" class="px-6 py-3">
                            status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            address
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $order)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $order['name'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order['created_at'] }}
                                </th>
                            <td class="px-6 py-4">
                                {{ $order->branch->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order['total'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order['status'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order['address'] }}
                            </td>
                        </tr>

                </tbody>
                @endforeach
            </table>
        </div>
    </body>
@endsection
