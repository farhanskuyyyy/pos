@extends('layouts.auth')
@section('title','Reset Password')

@section('content')
    <!-- Header -->
    <div class="text-center mb-5">
        <p class="mb-3">
            <i class="fa fa-2x fa-circle-notch text-primary-light"></i>
        </p>
        <h1 class="fw-bold mb-2">
            Reset Password
        </h1>
    </div>
    <!-- END Header -->

    <!-- Sign Up Form -->
    <div class="row g-0 justify-content-center">
        <div class="col-sm-4 col-xl-6">
            <form method="POST" action="{{ route('password.update') }}" class="js-validation-signup">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="mb-4">
                    <input id="email" type="email" class="form-control  form-control-lg form-control-alt py-3 @error('email') is-invalid @enderror"
                        name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <input id="password" type="password" class="form-control  form-control-lg form-control-alt py-3 @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" placeholder="New Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <input id="password-confirm" type="password" class="form-control form-control-lg form-control-alt py-3 " name="password_confirmation"
                        required autocomplete="new-password" placeholder="New Password Confirmation">
                </div>

                <div class="mb-4">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Sign Up Form -->
@endsection
