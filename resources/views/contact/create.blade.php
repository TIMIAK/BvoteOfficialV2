@extends('layouts.app')
@section('content')
<section class="mb-30px">
    <div class="container">
      <div class="hero-banner hero-banner--sm">
        <div class="hero-banner__content">
          <h1>Contact Us</h1>
          <h3 class="text-center">Do you have any questions? Please do not hesitate to contact us directly.</h3>

          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--================ Hero sm banner end =================-->


  <!-- ================ contact section start ================= -->
  <section class="section-margin--small section-margin">
    <div class="container">



      <div class="row">
        <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3 class="text-white">Lagos,Nigeria</h3>
              <p class="text-white">Anchor University Lagos</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-headphone"></i></span>
            <div class="media-body">
                <h3><a href="tel:+2348149792957" class="text-white">+23481 4979 2957</a></h3>
              <p class="text-white">Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:bvoteofficial@gmail.com" class="text-white">bvoteofficial01@gmail.com</a></h3>
              <p class="text-white">Send us your query anytime!</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-9">
          <form action="/contact" class="form-contact contact_form" method="POST" id="contactForm" novalidate="novalidate">
            @csrf
            <div class="row">
              <div class="col-lg-5">
                <div class="form-group">
                  <input class="form-control text-white" name="fullname" id="name" type="text" placeholder="Enter your name">
                </div>
                <div class="form-group">
                  <input class="form-control text-white" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
                <div class="form-group">
                  <input class="form-control text-white" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
              <div class="col-lg-7">
                <div class="form-group">
                    <textarea class="form-control different-control w-100 text-white" name="message" id="message" cols="30" rows="5" placeholder="Enter Message"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <button type="submit" class="button button--active button-contactForm">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

<!--Section: Contact v.2-->
@endsection
