<x-header>
    @section('title', 'Menu')
</x-header>
@if (session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@endif

<style>
    input,
    textarea {
        margin: 0 10px;
        padding: 10px;
        border-radius: 4% !important;
    }

    div {
        width: 100%;
        text-align: left;
    }

    button {
        padding: 10px;
        justify-self: center;

    }

    ul {
        list-style: none;
    }
</style>

<main>
    <div style="height:150px;"></div>
    <div class="content">
        <div style="text-align:center;">
            <h1 style="font-size:60px;">{{ $data->name }}</h1>
        </div>
        <div style="filter:drop-shadow(-1px 3px 4px #cda45e)">
            <img src="{{ asset($data->image) }}" alt="" class="img-fluid img">
        </div>
        <div class="col-lg-6 details items-center text-center ">
            <p class=" text-xl my-2">{{ $data->description }}</p>
            <p class="mt-6">Price: ${{ $data->price }}</p>
        </div>

        <form action="{{ route('cart.update', $data->id) }}" method="post" style="text-align: center;" class="mb-3">
            @csrf
            @method('PUT')
            <div><input type="number" name="quantity" min="1" placeholder="Quantity"
                    style="color:black;border-radius:5%; height:40px;" value="{{ $quantity }}"></div>
            <div><input type="submit" value="add to cart" class="my-3"
                    style="border-radius:5%; padding: 3%; background-color:#cda45e; color:#000;">
            </div>
        </form>

    </div>
    <section>
        <div class="section-title">
            <h2>Leave a Review</h2>
        </div>
        <form action="{{ route('review') }}" method="POST"
            style="display:flex; flex-direction:column; justify-content:start; gap:10px; align-items:start; text-align:center; vertical-align:middle;">
            @csrf
            <div>
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" placeholder="Name" required style="width:30%;">
            </div>
            <div>
                <input type="hidden" name="meal_id" value="{{ $data->id }}">
            </div>
            <div style="display:inherit; align-items:center;">
                <label for="comment">Comment: </label>
                <textarea name="comment" rows="1" cols="5" placeholder="Comment" id="comment" required
                    style="width: 30%;"></textarea>
            </div>
            <div>
                <label for="rating">Rating: </label>
                <input type="number" name="rating" id="rating" min="1" max="5" placeholder="Rating"
                    required style="width:30%;">
            </div>
            <button type="submit" class="add">Add Review</button>
        </form>
    </section>


    <section>
        <div class="section-title" style="display: flex; flex-direction:row; justify-content:start; align-items:center; text-align:start;">
            <h2>Reviews</h2>
            <em>{{ $average }} / 5</em>
        </div>
        <div style="display:flex; flex-direction:column; justify-content:start; align-items:center; gap:15px">
            @foreach ($info as $review)
                <div>
                    <h4 style="color:#cda45e;">{{ $review->name }}</h4>
                    <p><strong> Review: {{ $review->rating }} / 5</strong></p>
                    <p style="color: #eeecec;"><em>{{ $review->comment }}</em></p>
                </div>
            @endforeach
        </div>
    </section>
</main>
<x-footer />
