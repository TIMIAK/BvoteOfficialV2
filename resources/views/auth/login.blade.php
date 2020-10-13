@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark">
                <div class="card-header">
                    <h1 class="text-center"><i>Login</i></h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <div class="col-md-9 input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i>E-Mail Address</i></span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-md-9 input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i>Password</i></span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-primary" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            @if (Route::has('password.request'))
                                <a class="link-danger pt-2" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-8">
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="{{asset('img/banner/vote5.jpg')}}" class="card-img" alt="..." style="height: 100%">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Login Form</h5>
                      <form action="{{route('login')}}" class="form-contact contact_form" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="email">Email Address</label>
                                <input class="form-control" name="email" id="email" type="email" placeholder="Enter your email" value="{{old('email')}}">
                            </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12">
                              <label for="password">Password</label>
                              <input class="form-control" name="password" id="password" type="password" placeholder="Enter your Password">
                          </div>
                        </div>
                        <div class="form-group text-center text-md-right mt-3">
                          <button type="submit" class="button button--active button-contactForm">Login</button>
                        </div>
                      </form>
                      <div class="row justify-content-between">
                          <p class="card-text"><a href="{{route('register')}}" class="btn btn-default">Sign Up</a></p>
                          <p class="card-text"><a href="{{route('password.request')}}" class="btn btn-default">Forgot Password?</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
