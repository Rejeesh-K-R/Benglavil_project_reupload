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
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<img style="width: 100px; height: 100px; position: relative; left: 0px;" src="images/img.jpeg.png" alt="">
	    <div class="container">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto" style="font-family: Georgia, 'Times New Roman', Times, serif;">
				<!--html here (index.html)-->
	          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	          <!--<li class="nav-item"><a href="menu.html" class="nav-link">Menu</a></li>-->
			  <!--html here-->
	          <li class="nav-item"><a href="service" class="nav-link">Services</a></li>
	          <!--
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
			  -->
			  <!--html here-->
	          <li class="nav-item"><a href="about" class="nav-link">About</a></li>
			 
			<!--html here-->
	          <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
			  <!--
				<li class="nav-item cart"><a href="cart.html" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li>
			-->
	        </ul>
	      </div>
		  </div>
	  </nav>
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
    	<div class="one-half img" style="background-image: url(images/img-exp-7.png);"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">@if($about->discover)
        {{ $about->discover }}
    @endif</span>
	          <h2 class="mb-4" style="font-family: Georgia, 'Times New Roman', Times, serif;">{{ $about->title }}</h2>
	        </div>
	        <div style="font-family: Georgia, 'Times New Roman', Times, serif;">
	  				<p>{{ $about->description }}
					</p>
	  			</div>
  			</div>
    	</div>
    </section>

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

	  <section class="ftco-section">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-md-6 pr-md-5">
    				<div class="heading-section text-md-right ftco-animate">
	          	<span class="subheading">Discover</span>
	            <h2 class="mb-4" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000">Our Services</h2>
	            <p class="mb-4" style="font-family: Georgia, 'Times New Roman', Times, serif;">{{ $discoverService->description }}
					</p>
	            <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3" style="font-family: Georgia, 'Times New Roman', Times, serif;">View More </a></p>
	          </div>
    			</div>
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/img-ext-1.png);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/img-ext-2.png);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/img-exp-4.png);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/img-exp-5.png);"></a>
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
					  <div class="icon"><span class="flaticon-coffee-cup"></span></div>
					  <strong class="number" data-number="100">0</strong>
					  <span style="font-family: Georgia, 'Times New Roman', Times, serif;">Our Branches</span>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center">
				  <div class="text">
					  <div class="icon"><span class="flaticon-coffee-cup"></span></div>
					  <strong class="number" data-number="10567">0</strong>
					  <span>Number of Project We Did</span>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center">
				  <div class="text">
					  <div class="icon"><span class="flaticon-coffee-cup"></span></div>
					  <strong class="number" data-number="10567">0</strong>
					  <span>Happy Customer</span>
				  </div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 text-center">
				  <div class="text">
					  <div class="icon"><span class="flaticon-coffee-cup"></span></div>
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

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container" style="font-family: Georgia, 'Times New Roman', Times, serif;">
        <div class="row mb-5">
          <div class="col-lg-7 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2" style="font-family: Georgia, 'Times New Roman', Times, serif;">About Us</h2>
              <p>Transform your outdoor space with our expert landscaping solutions. At Benglavil, we offer a 
				wide range of services to enhance the beauty and functionality of your property. From custom 
				landscape design and garden maintenance to hardscaping and irrigation systems, our skilled 
				team ensures exceptional results tailored to your needs.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>

		 
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2" style="font-family: Georgia, 'Times New Roman', Times, serif;">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Landscape Design Consultation</a></li>
                <li><a href="#" class="py-2 d-block">Weekly Lawn Care</a></li>
                <li><a href="#" class="py-2 d-block">Garden Bed Maintenance</a></li>
                <li><a href="#" class="py-2 d-block">Pest and Weed Control</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2" style="font-family: Georgia, 'Times New Roman', Times, serif;">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+919400011292</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">contact@benglavil.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with by <a href="https://colorlib.com" target="_blank">Benglavil</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

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