<x-header>
    @section('title', 'Cart')
</x-header>
<div>
    <br><br><br>
</div>
<div class="cart">
    <?php $total = 0 ?>
    <div class="cart_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cart_container">
                        <div class="section-title">
                            <h2>Shopping Cart</h2>
                        </div>
                        <div class="cart_items">
                            @foreach ($data as $item)
                            <ul class="cart_list">
                                
                                <li class="cart_item clearfix">
                                    <div class="cart_item_image"><img src="{{ asset($item->image) }}" alt=""></div>
                                    <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                        <div class="cart_item_name cart_info_col">
                                            <div class="cart_item_title">Name</div>
                                            <div class="cart_item_text">{{ $item->name }}</div>
                                        </div>
                                        <div class="cart_item_color cart_info_col">
                                            <div class="cart_item_title">Quantity</div>
                                            <div class="cart_item_text">{{ $item->quantity }}</div>
                                        </div>
                                        <div class="cart_item_quantity cart_info_col">
                                            <div class="cart_item_title">Price</div>
                                            <div class="cart_item_text">{{ $item->price }}</div>
                                        </div>
                                        <div class="cart_item_price cart_info_col">
                                            <div class="cart_item_title">Total</div>
                                            <div class="cart_item_text">{{ $item->quantity * $item->price }}</div>
                                        </div>
                                        <div class="cart_item_total cart_info_col ">
                                            <div class="cart_item_title">Action</div>
                                            <div class="cart_item_text d-flex"><a href="{{ route('cart.edit', $item->id) }}"><img src="{{ asset('/images/edit.png') }}" width="15px" alt="Edit logo"></a></div>
                                            <form action="{{ route('cart.destroy', $item['id']) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"><img src="{{ asset('/images/delete.png') }}" width="19px"alt="Edit logo"></button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <?php $total += $item->price * $item->quantity ?>
                        @endforeach
                        <div class="order_total">
                            <div class="order_total_content text-md-right">
                                <div class="order_total_title">Order Total:</div>
                                <div class="order_total_amount">{{ $total }}</div>
                            </div>
                        </div>
                        <div class="cart_buttons"> <a href="{{ route('home.menu') }}" class="button cart_button_clear">Continue Shopping</a><a href="{{ route('clear', auth()->id()) }}" class="button cart_button_clear">Clear Cart</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<form action="{{ route('home.order', ['i' => auth()->id(), 'total' => $total]) }}"  method="get" role="form" class="php-email-form" data-aos="fade-up"
data-aos-delay="100">
@csrf
@method('GET')
<div class="row ml-2 mr-2">
    <div class="col-lg-4 col-md-6 form-group">
        <input type="text" name="name" class="form-control" id="name" placeholder="First Name"
            data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
    </div>
    <div class="col-lg-4 col-md-6 form-group">
        <input type="text" name="address" class="form-control" id="name" placeholder="address"
            data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
    </div>
    <div class="col-lg-4 col-md-6 form-group">
        <input type="tel" class="form-control" name="phone_number" id="phone" required placeholder="Phone"
            data-rule="minlen:4" data-msg="Please enter at least 4 chars">
    </div>
    <div class="col-lg-4 col-md-6 form-group mt-3 ">
        <select name="branch_id" class="form-control">
            @foreach ($branch as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select>
    </div>
<div class="text-center mb-3 "><button type="submit" class="button cart_button_clear">Order Now</button></div>
</div>
</form>
</div>
<x-footer />
