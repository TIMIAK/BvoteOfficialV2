@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-8">
                <h1 class="text-center text-white">Submit Poll</h1>
                <div class="row justify-content-center">
                    <div class="col col-md-8 pt-5">
                    <form class="form-inline" action="{{route('submit.search')}}" method="GET">
                            {{-- <div class="form-group mb-2">
                              <input type="text" readonly class="form-control-plaintext text-white" id="staticEmail2" value="Enter Vote ID">
                            </div> --}}
                            <label for="inputVoteId">Enter Poll ID &ThinSpace;</label>
                            <div class="form-group mx-sm-3 mb-2">
                              <input type="text" name="voteid" class="form-control" id="inputVoteId" placeholder="E.g BV5355" >
                            </div>
                            &ThinSpace;<button type="submit" class="btn btn-primary mb-2">Search</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
