<x-header>
    @section('title', 'Menu')
</x-header>

<p>
    <br><br><br>
</p>
<section id="menu" class="menu section-bg">

    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Menu</h2>
            <p>Check Our Tasty Menu</p>
        </div>
        @foreach ($data as $categoryName => $menuitems)
            @if (isset($menuitems))
                @if (strcmp($categoryName, 'offer') != 0)
                    <div class="section-title">
                        <h2>{{ $categoryName }}</h2>
                    </div>
                    @foreach ($menuitems as $item)
                        <div class="menu" data-aos="fade-up" data-aos-delay="200">
                            <div class="menu-item filter-salads">
                                <img src="{{ asset($item->image) }}" class="menu-img" alt="">
                                <div class="menu-content">
                                    <a
                                        href="{{ route('home.menu.view', $item->id) }}">{{ $item->name }}</a><span>${{ $item->price }}</span>
                                </div>
                                <div style="margin: 0 87px; color: #cda45e;">
                                    {{ $item->reviews->count() > 0 ? 'Average Rating: ' . $item->reviews->avg('rating') . ' / 5' : 'No Ratings' }}
                                </div>
                                <div class="menu-ingredients">
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endif
        @endforeach
    </div>
</section>
@if (isset($data['offer']))
    <section id="specials" class="specials">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Specials</h2>
                <p>Check Our Special Offers</p>
            </div>

            <div class=" mt-4 mt-lg-0">
                <div class="tab-content">
                    @foreach ($data['offer'] as $data3)
                        <div>
                            <div class="row">

                                <div class="col-lg-6 details ">
                                    <h3><a href="{{ route('home.menu.view', $data3->id) }}">{{ $data3->name }}</a></h3>
                                    <p class="fst-italic">{{ $data3->description }}</p>
                                    <p><b>Price: ${{ $data3->price }}</b></p>
                                </div>
                                <div class="col-lg-3 text-center order-lg-2">
                                    <img src="{{ asset($data3->image) }}" alt="" class="img-fluid">
                                </div>
                                <br><br>

                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>

        </div>
    </section><!-- End Specials Section -->
@endif
<x-footer />

/*
