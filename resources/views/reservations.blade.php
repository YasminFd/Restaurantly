<x-header>
    @section('title', 'Book a Table')
</x-header>

<style>
    * {
        color-scheme:dark;
    }
    </style>
<p>
    <br><br><br>
</p>
<p>
    <br><br><br>
</p>
<div>
    @if (session()->has('danger'))
        <div class="mb-4 rounded-lg bg-red-100 p-4 text-sm text-red-700 dark:bg-red-200 dark:text-red-800" role="alert">
            <span class="font-medium">Danger alert!</span> {{ session()->get('danger') }}
        </div>
    @endif

    @if (session()->has('success'))
        <div class="mb-4 rounded-lg bg-green-100 p-4 text-sm text-green-700 dark:bg-green-200 dark:text-green-800"
            role="alert"><span class="font-medium">Success alert!</span>
            {{ session()->get('success') }}
        </div>
    @endif

    @if (session()->has('warning'))
        <div class="mb-4 rounded-lg bg-yellow-100 p-4 text-sm text-yellow-700 dark:bg-yellow-200 dark:text-yellow-800"
            role="alert"><span class="font-medium">Warning alert!</span>
            {{ session()->get('warning') }}
        </div>
    @endif

</div>

<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Reservation</h2>
            <p>Book a Table</p>
        </div>

        <form action="{{ route('bookTable') }}" method="get" role="form" class="php-email-form" data-aos="fade-up"
            data-aos-delay="100">
            @csrf
            @method('GET')
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
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                        data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="tel" class="form-control" name="phone_number" id="phone" placeholder="Phone"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="datetime-local" name="res_date" class="form-control" id="date" placeholder="Date"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars"
                        min="{{ $minDate->format('Y-m-d\TH:i') }}" max="{{ $maxDate->format('Y-m-d\TH:i') }}">
                    <div class="validate"></div>
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="number" class="form-control" name="guest_number" id="people" placeholder="Guests"
                        data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                    <div class="validate"></div>
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3 ">
                    <select name="branch_id" class="form-control">
                        @foreach ($branches as $branch)
                            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                        @endforeach
                    </select>
                    <div class="validate"></div>
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <select name="table_id" class="form-control" >
                        @foreach ($tables as $table)
                            <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->guest_number }} Guests)
                            </option>
                        @endforeach
                    </select>
                    <div class="validate"></div>
                </div>
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

        <form action="{{ route('bookEvent') }}" method="get" role="form" class="php-email-form" data-aos="fade-up"
            data-aos-delay="100">
            @csrf
            @method('GET')
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="first_name" class="form-control" id="name"
                        placeholder="First Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" name="last_name" class="form-control" id="name"
                        placeholder="Last Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                        data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="tel" class="form-control" name="phone_number" id="phone"
                        placeholder="Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="datetime-local" name="res_date" class="form-control" id="date"
                        placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars"
                        min="{{ $minDate->addWeek()->format('Y-m-d\TH:i') }}"
                        max="{{ $maxDate->addWeek()->format('Y-m-d\TH:i') }}">
                    <div class="validate"></div>
                </div>

                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <select name="branch_id" class="form-control" >
                        @foreach ($branches as $branch)
                            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                        @endforeach
                    </select>
                    <div class="validate"></div>
                </div>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
            </div>

            <div class="text-center"><button type="submit">Book an Event</button></div>
        </form>
    </div>
</section>


<x-footer />
