@extends('layouts.app')
@section('content')
<h1 class="text-center pt-3">Update Poll</h1>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <form action="{{route('poll.update',$poll->id)}}" class="form-contact contact_form" method="post">
        @csrf
        @method('patch')
        <div class="row">
            <div class="form-group col-12">
                <label for="office"><h4>Office: </h4></label>
                <input class="form-control" name="office" id="office" type="text" placeholder="E.g Class Representative" value="{{$poll->office}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-12">
                <label for="candidates"><h4>Candidates: </h4><span>If more than one seperate with a Coma " , "</span></label>
                <textarea name="candidates" class="form-control" id="candidates" cols="30" rows="10" placeholder="E.g Timothy Adewale,Olishe Samuel">{{$poll->candidates}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-12">
                <label for="allowedvoters"><h4>Email of Allowed Voters: </h4><span>If more than one seperate with a Coma " , "</span></label>
                <textarea class="form-control" name="allowedvoters" id="allowedvoters" type="text" placeholder="E.g example1@gmail.com,example2@gmail.com">{{$poll->allowedvoters}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="start_date"><h4>Start Date: </h4></label>
                <input class="form-control" name="start_date" id="start_date" type="date" value="{{$poll->start_date}}">
            </div>
            <div class="form-group col-6">
                <label for="start_time"><h4>Start Time: </h4></label>
                <input class="form-control" name="start_time" id="start_time" type="time" value="{{$poll->start_time}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="end_date"><h4>End Date: </h4></label>
                <input class="form-control" name="end_date" id="end_date" type="date" value="{{$poll->end_date}}">
            </div>
            <div class="form-group col-6">
                <label for="end_time"><h4>End Time: </h4></label>
                <input class="form-control" name="end_time" id="end_time" type="time" value="{{$poll->end_time}}">
            </div>
        </div>
        <div class="form-group text-center text-md-right mt-3">
            <button type="submit" class="button button--active button-contactForm">Update Poll</button>
        </div>
        </form>
    </div>
    </div>
</div>
@endsection
