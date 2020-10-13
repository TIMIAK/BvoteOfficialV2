@extends('layouts.app')
@section('content')
{{-- <div style="background-image: url('{{asset('img/banner/vote5.jpg')}}')">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Create Poll</h4>


                    <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" action="{{route('poll.store')}}" method="post">
                        @csrf
                        <h3>Poll Details</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col col-md-12">
                                    <div class="form-group">
                                        <label for="office">Office:</label>
                                        <input type="text" name="office" class="form-control" id="office" placeholder="E.g Class Govenor">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-12">
                                    <div class="form-group">
                                        <label for="candidates">Candidates:</label>
                                        <p style="color: red">If more than one seperate with a coma " , "</p>
                                        <textarea name="candidates" class="form-control" id="candidates" placeholder="E.g Daniel,Timothy,John " cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>


                        </fieldset>
                        <h3>Allowed Voters</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col col-md-12">
                                    <div class="form-group">
                                        <label for="voters">Allowed Voters Emails (Optional):</label>
                                        <p style="color: red">If more than one seperate with a coma " , "</p>
                                        <textarea name="allowedvoters" class="form-control" id="voters" placeholder="E.g DanielTimothy01@gmail.com, TimBaron@yahoo.com" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                        <h3>Time Frame</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="start_date">Start Date:</label>
                                        <input type="Date" name="start_date" class="form-control" id="start_date">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="start_time">Start Time:</label>
                                        <input type="Time" name="start_time" class="form-control" id="start_time">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="end_date">End Date:</label>
                                        <input type="Date" name="end_date" class="form-control" id="end_date">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="end_time">End Time:</label>
                                        <input type="Time" name="end_time" class="form-control" id="end_time">
                                    </div>
                                </div>
                            </div>


                        </fieldset>
                        <h3>Confirm Detail</h3>
                        <fieldset>
                            <div class="p-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="tc">
                                    <label class="custom-control-label" for="customCheck1">I agree with the Terms and Conditions.</label>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div> --}}
<h1 class="text-center pt-3">Create Poll</h1>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <form action="{{route('poll.store')}}" class="form-contact contact_form" method="post">
        @csrf
        <div class="row">
            <div class="form-group col-12">
                <label for="office"><h4>Office: </h4></label>
                <input class="form-control" name="office" id="office" type="text" placeholder="E.g Class Representative">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-12">
                <label for="candidates"><h4>Candidates: </h4><span>If more than one seperate with a Coma " , "</span></label>
                {{-- <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address"> --}}
                <textarea name="candidates" class="form-control" id="candidates" cols="30" rows="10" placeholder="E.g Timothy Adewale,Olishe Samuel" ></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-12">
                <label for="allowedvoters"><h4>Email of Allowed Voters: </h4><span>If more than one seperate with a Coma " , "</span></label>
                <textarea class="form-control" name="allowedvoters" id="allowedvoters" type="text" placeholder="E.g example1@gmail.com,example2@gmail.com"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="start_date"><h4>Start Date: </h4></label>
                <input class="form-control" name="start_date" id="start_date" type="date">
            </div>
            <div class="form-group col-6">
                <label for="start_time"><h4>Start Time: </h4></label>
                <input class="form-control" name="start_time" id="start_time" type="time">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label for="end_date"><h4>End Date: </h4></label>
                <input class="form-control" name="end_date" id="end_date" type="date">
            </div>
            <div class="form-group col-6">
                <label for="end_time"><h4>End Time: </h4></label>
                <input class="form-control" name="end_time" id="end_time" type="time">
            </div>
        </div>
        <div class="form-group text-center text-md-right mt-3">
            <button type="submit" class="button button--active button-contactForm">Create Poll</button>
        </div>
        </form>
    </div>
    </div>
</div>

@endsection
