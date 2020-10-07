@extends('layouts.app')
@section('content')
<div class="jumbotron bg-dark">
    <h1 class="text-center">Contact Us</h1>
    <p class="text-center">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>
    <form action="{{route('sendcontact')}}" method="GEt">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" id="fullname" placeholder="Full Name" name="fullname">
          </div>
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
          </div>
        </div>
        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
        </div>
        <div class="form-group">
          <label for="mesage">Message</label>
          <textarea name="message" id="mesage" class="form-control" cols="30" rows="10"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>

<!--Section: Contact v.2-->
@endsection
