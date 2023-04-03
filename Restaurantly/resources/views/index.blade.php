<x-header>
    @section('title', 'Home')
</x-header>
<html>

<body>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Welcome to <span>Restaurantly</span></h1>
                    <h2>Delivering great food for more than 18 years!</h2>

                    <div class="btns">
                        <a href="{{ route('home.menu') }}" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
                        <a href="{{ route('home.reservations') }}" class="btn-book animated fadeInUp scrollto">Book a
                            Table</a>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative"
                    data-aos="zoom-in" data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
                </div>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                            <img src="{{ asset('/images/about.jpg') }}" alt="Restaurant picture">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Experience Exceptional Flavors at Our Restaurant</h3>
                        <p class="fst-italic">
                            Taking pride in creating a warm and hospitable atmosphere allowing our dear customers to
                            savor their meals in total comfort.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i>Farm-to-Table Ingredients: Fresh, sustainable dining
                                experience.</li>
                            <li><i class="bi bi-check-circle"></i> Unique Menu Selection: Exciting international
                                flavors, something for everyone.</li>
                            <li><i class="bi bi-check-circle"></i> Exceptional Service: Warm hospitality, stress-free
                                dining experience.</li>
                        </ul>
                        <p>
                            Our mission
                            is to serve the finest and freshest
                            ingredients, prepared with care by
                            our skilled chefs.
                            Whether you are joining us for a
                            romantic dinner for two or a lively gathering with friends
                            and family.
                            We sincerely appreciate your patronage and look forward to exceeding your expectations.

                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Why Us</h2>
                    <p>Why Choose Our Restaurant</p>
                </div>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box" data-aos="zoom-in">
                            <span>01</span>
                            <h4>Unique Atmosphere</h4>
                            <p> Distinctive ambiance, memorable experience.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in">
                            <span>02</span>
                            <h4>Seasonal Specials</h4>
                            <p>Fresh, rotating dishes.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in">
                            <span>03</span>
                            <h4> Customizable Options</h4>
                            <p>Catering to dietary preferences</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Why Us Section -->


        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Events</h2>
                    <p>Organize Your Events in our Restaurant</p>
                </div>

                <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="{{ asset('/images/event-birthday.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Birthday Parties</h3>
                                    <div class="price">
                                        <p><span>$189</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Are you searching for the ideal venue to celebrate your upcoming birthday?
                                        Look no further than our restaurant, where we pride ourselves on creating
                                        exceptional,
                                        tailor-made events.
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Elegant private dining areas to our
                                            exquisite menus.</li>
                                        <li><i class="bi bi-check-circled"></i> Custom birthday cakes and specialty
                                            cocktails.</li>
                                        <li><i class="bi bi-check-circled"></i> Skilled event coordinator will work with
                                            you every step.</li>
                                    </ul>
                                    <p>
                                        Contact us today to
                                        begin planning your dream
                                        birthday party and let us exceed your expectations.
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="{{ asset('/images/event-private.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Private Parties</h3>
                                    <div class="price">
                                        <p><span>$290</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Looking for a chic and exclusive venue to host your upcoming event?
                                        You are looking at the right place to build exceptional memories.
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i>Exceptional service and attention to
                                            detail.</li>
                                        <li><i class="bi bi-check-circled"></i>A range of stunning private dining areas
                                            and event spaces .</li>
                                        <li><i class="bi bi-check-circled"></i>Customized experience that reflects your
                                            unique style.</li>
                                    </ul>
                                    <p>
                                        We'll work with you to create an unforgettable event that exceeds your
                                        expectations.
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="{{ asset('/images/event-custom.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Custom Parties</h3>
                                    <div class="price">
                                        <p><span>$99</span></p>
                                    </div>
                                    <p class="fst-italic">
                                        Are you searching for a truly unique and unforgettable way to celebrate your
                                        next special occasion?Look no further than our restaurant.
                                    </p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Design a one-of-a-kind party that
                                            reflects your style and vision.</li>
                                        <li><i class="bi bi-check-circled"></i> Custom menus featuring the finest and
                                            freshest ingredients</li>
                                        <li><i class="bi bi-check-circled"></i> Spacious event spaces can accommodate
                                            large groups.</li>
                                    </ul>
                                    <p>
                                        Whatever event you want to celebrate, let us help you create a
                                        unforgettable experience on you and your guests.
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                </div>

            </div>
        </section><!-- End Events Section -->



        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>What they're saying about us</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        @foreach ($testimonials as $testimony)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{ $testimony->testimony }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{ asset($testimony->image) }}" class="testimonial-img" alt="">
                                    <h3>{{ $testimony->name }} </h3>
                                    <h4>{{ $testimony->job }}</h4>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach

                    </div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">

            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Some photos from Our Restaurant</p>
                </div>
            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-0">
                    <?php
                    $path = public_path('images/gallery');
                    $directory = scandir($path);
                    foreach ($directory as $photo) {
                        if ($photo == '.' || $photo == '..') {
                            continue;
                        }
                        $name = "/images/gallery/$photo";
                        echo '<div class="col-lg-3 col-md-4"><div class="gallery-item"><a href="' .
                            $name .
                            '" class="gallery-lightbox" data-gall="gallery-item">
                                                                                                                                                                        <img src="' .
                            $name .
                            '" alt="" class="img-fluid"></a></div></div>';
                    }
                    
                    ?>
                </div>
            </div>
        </section><!-- End Gallery Section -->


        <!-- ======= Chefs Section ======= -->

        <section id="chefs" class="chefs">
            <div class="container" data-aos="fade-up">

                <?php
                $path = public_path('images/chefs');
                $directory = scandir($path);
                ?>
                <div class="section-title">
                    <h2>Chefs</h2>
                    <p>Our Proffesional Chefs</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src='{{asset('/images/chefs/'.$directory[2])}}' class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Master Chef</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <img src='{{asset('/images/chefs/'.$directory[3])}}' class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Patissier</h4>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                            <img src='{{asset('/images/chefs/'.$directory[4])}}'class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Cook</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Chefs Section -->




    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <x-footer />

</body>

</html>
