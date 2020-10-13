@extends('layouts.app')
@section('content')

<h1 class="text-center pt-3 text-white">Create Poll</h1>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <form action="{{route('poll.store')}}" class="form-contact contact_form" method="post">
        @csrf
        <div class="row">
            <div class="form-group col-12">
                <label for="office"><h4 class="text-white">Office: </h4></label>
                <input class="form-control text-white" name="office" id="office" type="text" placeholder="E.g Class Representative">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-12">
                <label for="candidates"><h4 class="text-white">Candidates: </h4><span>If more than one seperate with a Coma " , "</span></label>
                <textarea name="candidates" class="form-control text-white" id="candidates" cols="30" rows="10" placeholder="E.g Timothy Adewale,Olishe Samuel" ></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-12">
                <label for="allowedvoters"><h4 class="text-white">Email of Allowed Voters: </h4><span>If more than one seperate with a Coma " , "</span></label>
                <textarea class="form-control text-white" name="allowedvoters" id="allowedvoters" type="text" placeholder="E.g example1@gmail.com,example2@gmail.com"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="start_date"><h4 class="text-white">Start Date: </h4></label>
                <input class="form-control text-white" name="start_date" id="start_date" type="date">
            </div>
            <div class="form-group col-6">
                <label for="start_time"><h4 class="text-white">Start Time: </h4></label>
                <input class="form-control text-white" name="start_time" id="start_time" type="time">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="end_date"><h4 class="text-white">End Date: </h4></label>
                <input class="form-control text-white" name="end_date" id="end_date" type="date">
            </div>
            <div class="form-group col-6">
                <label for="end_time"><h4 class="text-white">End Time: </h4></label>
                <input class="form-control text-white" name="end_time" id="end_time" type="time">
            </div>
        </div>
        <div class="form-group text-center text-md-right mt-3">
            <button type="submit" class="button button--active button-contactForm">Create Poll</button>
        </div>
        </form>
    </div>
    {{-- <div class="hero-banner">

        </div> --}}
    </div>
</div>

@endsection
