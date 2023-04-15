@extends('layouts.auth')
@section('title','Login')
@section('content')
<!-- Header -->
<div class="text-center mb-5">
    <p class="mb-3">
      <i class="fa fa-2x fa-circle-notch text-primary-light"></i>
    </p>
    <h1 class="fw-bold mb-2">
      Sign In
    </h1>
    <p class="fw-medium text-muted">
      Welcome, please login or <a href="{{ route('register') }}">sign up</a> for a new account.
    </p>
  </div>
  <!-- END Header -->

  <!-- Sign In Form -->
  <div class="row g-0 justify-content-center">
    <div class="col-sm-8 col-xl-4">
      <form class="js-validation-signin" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-4">
            <input type="text" class="form-control form-control-lg form-control-alt py-3 @error('email') is-invalid @enderror" id="login-username" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-4">
            <input type="password" class="form-control form-control-lg form-control-alt py-3 @error('password') is-invalid @enderror" id="login-password"  name="password" required autocomplete="current-password" placeholder="Password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div>
            <a class="text-muted fs-sm fw-medium d-block d-lg-inline-block mb-1" href="{{ route('password.request') }}">
              Forgot Password?
            </a>
          </div>
          <div>
            <button type="submit" class="btn btn-lg btn-alt-primary">
              <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Sign In
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
<!-- END Sign In Form -->
@endsection
