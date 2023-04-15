@extends('layouts.auth')
@section('title','Forgot Password')

@section('content')
    <!-- Header -->
    <div class="text-center mb-5">
        <p class="mb-3">
            <i class="fa fa-2x fa-circle-notch text-primary-light"></i>
        </p>
        <h1 class="fw-bold mb-2">
            Password Reminder
        </h1>
        <p class="fw-medium text-muted">
            Please provide your account’s email or username and we will send you your password.
        </p>
    </div>
    <!-- END Header -->

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <!-- Reminder Form -->
    <div class="row g-0 justify-content-center">
        <div class="col-sm-8 col-xl-4">
            <form class="js-validation-reminder" action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <input type="text" class="form-control form-control-lg form-control-alt py-3  @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        id="reminder-credential" placeholder="Username or Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-lg btn-alt-primary">
                        <i class="fa fa-fw fa-envelope me-1 opacity-50"></i> Send Mail
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- END Reminder Form -->
@endsection
