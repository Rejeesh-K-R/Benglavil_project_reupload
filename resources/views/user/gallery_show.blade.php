<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Gallery Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <link rel="icon" type="image" href="{{asset('assets/img/img.jpeg.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body style="font-family: Georgia, 'Times New Roman', Times, serif;">
  @if(Auth::check() && Auth::user()->isAdmin())
        @include('layouts.adminheader')
    @else
        @include('layouts.userheader')
    @endif
    <!-- END nav -->

    <section class="home-slider owl-carousel">

<div class="slider-item" style="background-image: url({{asset('images/img-exp-8.png') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
  <div class="container">
    <div class="row slider-text justify-content-center align-items-center">

      <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread" style="font-family: Georgia, 'Times New Roman', Times, serif;">Gallery</h1>
        <!--html here (index.html)-->
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Gallery</span></p>
      </div>

    </div>
  </div>
</div>
</section>
    

    <!--Start's Here -->

<div class="container" style="padding: 40px;">
    <h1 style="color:#000;">{{ $gallery->title }}</h1>
    <p>{{ $gallery->description }}</p>
    <div class="row">
        @foreach($gallery->images as $image)
        <div class="col-md-4" style="padding: 10px;">
        <!-- style="width: 450px; height: 325px; " -->
            <img style="border-radius: 15px 50px;  box-shadow: rgba(0, 0, 0, 0.4) 5px 5px, rgba(0, 0, 0, 0.3) 10px 10px, rgba(0, 0, 0, 0.2) 15px 15px, rgba(0, 0, 0, 0.1) 20px 20px, rgba(0, 0, 0, 0.05) 25px 25px;" src="{{ asset('storage/'.$image->image_path) }}" class="img-fluid" alt="{{ $gallery->title }}">
        </div>
        @endforeach
    </div>
</div>





<!--End's here-->


    @if(Auth::check() && Auth::user()->isAdmin())
        @include('layouts.adminfooter')
    @else
        @include('layouts.userfooter')
    @endif
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  <script src="{{asset('js/jquery.min.js') }}"></script>
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{asset('js/popper.min.js') }}"></script>
  <script src="{{asset('js/bootstrap.min.js') }}"></script>
  <script src="{{asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{asset('js/aos.js') }}"></script>
  <script src="{{asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{asset('js/bootstrap-datepicker.js') }}"></script>
  <script src="{{asset('js/jquery.timepicker.min.js') }}"></script>
  <script src="{{asset('js/scrollax.min.js') }}"></script>
  <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false') }}"></script>
  <script src="{{asset('js/google-map.js') }}"></script>
  <script src="{{asset('js/main.js') }}"></script>
    
  </body>
</html>