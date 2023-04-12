@extends('layouts.auth')

@section('content')
    <!-- Header -->
    <div class="text-center mb-5">
        <p class="mb-3">
        <i class="fa fa-2x fa-circle-notch text-primary-light"></i>
        </p>
        <h1 class="fw-bold mb-2">
        Create Account
        </h1>
        <p class="fw-medium text-muted">
        Get your access today in one easy step or <a href="{{ route('login') }}">sign in</a>
        </p>
    </div>
    <!-- END Header -->

    <!-- Sign Up Form -->
    <div class="row g-0 justify-content-center">
        <div class="col-sm-8 col-xl-4">
        <form class="js-validation-signup" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <input type="text" class="form-control form-control-lg form-control-alt py-3  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="signup-username" placeholder="Username">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-4">
                <input type="email" class="form-control form-control-lg form-control-alt py-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="signup-email" placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-4">
                <input type="password" class="form-control form-control-lg form-control-alt py-3 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="signup-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-4">
                <input type="password" class="form-control form-control-lg form-control-alt py-3 " name="password_confirmation" required autocomplete="new-password" id="signup-password-confirm" placeholder="Confirm Password">
                @error('password-confirm')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-4">
                <div class="d-md-flex align-items-md-center justify-content-md-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="signup-terms" name="signup-terms">
                        <label class="form-check-label" for="signup-terms">I agree to Terms &amp; Conditions</label>
                    </div>
                    <div class="py-2">
                        <a class="fs-sm fw-medium" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#one-signup-terms">View Terms</a>
                    </div>
                </div>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-lg btn-alt-success">
                <i class="fa fa-fw fa-plus me-1 opacity-50"></i> Sign Up
            </button>
            </div>
        </form>
        </div>
    </div>
    <!-- END Sign Up Form -->

    <!-- Terms Modal -->
    <div class="modal fade" id="one-signup-terms" tabindex="-1" role="dialog" aria-labelledby="one-signup-terms" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
          <div class="modal-content">
            <div class="block block-rounded block-transparent mb-0">
              <div class="block-header block-header-default">
                <h3 class="block-title">Terms &amp; Conditions</h3>
                <div class="block-options">
                  <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-fw fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="block-content">
                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
              </div>
              <div class="block-content block-content-full text-end bg-body">
                <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">I Agree</button>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- END Terms Modal -->
@endsection
