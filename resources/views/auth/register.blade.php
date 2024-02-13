

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}




@extends('layouts.app')
 
@section('content') <body class="bg-white">
    <div class="container-fluid">
      <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
          <div class="login d-flex align-items-center py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto pl-5 pr-5">
                  <h3 class="login-heading mb-4">New Buddy!</h3>
                  <form method="POST" action="{{ route('register') }}"> @csrf <div class="form-label-group">
                      <input type="text" value="{{ old('name') }}" id="inputName" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name" name="name">
                      <label for="inputName">Name</label>
                      <span class="text-danger"> @error('name') {{ $message }} @enderror </span>
                    </div>
                    <div class="form-label-group">
                      <input type="text" value="{{ old('email') }}" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email">
                      <label for="inputEmail">Email address</label>
                      <span class="text-danger"> @error('email') {{ $message }} @enderror </span>
                    </div>
                    <div class="form-label-group">
                      <input type="password" value="{{ old('password') }}" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                      <label for="inputPassword">Password</label>
                      <span class="text-danger"> @error('password') {{ $message }} @enderror </span>
                    </div>
                    <div class="form-label-group">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password">
                      <label for="password-confirm">Confirm Password</label>
                    </div>
                    <button type="submit" class="btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Sign Up</button>
                    <div class="text-center pt-3"> Already have an Account? <a class="font-weight-bold" href="{{ route('login') }}">Sign In</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body> @endsection