@extends('layouts.auth')

@push('after-style')
    <style>
    .btn-primary {
        margin-top: 11px !important;
    }
    </style>
@endpush

@section('title')
    To Do List | Login
@endsection


@section('content')

{{-- Login --}}
<div class="login-modal d-flex justify-content-center align-items-center">
    <div class="login-form d-flex justify-content-center align-items-center">
        <div class="login-content">
            <h1 class="title text-center">Welcome Back!</h1>
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="email-input d-flex flex-column">
                    <label for="email" class="input-title">Alamat Email</label>
                    <input placeholder="Masukan alamat email" id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="password-input d-flex flex-column">
                    <label for="password" class="input-title">Password</label>
                    <input placeholder="Password" id="password" type="password" class="input form-control" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <button class="btn btn-primary text-center">
                    Masuk
                </button>
            </form>
            <div class="login-footer text-center d-flex justify-content-center align-items-center">
                Belum punya akun?<a href="{{url('/register')}}">Registrasi</a>
            </div>
        </div>
    </div>
</div>

@endsection
