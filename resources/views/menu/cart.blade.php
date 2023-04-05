<x-header>
    @section('title', 'cart')
</x-header>
<p>
    <br><br><br>
</p>
<div>
<table>
    <tr>
        <th>Food Name</th>
        <th>Unit Price</th>
        <th>Quantity</th>
        <th></th>
    </tr>
    @foreach($data as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->price }}</td>
        <td>{{ $item->quantity }}</td>
        <td><a href="{{ route('home.menu.remove', $item->id) }}">remove</a></td>
        <td><a href="{{ route('home.menu.edit', $item->id) }}">edit</a></td>
    </tr>
    @endforeach
</table>
</div>
<x-footer/>