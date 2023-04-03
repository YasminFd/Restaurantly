@extends('layouts.admin-layout')

@section('title', 'Admin Menu')

@section('content')
<body>
    <br>
    <div class="flex justify-end m-2 p-2 ">
        <a href="/admin-category" class=" px-4 py-2 bg-indigo-500 hover:bg-indigo-800 rounded-lg text-white ">add menu</a>
        &nbsp&nbsp<a href="/admin-meal" class="  px-4 py-2 bg-indigo-500 hover:bg-indigo-800 rounded-lg text-white">add meal</a>
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
                @foreach($data as $category )
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $category->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $category->id }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="/admin-category/{{ $category->id }} class="font-medium text-blue-600 dark:text-blue-500 hover:underline">edit</a>
                    </td>
                    <td class="px-6 py-4">
                        <form  class="font-medium text-blue-600 dark:text-blue-500 hover:underline" 
                         action="/admin-category/{{$category->id }}"
                          method="POST"
                           onsubmit="return confirm('Are you Sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">delete</button>
                        </form>
                    </td>
                </tr>
                
            </tbody>
            @endforeach
        </table>
    </div>
    <br><br><br>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Meal Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        
                    </th>
                    <th scope="col" class="px-6 py-3">
                        
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($data2 as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $item->description }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->price }}
                    </td>
                    <td class="px-6 py-4">
                        <img src={{ asset($item->image) }} height="30" width="30">
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->category_id }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="/admin-meal/{{ $item->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" >edit</a>
                    </td>
                    <td class="px-6 py-4">
                    
                         <form  class="font-medium text-blue-600 dark:text-blue-500 hover:underline" 
                         action="/admin-meal/{{ $item->id }}"
                          method="POST"
                           onsubmit="return confirm('Are you Sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">delete</button>
                        </form>
                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
   
    
    <br><br>
    
</body>
@endsection