@extends('layouts.auth')
@section('content')
    @include('partials._alerts')
    <div class="card">
        <div class="card-body">
            <h4 class="text-center">SIGN UP</h4>
            <hr>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" id="name" name="name" type="text" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <div class="alert alert-danger my-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input class="form-control" id="email" name="email" type="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="alert alert-danger my-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input class="form-control" id="phone" name="phone" type="text" value="{{ old('phone') }}" required>
                    @error('phone')
                        <div class="alert alert-danger my-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input class="form-control" id="address" name="address" type="text" value="{{ old('address') }}" required>
                    @error('address')
                        <div class="alert alert-danger my-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" name="password" type="password" required>
                </div>
                <div class="form-group">
                    <label for="password-confirm">Confirm Password</label>
                    <input class="form-control" id="password-confirm" name="password_confirmation" type="password" required>
                    @error('password')
                        <div class="alert alert-danger my-1">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-success mt-2" type="submit">Register</button>
                <a class="btn btn-outline-primary mt-2" href="/login">Go to Login</a>
            </form>
        </div>
    </div>
@endsection
