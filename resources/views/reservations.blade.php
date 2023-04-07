<x-header>
    @section('title', 'Book a Table')
</x-header>
<p>
    <br><br><br>
</p>

<style>
    input {
        color-scheme: dark;
    }
</style>

<!-- 
    TODO

    check names according to reservation table and ReservationStoreRequest
 -->

<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Reservation</h2>
            <p>Book a Table</p>
        </div>

        <form action="{{ route('bookTable') }}" method="post" role="form" class="php-email-form" data-aos="fade-up"
            data-aos-delay="100">
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="first_name" class="form-control" id="name" placeholder="First Name"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="last_name" class="form-control" id="name" placeholder="Last Name"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                        data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="datetime-local" name="date" class="form-control" id="date" placeholder="Date"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars"
                        min="{{ $minDate->format('Y-m-d\TH:i:s') }}" max="{{ $maxDate->format('Y-m-d\TH:i:s') }}">
                    <div class="validate"></div>
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="number" class="form-control" name="people" id="people" placeholder="# of people"
                        data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                    <div class="validate"></div>
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
            </div>
            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm
                    your reservation. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Book a Table</button></div>
        </form>

    </div>
</section>


<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Reservation</h2>
            <p>Book an Event</p>
        </div>

        <form action="{{ route('bookEvent') }}" method="post" role="form" class="php-email-form" data-aos="fade-up"
            data-aos-delay="100">
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="first_name" class="form-control" id="name" placeholder="Your Name"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" name="last_name" class="form-control" id="name" placeholder="Your Name"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email"
                        placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="tel" class="form-control" name="phone" id="phone"
                        placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="datetime-local" name="date" class="form-control" id="date"
                        placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars"
                        min="{{ $minDate->format('Y-m-d\TH:i:s') }}" max="{{ $maxDate->format('Y-m-d\TH:i:s') }}">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="number" class="form-control" name="people" id="people"
                        placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                    <div class="validate"></div>
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
            </div>
            <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm
                    your reservation. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Book an Event</button></div>
        </form>

    </div>
</section>

<x-footer />
