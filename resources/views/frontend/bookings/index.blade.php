@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h3 class="text-center mt-5 mb-4">My Bookings</h3>
            @include('partials._alerts')
            <div class="rounded p-2 shadow card">
                <div class="mt-4">
                    <h4>Current Bookings</h4>
                    <hr>
                        <div class="card-body">
                            <table class="table">
                        <thead>
                            <tr>
                                <th>Car</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Total Cost</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($currentBookings as $booking)
                                <tr>
                                    <td>{{ $booking->car->brand }} - {{ $booking->car->car_type }}</td>
                                    <td>{{ $booking->start_date }}</td>
                                    <td>{{ $booking->end_date }}</td>
                                    <td>${{ $booking->total_cost }}</td>
                                    <td>
                                        @if (now()->lt($booking->start_date))
                                            <div class="d-flex flex-wrap">

                                                @if ($booking->status == 'Pending')
                                                    <div class="p-2">
                                                        <form action="{{ route('frontend.rentals.update', $booking->id) }}" method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input name="status" type="hidden" value="Ongoing">
                                                            <button class="btn btn-sm btn-outline-success" type="submit">Ongoing</button>
                                                        </form>
                                                    </div>
                                                @endif

                                                @if ($booking->status == 'Ongoing')
                                                    <div class="p-2">
                                                        <form action="{{ route('frontend.rentals.update', $booking->id) }}" method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input name="status" type="hidden" value="Completed">
                                                            <button class="btn btn-sm btn-outline-success" type="submit">Completed</button>
                                                        </form>
                                                    </div>
                                                @endif

                                                <div class="p-2">
                                                    <form action="{{ route('frontend.rentals.destroy', $booking->id) }}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input name="status" type="hidden" value="Canceled">
                                                        <button class="btn btn-sm btn-outline-danger" type="submit">Cancel Booking</button>
                                                    </form>
                                                </div>
                                            </div>
                                        @else
                                            <div class="row">
                                                <div class="col-4">
                                                    <span class="text-danger">Ride already started</span>
                                                </div>
                                                <div class="col-4">
                                                    <form action="{{ route('frontend.rentals.update', $booking->id) }}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input name="status" type="hidden" value="Completed">
                                                        <button class="btn btn-sm btn-outline-success" type="submit">Completed</button>
                                                    </form>
                                                </div>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                        </div>
                </div>
                <div class="mt-5">
                    <h4>Past Bookings</h4>
                    <hr>
                    <div class="card-body">
                        <table class="table">
                        <thead>
                            <tr>
                                <th>Car</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Total Cost</th>
                                <th>Status Was</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pastBookings as $booking)
                                <tr>
                                    <td>{{ $booking->car->brand }} - {{ $booking->car->car_type }}</td>
                                    <td>{{ $booking->start_date }}</td>
                                    <td>{{ $booking->end_date }}</td>
                                    <td>${{ $booking->total_cost }}</td>
                                    <td>
                                        @if ($booking->status == 'Pending')
                                            <span class="badge bg-primary text-white">Pending</span>
                                        @elseif ($booking->status == 'Ongoing')
                                            <span class="badge bg-warning text-white">Ongoing</span>
                                        @elseif ($booking->status == 'Completed')
                                            <span class="badge bg-success text-white">Completed</span>
                                        @elseif ($booking->status == 'Canceled')
                                            <span class="badge bg-danger text-white">Canceled</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
