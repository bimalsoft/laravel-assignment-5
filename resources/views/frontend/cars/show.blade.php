@extends('layouts.app')

@section('content')
    @include('partials._alerts')

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{ asset($car->image) }}" alt="{{ $car->brand }} - {{ $car->car_type }}">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <h3 class="mb-3">{{ $car->brand }}</h3>
                            <p>Model: {{ $car->model }}</p>
                            <p>Daily Rent Price: <span class="font-weight-bold">$ {{ $car->daily_rent_price }}</span></p>
                            <p>Year: {{ $car->year }}</p>
                            <p>Type: {{ $car->car_type }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="mb-5">
                        <div class="bg-white" style="padding: 30px;">
                            <form id="front_rental_form" action="{{ route('frontend.rentals.store') }}" method="POST">
                                @csrf
                                <input name="car_id" type="hidden" value="{{ $car->id }}">

                                <div class="row">
                                    <h4 class="text-center w-100">Book This Car</h4>
                                    <div class="form-group">
                                        <label for="start_date">Start Date</label>
                                        <input class="form-control d-inline-block" id="start_date" name="start_date" type="text" required>
                                        @error('start_date')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="end_date">End Date</label>
                                        <input class="form-control d-inline-block" id="end_date" name="end_date" type="text" required>
                                        @error('end_date')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block mt-2" id="submitBtn" type="submit">Book</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function() {
            var unavailableDates = @json($unavailableDates);

            function disableDates(date) {
                var today = new Date();
                today.setHours(0, 0, 0, 0);
                var string = jQuery.datepicker.formatDate('yy-mm-dd', date);

                if (date < today || unavailableDates.indexOf(string) != -1) {
                    return [false];
                } else {
                    return [true];
                }
            }

            $("#start_date, #end_date").datepicker({
                dateFormat: 'yy-mm-dd',
                beforeShowDay: disableDates
            });

            $('#front_rental_form').on('submit', function() {
                $('#submitBtn').prop('disabled', true);
                $('#submitBtn').html('Processing...');
            });
        });
    </script>
@endsection
