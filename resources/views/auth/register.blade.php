@extends('layouts.auth')

@push('after-style')
    <style>
    .btn-primary {
        margin-top: 11px !important;
    }
    </style>
@endpush

@section('title')
    To Do List | Registrasi
@endsection

@section('content')

{{-- Register --}}
<div class="login-modal d-flex justify-content-center align-items-center">
    <div class="login-form d-flex justify-content-center align-items-center">
        <div class="login-content">
            <h1 class="title text-center">Let's Join Us!</h1>
            <form method="POST" action="{{route('register')}}">
                @csrf
                <div class="email-input d-flex flex-column">
                    <label for="name" class="input-title">Nama Lengkap</label>
                    <input placeholder="Masukan nama lengkap" id="name" type="text" class="input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
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
                <div class="password-input d-flex flex-column">
                    <label for="con-pass">Konfirmasi Password *</label>
                    <input placeholder="Konfirmasi password" id="password-confirm" type="password" class="input form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <button class="btn btn-primary text-center">Registrasi</button>
            </form>
            <div
            class="login-footer text-center d-flex justify-content-center align-items-center"
            >
            Sudah punya akun?<a href="{{ url('/') }}">Masuk</a>
            </div>
        </div>
    </div>
</div>

@endsection
