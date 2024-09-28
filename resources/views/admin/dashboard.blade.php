@extends('layouts.admin')

@section('content')
    <div class="row d-flex justify-content-center gap-2">
        <div class="col-md-2">
            <div class="card bg-dark border-info border-2 text-white shadow">
                <div class="card-header">Total Cars</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $totalCars }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card bg-dark border-info border-2 text-white shadow">
                <div class="card-header">Available Cars</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $availableCars }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card bg-dark border-info border-2 text-white shadow">
                <div class="card-header">Total Rentals</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $totalRentals }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card bg-dark border-info border-2 text-white shadow">
                <div class="card-header">Total Earnings</div>
                <div class="card-body">
                    <h5 class="card-title">${{ $totalEarnings }}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
