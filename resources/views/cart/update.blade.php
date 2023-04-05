<x-header>
    @section('title', 'Menu')
</x-header>
<div>
    <br><br><br>
    <div class="col-lg-6 details ">
        <h3>{{ $data->name }}</h3>
        <p class="fst-italic">{{ $data->description }}</p>
        <p><b>Price: ${{ $data->price }}</b></p>
    </div>
    <div class="col-lg-3 text-center order-lg-2">
        <img src="{{ asset($data->image) }}" alt="" class="img-fluid">
    </div>
    <form action="{{route('cart.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="number" name="quantity" min="1" value={{ $quantity }} style="background-color:black; padding: 5px;">
        <input type="submit" value="add to cart">
    </form>
    <br><br>

</div>
<x-footer/>