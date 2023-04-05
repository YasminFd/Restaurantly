<x-header>
    @section('title', 'Menu')


    @section('content')
        <div style="height:150px;"></div>
        <div class="d-flex flex-col justify-evenly items-center gap-6 text-slate-300 font-mono">
            <div>
                <h1 style="font-size:60px">{{ $data->name }}</h1>
            </div>
            <div style="filter:drop-shadow(-1px 3px 4px #fcb3b3)">
                <img src="{{ asset($data->image) }}" alt="" class="img-fluid"
                    style="width: 50%; border-radius: 10%; margin:auto;">
            </div>
            <div class="col-lg-6 details items-center text-center ">
                <p class=" text-xl my-2">{{ $data->description }}</p>
                <p class="mt-6">Price: ${{ $data->price }}</p>
            </div>

            <form action="/add-cart/{{ $data->id }}" method="post" style="text-align: center;" class="mb-3">
                @csrf
                <div><input type="number" name="quantity" min="1" placeholder="Quantity" style="color:black;border-radius:5%"></div>
                <div><input type="submit" value="add to cart" class="my-3" style="border:1px solid #fcb3b3; border-radius:5%; padding: 3%; background-color:#fcb3b3; color:#000;"></div>
            </form>

        </div>
    @endsection
</x-header>

<x-footer />
