<h1>Your Order</h1>
@foreach ($req as $user => $data)
    <table>
        <tr>
            <th>Food Name</th>
            <th>Unit Price</th>
            <th>Quantity</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['price'] }}</td>
                <td>{{ $item['quantity'] }}</td>
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
    </table>>
@endforeach
