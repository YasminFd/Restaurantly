<x-header>
    @section('title', 'Menu')
</x-header>
<p>
    <br><br><br>
    <div class="col-lg-6 details ">
        <h3>{{ $data->name }}</h3>
        <p class="fst-italic">{{ $data->description }}</p>
        <p><b>Price: ${{ $data->price }}</b></p>
    </div>
    <div class="col-lg-3 text-center order-lg-2">
        <img src="{{ asset($data->image) }}" alt="" class="img-fluid">
    </div>
    <form action="/add-cart/{{ $data->id }}" method="post">
        @csrf
        <input type="number" name="quantity" min="1" value={{ $quantity }}>
        <input type="submit" value="add to cart">
    </form>
    <br><br>

</p>
<x-footer/>