@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">

        @if (session()->has('registrasi-sukses'))
        <div class="text-center alert alert-success alert-dismissible fade show" role="alert">
                {{ session('registrasi-sukses') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        @if (session()->has('loginGagal'))
        <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginGagal') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/login" method="POST">
                @csrf
                <div class="d-flex justify-content-center">
                    <img class="mb-4 img-thumbnail" src="/img/person.svg" width="100" height="100">
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
    
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3"> 
                Not Registered? <a href="/register">Register Now!</a>
            </small>
        </main>
    </div>
</div>


@endsection