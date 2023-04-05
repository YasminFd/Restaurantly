<x-header>
    @section('title', 'cart')
</x-header>
<div>
<br><br><br><br><br><br><br><br><br>
</div>
<div>
    {{ $total=0; }}
<table>
    <tr>
        <th>Food Name</th>
        <th>Unit Price</th>
        <th>Quantity</th>
        <th style="column-span: 2;">Action</th>
    </tr>
    @foreach($data as $item)
    <tr>
        {{ $total+=($item->price*$item->quantity )}}
        <td>{{ $item->name }}</td>
        <td>{{ $item->price }}</td>
        <td>{{ $item->quantity }}</td>
        <td>
            <form action="{{ route('cart.destroy', $item['id']) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">remove</button>
            </form>
        </td>
        <td><a href="{{ route('cart.edit', $item->id) }}">edit</a></td>
    </tr>
    @endforeach
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>TOTAL: {{ $total }}</td>
    </tr>
</table>

<a href="{{ route('clear',auth()->id()) }}">clear cart</a>
</div>
<div allign="center" style="padding:10px;">
    <button >order now</button>

</div>
<div>
    <form action="{{ route('home.order') }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="name">
    <input type="text" name="address" placeholder="address">
    <input type="tel" name="phone number" placeholder="phone number">
    <select name="branch" style="background-color: black;">
        @foreach($branch as $data)
            <option value="{{ $data->id }}">{{ $data->name }}</option>
        @endforeach
    </select>
    <input type="submit" value="Order Now">
    </form>
</div>
<x-footer/>