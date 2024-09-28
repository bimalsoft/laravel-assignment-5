@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center mt-5 mb-4">Contact Page</h3>
                <p>Our website provides a wide range of cars for rent, catering to various needs and preferences. Whether you need a compact car for a quick city trip or a spacious SUV for a family vacation, we have got you covered.</p>
                <div class="contact-form mb-5">
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" name="name" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" id="email" name="email" type="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button class="btn btn-primary mt-2" type="submit">Submit</button>
                </form>
                </div>
            </div>
        </div>

    </div>
@endsection
