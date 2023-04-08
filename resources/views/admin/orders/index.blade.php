@extends('layouts.admin-layout')

@section('title', 'Admin Orders')

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
                            Order_date
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
                        <th scope="col" class="px-6 py-3">
                            phone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            
                        </th>
                        <th scope="col" class="px-6 py-3">
                            
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
                                {{ $order['name'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order['id'] }}
                            </th>
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
                            <td class="px-6 py-4">
                                {{ $order['phone_number'] }}
                            </td>
                            <td class="px-6 py-4">
                                <a href={{ route('admin-orders.show',$order->id) }}>
                                    Show details
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <a href={{ route('admin-orders.edit',$order->id) }}>
                                    edit status
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <form class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    action=" {{ route('admin-orders.destroy', $order->id) }}" method="POST"
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
