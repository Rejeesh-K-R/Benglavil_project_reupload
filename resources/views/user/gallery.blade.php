<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Gallery Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image" href="assets/img/img.jpeg.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
      .btn.btn-primary {
        background: #00ff00;
        border: 1px solid #00ff00;
        color: #000;
      }
    </style>
  </head>
  <body style="font-family: Georgia, 'Times New Roman', Times, serif;">
  @if(Auth::check() && Auth::user()->isAdmin())
        @include('layouts.adminheader')
    @else
        @include('layouts.userheader')
    @endif
    <!-- END nav -->
    <section class="home-slider owl-carousel">

<div class="slider-item" style="background-image: url(images/img-exp-8.png);" data-stellar-background-ratio="0.5">
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

<div class="container">
    <h1>Gallery</h1>
    <div class="row">
        @foreach($galleries as $gallery)
        <div class="col-md-4" style="padding: 15px;">
            <div class="card mb-4" style="border-radius: 15px; box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
                <img src="{{ asset('storage/'.$gallery->cover_image) }}" style="border-radius: 15px;" class="card-img-top" alt="{{ $gallery->title }}">
                <div class="card-body">
                    <h5 class="card-title" style="color: #000;">{{ $gallery->title }}</h5>
                    <p class="card-text" style="color: #000;">{{ $gallery->description }}</p>
                    <a href="{{ route('user.gallery.show', $gallery->id) }}" class="btn btn-primary" style="border-radius: 11px;">View Gallery</a>
                </div>
            </div>
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
  
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>