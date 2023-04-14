@extends('layouts.admin-layout')

@section('title', 'Order Details')

@section('content')

    <body>
        <div class="relative  shadow-md sm:rounded-lg">
            <table class=" text-sm text-left text-gray-500 dark:text-gray-400" style=" table-layout: fixed;">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Order
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Meal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $order)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $order->order_id }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->meal->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->quantity }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->meal->price }}
                            </td>
                        </tr>

                </tbody>
                @endforeach
                <tfoot
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>{{ $total }}</th>
                </tfoot>
            </table>
        </div>
    </body>
@endsection
