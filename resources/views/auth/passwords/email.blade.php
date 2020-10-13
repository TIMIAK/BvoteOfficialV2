@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col col-md-8">
        <div class="card">
            <h5 class="card-header text-dark text-center">Reset Password</h5>
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="card-body">
                    <label for="email">Email Address</label>
                    <input class="form-control @error('email') is-invalid @enderror " name="email" id="email" type="email" placeholder="Enter your Email Address">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="row justify-content-center pt-3">
                        <button type="submit" class="btn btn-primary">Send Reset Link</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
