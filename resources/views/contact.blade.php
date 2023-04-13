<x-header>
    @section('title', 'Contact')
</x-header>
<br>
@if (session('success'))
    <script>
        alert('{{ session('success') }}');
    </script>
@endif
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title pt-5">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div>
    </div>

    <div class="container " data-aos="fade-up">
        <!-- For each Branch -->
        @foreach ($contact as $branch)
            <div class="row mt-3 mb-3 section2">

                <div class="col-lg-4">
                    <div class="section-title pt-5">
                        <p>{{ $branch->name }}</p>
                    </div>
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>{{ $branch->location }}</p>
                        </div>



                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>{{ $branch->phone_number }}</p>
                        </div>

                    </div>

                </div>

                <div data-aos="fade-up" class="col-lg-8 mt-5 mt-lg-0 mb-3">
                    <iframe style="border:0; width: 100%; height: 350px; " src="{{ $branch->url_address }}"
                        frameborder="0" allowfullscreen></iframe>
                </div>
                <hr>

            </div>
        @endforeach
        <!-- End For Each Branch -->

        <!-- Contact Form -->
        <div>
            <form action="{{ route('contact') }}" method="post" role="form" class="php-email-form">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                            required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Your Email" required>
                    </div>
                </div>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>

                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" name="send">Send Message</button></div>
            </form>
        </div>
        <!-- End Contact Form -->

</section>
<!-- End Contact Section -->
<x-footer />
