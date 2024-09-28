@extends('layouts.auth')
@section('content')
    @include('partials._alerts')
    <div class="card">
        <div class="card-body">
            <h4 class="text-center">SIGN IN</h4>
            <hr>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input class="form-control" id="email" name="email" type="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" name="password" type="password" required>
                </div>
                <button class="btn btn-primary mt-2 btn-block" type="submit">Login</button>
                <hr>
                <div class="float-end mt-3">
                                <span>
                                    Don't have an account?
                                    <a class="text-center h6" href="/register">Sign Up </a>
                                </span>
                </div>
            </form>


        </div>
    </div>
@endsection
