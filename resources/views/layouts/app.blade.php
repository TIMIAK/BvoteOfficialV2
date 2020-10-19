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
    <link rel="icon" href="{{asset('img/icon.ico')}}" type="image/png">

    <link rel="stylesheet" href="{{asset('vendors/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="bg-secondary text-white">
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
                        <li class="nav-item"><a class="nav-link" href="{{route('change.password')}}">Change password</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();

                        document.getElementById('logout-form').submit();">Sign out</a></li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                  </li>
                  @endguest
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-social">
                  <li><a href="https://www.linkedin.com/in/timothy-akiode-7b772a164/" target="_blank"><i class="ti-linkedin"></i></a></li>
                  <li><a href="https://twitter.com/TimBaron14" target="_blank"><i class="ti-twitter-alt" ></i></a></li>
                  <li><a href="https://www.facebook.com/timothy.akiode" target="_blank"><i class="ti-facebook" ></i></a></li>
                  <li><a href="https://github.com/TIMIAk" target="_blank"><i class="ti-github" ></i></a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <main class="site-main">
       <div class="container py-3">
        @include('messages.flash')
        @yield('content')
       </div>
      </main>
      <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="footer-text m-0">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Application was made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://github.com/TIMIAK" target="_blank">TimBaron</a>
                    </p>
                </div>
            </div>
        </div>
      </footer>

    <script src="{{asset('vendors/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
