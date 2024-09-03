<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About Page</title>
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
	<link rel="stylesheet" href="{{asset('css/newbutton.css') }}">
	<link rel="icon" type="image" href="assets/img/img.jpeg.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
  	@if(Auth::check() && Auth::user()->isAdmin())
        @include('layouts.adminheader')
    @else
        @include('layouts.userheader')
    @endif
    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/img-exp-4.png);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate" style="font-family: Georgia, 'Times New Roman', Times, serif;">
            	<h1 class="mb-3 mt-5 bread" style="font-family: Georgia, 'Times New Roman', Times, serif;">About Us</h1>
				<!--html here (index.html)-->
	            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>About</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url({{ asset('storage/' . $about->image) }}); box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; position: relative; top: 15px;"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">@if($about->discover)
        {{ $about->discover }}
    @endif</span>
	          <h2 class="mb-4" style="font-family: Georgia, 'Times New Roman', Times, serif;">{{ $about->title }}</h2>
	        </div>
	        <div class="popins">
	  				<p style="color: #fff;">{{ $about->description }}
					</p>
	  			</div>
  			</div>
    	</div>
    </section>

	<section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/img-exp-8.png);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Testimoniels</span>
                <h2 class="mb-4" style="font-family: Georgia, 'Times New Roman', Times, serif;">Customers Say</h2>
                <p class="popins" style="color: white;">
                    Hear from our satisfied customers about their experiences with our exceptional landscaping services. 
                    Their words reflect our commitment to quality and customer satisfaction.
                </p>
            </div>
        </div>
    </div>
    <div class="container-wrap">
        <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($testimonials->chunk(5) as $key => $testimonyChunk)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="row d-flex no-gutters">
                        @foreach($testimonyChunk as $testimony)
                        <div class="col-lg align-self-sm-end ftco-animate">
                            <div class="testimony {{ $loop->iteration % 2 == 0 ? 'overlay' : '' }}" class="popins" style="height: 300px;">
                                <blockquote>
                                    <p>&ldquo;{{ $testimony->testimonial }}&rdquo;</p>
                                </blockquote>
                                <div class="author d-flex mt-4">
                                    <div class="image mr-3 align-self-center">
                                        <img src="{{ asset('storage/' . $testimony->image) }}" alt="">
                                    </div>
                                    <div class="name align-self-center" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                                        {{ $testimony->name }} <span class="position">{{ $testimony->job }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>



<!--
    <section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/img-exp-8.png);"  data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
	    <div class="container">
	      <div class="row justify-content-center mb-5">
	        <div class="col-md-7 heading-section text-center ftco-animate">
	        	<span class="subheading">Testimony</span>
	          <h2 class="mb-4" style="font-family: Georgia, 'Times New Roman', Times, serif;">Customers Says</h2>
	          <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: #fff;">Hear from our satisfied customers about their experiences with our exceptional landscaping services. Their words reflect our commitment to quality and customer satisfaction.</p>
	        </div>
	      </div>
	    </div>
	    <div class="container-wrap">
	      <div class="row d-flex no-gutters" style="font-family: Georgia, 'Times New Roman', Times, serif;">
	        <div class="col-lg align-self-sm-end ftco-animate">
	          <div class="testimony">
	             <blockquote>
	                <p>&ldquo;My garden has never looked better! The team was professional, punctual, and transformed my outdoor space into a beautiful oasis&rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                  <img src="images\person_4.jpg" alt="">
	                </div>
	                <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end">
	          <div class="testimony overlay">
	             <blockquote>
	                <p>&ldquo;Excellent service from start to finish. The lawn maintenance and garden design exceeded my expectations. Highly recommend!&rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                  <img src="images/person_2.jpg" alt="">
	                </div>
	                <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end ftco-animate">
	          <div class="testimony">
	             <blockquote>
	                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small  line of blind text by the name. &rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                  <img src="images/person_3.jpg" alt="">
	                </div>
	                <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end">
	          <div class="testimony overlay">
	             <blockquote>
	                <p>&ldquo;The new irrigation system is fantastic. Efficient, effective, and installed with minimal disruption. Great job!&rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                  <img src="images/person_2.jpg" alt="">
	                </div>
	                <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end ftco-animate">
	          <div class="testimony">
	            <blockquote>
	              <p>&ldquo;I am thrilled with the seasonal cleanup services. My yard is always ready for each season, thanks to their meticulous work &rdquo;</p>
	            </blockquote>
	            <div class="author d-flex mt-4">
	              <div class="image mr-3 align-self-center">
	                <img src="images/person_3.jpg" alt="">
	              </div>
	              <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </section>
-->

	  <section class="ftco-section">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-md-6 pr-md-5">
    				<div class="heading-section text-md-right ftco-animate">
	          	<span class="subheading">Discover</span>
	            <h2 class="mb-4" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000">Our Services</h2>
	            <p class="mb-4" class="popins">{{ $discoverService->description }}
					</p>
	            <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3" style="font-family: Georgia, 'Times New Roman', Times, serif;">View More </a></p>
	          </div>
    			</div>
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/img-ext-1.png); border-radius: 8px; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/img-ext-2.png); border-radius: 8px; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/img-exp-4.png); border-radius: 8px; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/img-exp-5.png); border-radius: 8px; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;"></a>
		    				</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

	<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/img-exp-8.png);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
  <div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="row" style="font-family: Georgia, 'Times New Roman', Times, serif;">
			  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center">
				  <div class="text">
				  	<div class="icon"><i class="fa-sharp fa-solid fa-building" style="padding: 10px; font-size:300%; color: #fff"></i></div>
					  <strong class="number" data-number="100">0</strong>
					  <span style="font-family: Georgia, 'Times New Roman', Times, serif; color: green">Our Branches</span>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center">
				  <div class="text">
					  <div class="icon"><i class="fa-solid fa-person-circle-check" style="padding: 10px; font-size:300%; color: #fff"></i></span></div>
					  <strong class="number" data-number="10567">0</strong>
					  <span>Number of Project We Did</span>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center">
				  <div class="text">
					  <div class="icon"><i class="fa-solid fa-person" style="padding: 10px; font-size:300%; color: #fff"></i></div>
					  <strong class="number" data-number="10567">0</strong>
					  <span>Happy Customer</span>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center">
				  <div class="text">
					  <div class="icon"><i class="fa-solid fa-person-digging" style="padding: 10px; font-size:300%; color: #fff"></i></div>
					  <strong class="number" data-number="900">0</strong>
					  <span>Staff</span>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
	</div>
  </div>
</section>

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