@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('') }}</div> --}}
                <h5 class="card-header text-center">Verify Your Email Address</h5>

                <div class="card-body">
                    <h5>Before proceeding, please check your email for a verification link.</h5>
                    <h5>If you did not receive the email</h5><a href="#" onclick="event.preventDefault();
                        document.getElementById('link-resend').submit();
                    ">click here to request another</a>
                    
                    <form class="d-inline" id="link-resend" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        {{-- <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>. --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
