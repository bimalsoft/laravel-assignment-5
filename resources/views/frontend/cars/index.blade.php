@extends('layouts.app')

@section('content')
    @include('partials._alerts')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Let's Discover The World Together</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
    <div class="container mt-4">
        <h2>All Cars</h2>
        <form method="GET" action="{{ route('frontend.cars.index') }}">
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="type">Car Type</label>
                    <select class="form-control" id="type" name="type">
                        <option value="">All</option>
                        @foreach ($car_types as $type)
                            <option value="{{ $type->car_type }}" @if (request('type') == $type->car_type) selected @endif>{{ $type->car_type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="brand">Brand</label>
                    <select class="form-control" id="brand" name="brand">
                        <option value="">All</option>
                        @foreach ($car_brands as $brand)
                            <option value="{{ $brand->brand }}" @if (request('brand') == $brand->brand) selected @endif>{{ $brand->brand }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="search">Search</label>
                    <input class="form-control" id="search" name="price" type="text" value="{{ request('price') }}" placeholder="Max Price per Day">
                </div>
                <div class="form-group col-md-2">
                    <label for="search">&nbsp;</label>
                    <button class="btn btn-primary btn-block" type="submit">Filter</button>
                </div>
            </div>
        </form>

        <div class="mt-4">
            <div class="row">
            @foreach ($cars as $car)

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img class="img-fluid" src="{{ $car->image }}" alt="{{ $car->brand }} - {{ $car->car_type }}">
                            <div class="p-4">

                                <h5 class="text-decoration-none">{{ $car->brand }} - {{ $car->car_type }}</h5>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0">Per Day<br> ${{ $car->daily_rent_price }}</h6>
                                        <a class="btn btn-outline-success" href="{{ route('frontend.cars.show', $car->id) }}">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection
