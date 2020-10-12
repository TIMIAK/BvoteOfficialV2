<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BVOTE</title>

    <!-- Styles -->
    <link rel="icon" href="{{asset('img/Fevicon.png')}}" type="image/png">

    <link rel="stylesheet" href="{{asset('vendors/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header class="header_area">
        <div class="main_menu">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
              <!-- Brand and toggle get grouped for better mobile display -->
              <a class="navbar-brand logo_h text-lg" href="index.html"><h1>BVOTE</h1></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav justify-content-center">
                  <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{route('poll.create')}}">Create Poll</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{route('poll.search')}}">Submit Poll</a>
                  <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                  @guest
                  <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Sign In</a>
                  <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Sign Up</a>
                  @else
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">{{Auth::user()->username}}</a>
                    <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('poll.index')}}">My Polls</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('logout')}}">Sign out</a></li>
                    </ul>
                  </li>
                  @endguest
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-social">
                  <li><a href="#"><i class="ti-facebook"></i></a></li>
                  <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                  <li><a href="#"><i class="ti-instagram"></i></a></li>
                  <li><a href="#"><i class="ti-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <main class="site-main">
       @include('messages.flash')
       @yield('content')
      </main>

    <script src="{{asset('vendors/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
