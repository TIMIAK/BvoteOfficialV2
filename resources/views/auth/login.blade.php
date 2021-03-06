@extends('layouts.app')
@section('content')
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
                      <h5 class="card-title">Login Form</h5>
                      <form action="{{route('login')}}" class="form-contact contact_form" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="email">Email Address</label>
                                <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email" placeholder="Enter your email" value="{{old('email')}}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="password">Password</label>
                                <input class="form-control @error('password') is-invalid @enderror " name="password" id="password" type="password" placeholder="Enter your Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group text-center text-md-right mt-3">
                          <button type="submit" class="button button--active button-contactForm">Login</button>
                        </div>
                      </form>
                      <div class="row justify-content-between">
                          <p class="card-text"><a href="{{route('register')}}" class="btn btn-default">Register</a></p>
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
