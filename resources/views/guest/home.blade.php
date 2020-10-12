@extends('layouts.app')
@section('content')
<section class="mb-30px">
    <div class="container">
      <div class="hero-banner">
        <div class="hero-banner__content">
          <h1>BVOTE</h1>
          <h1>Amazing Places on earth</h1>
          <a href="{{route('poll.create')}}" class="btn btn-primary btn-outline">Create</a>
          <a href="{{route('poll.search')}}" class="btn btn-primary btn-outline">Submit</a>
        </div>
      </div>
    </div>
  </section>

@endsection
