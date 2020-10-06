@extends('layouts.app')
@section('content')
<div class="jumbotron bg-dark">
    <div class="flex">
        <h1 class="display-4 text-center">BVOTE <span><h6><i>"every vote counts..."</i></h6></span></h1>
    </div>
        <p class="lead">Bvote is a Web Application Voting platform, which allows people to cast votes anonymously.</p>
        <p>How to use</p>
        <span><i>Admin</i></span>
        <ul>
            <li>Create a Poll by clicking on Create or click <a href="{{route('poll.create')}}">here</a> </li>
            <li>Your can also add email addresses of users permitted to vote</li>
            <li>Copy the Poll ID and send to your voters</li>
        </ul>
        <span><i>Voters</i></span>
        <ul>
            <li>Recieve Poll ID from Admin</li>
            <li>Click on Submit or click <a href="{{route('poll.search')}}">here</a></li>
            <li>Enter the Poll ID in the box given and Click search.</li>
            <li>Then select your preferred Candidate</li>
        </ul>

    <div class="row justify-content-center">
        <a class="btn btn-primary btn-lg" href="{{route('poll.create')}}" role="button">Create</a>&ThickSpace;
        <a class="btn btn-primary btn-lg" href="{{route('poll.search')}}" role="button">Submit</a>
    </div>
</div>
@endsection
