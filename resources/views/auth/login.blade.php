@extends('layouts.app')

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

 
@section('content') 
<body class="bg-white">
    <div class="container-fluid">
      <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
          <div class="login d-flex align-items-center py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto pl-5 pr-5">
                  <h3 class="login-heading mb-4">Welcome back!</h3>
                  <form action="{{ route('login') }}" method="POST"> @csrf <div class="form-label-group">
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
                      <button type="submit" class="btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Sign in</button>
                      <div class="text-center pt-3"> Don’t have an account? <a class="font-weight-bold" href="{{ route('register') }}">Sign Up</a>
                      </div>
                  </form>
                  <hr class="my-4">
                  <p class="text-center">LOGIN WITH</p>
                  <div class="row">
                    <div class="col pr-2">
                      <button class="btn pl-1 pr-1 btn-lg btn-google font-weight-normal text-white btn-block text-uppercase" type="submit">
                        <i class="fab fa-google mr-2"></i> Google </button>
                    </div>
                    <div class="col pl-2">
                      <button class="btn pl-1 pr-1 btn-lg btn-facebook font-weight-normal text-white btn-block text-uppercase" type="submit">
                        <i class="fab fa-facebook-f mr-2"></i> Facebook </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body> @endsection