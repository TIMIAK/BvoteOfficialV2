@extends('layouts.app')
@section('content')

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

@endsection
