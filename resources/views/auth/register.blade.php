@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark">
                <div class="card-header">
                    <h1 class="text-center"><i>Register</i></h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right"><i>First Name</i></label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right"><i>last Name</i></label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right"><i>User Name</i></label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><i>E-Mail Address</i></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><i>Password</i></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><i>Confirm Password</i></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <a class="btn btn-primary" href="{{ route('login') }}">
                                    {{ __('login') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container pt-3">
    <div class="row justify-content-center">
        <div class="col col-md-8">
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="{{asset('img/banner/vote5.jpg')}}" class="card-img" alt="..." style="height: 100%">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Registration Form</h5>
                      <form action="{{route('register')}}" class="form-contact contact_form" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col">
                                <label for="first_name">First Name</label>
                                <input class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" type="text" placeholder="Enter your Fisrt Name" value="{{old('first_name')}}" required>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col">
                                <label for="last_name">Last Name</label>
                                <input class="form-control @error('last_name') is-invalid @enderror " name="last_name" id="last_name" type="text" placeholder="Enter your Last Name" value="{{old('last_name')}}" required>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="username">User Name</label>
                                <input name="username" id="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Enter your User Name" value="{{old('username')}}" required>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="email">Email Address</label>
                                <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email" placeholder="Enter your Email" value="{{old('email')}}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="password">Password</label>
                                <input  id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Enter your Password" value="{{old('password')}}" required autocomplete="new-password">
                                {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> --}}
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col">
                                <label for="password-confirm">Confirm Password</label>
                                <input id="password-confirm" name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" required autocomplete="new-password">
                                {{-- <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> --}}
                            </div>
                        </div>
                        <div class="form-group text-center text-md-right mt-3">
                          <button type="submit" class="button button--active button-contactForm">Register</button>
                        </div>
                      </form>
                      <div class="row justify-content-between">
                          <p class="card-text"><a href="{{route('login')}}" class="btn btn-default">Login</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
