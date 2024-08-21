<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Service page</title>
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
	          <li class="nav-item active"><a href="service" class="nav-link">Services</a></li>
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

      <div class="slider-item" style="background-image: url(images/img-exp-5.png);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate" style="font-family: Georgia, 'Times New Roman', Times, serif;">
            	<h1 class="mb-3 mt-5 bread" style="font-family: Georgia, 'Times New Roman', Times, serif;">Services</h1>
              <!--html here (index.html)-->
	            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Services</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-services">
    	<div class="container">
    		<div class="row">

          @foreach($services as $service)
              @if($loop->iteration % 2 != 0)
                <div class="col-md-6 ftco-animate">
                  <!--<div class="media d-block text-center block-6 services">-->
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                      <!-- <span class="flaticon-choices"></span>-->
                    </div>
                    <div class="media-body" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                      <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>{{ $service->service_name }}</b></h3>
                      <p>{{ $service->description }}</p>
                        <a href="contact" class="btn-green">Contact Us</a>
                    </div>
                    
                </div>
              
                <div class="col-md-6 ftco-animate">
                  <!--<div class="media d-block text-center block-6 services">-->
                  <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <!-- <span class="flaticon-choices"></span>-->
                  </div>
                  <div class="media-body">
                    <img style="height: 300px; width: 550px; border-radius: 20px;" src="{{ Storage::url($service->image) }}" alt="{{ $service->service_name }}">
                  </div>
                      
                </div> 
              @else     
            
                <div class="col-md-6 ftco-animate">
                  <div class="icon d-flex justify-content-center align-items-center mb-5"></div>
                  <div class="media-body">
                    <img style="height: 300px; width: 550px; border-radius: 20px;" src="{{ Storage::url($service->image) }}" alt="{{ $service->service_name }}">
                  </div>
                </div>  
                <div class="col-md-6 ftco-animate" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                  <div class="icon d-flex justify-content-center align-items-center mb-5"></div>
                  <div class="media-body">
                    <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>{{ $service->service_name }}</b></h3>
                    <p>{{ $service->description }}</p>
                    <a href="contact" class="btn-green">Contact Us</a>
                  </div>
                </div>
              @endif
            @endforeach







<!--From Here-->
          <div class="col-md-6 ftco-animate">
            <!--<div class="media d-block text-center block-6 services">-->
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<!-- <span class="flaticon-choices"></span>-->
              </div>
              <div class="media-body" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>Custom Landscape Design</b></h3>
                <p>Transform your outdoor space with our bespoke landscape design services. We create 
                  beautiful, functional, and sustainable designs tailored to your preferences.</p>
                  <a href="#" class="btn-green">Contact Us</a>
              </div>
              
          </div>   
            <div class="col-md-6 ftco-animate">
              <!--<div class="media d-block text-center block-6 services">-->
                <div class="icon d-flex justify-content-center align-items-center mb-5">
                  <!-- <span class="flaticon-choices"></span>-->
                </div>
                <div class="media-body">
                  <img style="height: 300px; width: 550px; border-radius: 20px;" src="images/img-exp-8.png" alt="">
                </div>
                
            </div>    

            <div class="col-md-6 ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center mb-5"></div>
              <div class="media-body">
                <img style="height: 300px; width: 550px; border-radius: 20px;" src="images/img-exp-14-lawn-manage.png" alt="">
              </div>
            </div>  
            <div class="col-md-6 ftco-animate" style="font-family: Georgia, 'Times New Roman', Times, serif;">
              <div class="icon d-flex justify-content-center align-items-center mb-5"></div>
              <div class="media-body">
                <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>Lawn Care and Maintenance</b></h3>
                <p>Keep your lawn lush and green year-round with our comprehensive lawn care and maintenance services. We handle everything from mowing and edging to fertilization.</p>
                <a href="#" class="btn-green">Contact Us</a>
              </div>
            </div>
                  
           
          <div class="col-md-6 ftco-animate">
            <!--<div class="media d-block text-center block-6 services">-->
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<!-- <span class="flaticon-choices"></span>-->
              </div>
              <div class="media-body" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>Garden Installation and Maintenance</b></h3>
                <p>Enhance your property with vibrant gardens. Our expert team selects, plants, and maintains 
                  a variety of flowers, shrubs, and trees to ensure a thriving garden.</p>
                  <a href="#" class="btn-green">Contact Us</a>
              </div>
              
          </div>
          <div class="col-md-6 ftco-animate">
            <!--<div class="media d-block text-center block-6 services">-->
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <!-- <span class="flaticon-choices"></span>-->
              </div>
              <div class="media-body">
                <img style="height: 300px; width: 550px; border-radius: 20px;" src="images\img-exp-15.png" alt="">
              </div>
          </div>
          
          <div class="col-md-6 ftco-animate">
            <!--<div class="media d-block text-center block-6 services">-->
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <!-- <span class="flaticon-choices"></span>-->
              </div>
              <div class="media-body">
                <img style="height: 300px; width: 550px; border-radius: 20px;" src="images\img-exp-16.png" alt="">
              </div>
          </div>
          <div class="col-md-6 ftco-animate" style="font-family: Georgia, 'Times New Roman', Times, serif;">
            <!--<div class="media d-block text-center block-6 services">-->
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<!-- <span class="flaticon-choices"></span>-->
              </div>
              <div class="media-body">
                <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>Hardscaping Solutions</b></h3>
                <p>Add durable and stylish features to your landscape with our hardscaping solutions. We 
                  design and install patios, walkways, retaining walls, and more using high-quality materials.
                </p>
                <a href="#" class="btn-green">Contact Us</a>
              </div>
              
          </div>
          


          <div class="col-md-6 ftco-animate">
            <!--<div class="media d-block text-center block-6 services">-->
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<!-- <span class="flaticon-choices"></span>-->
              </div>
              <div class="media-body" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>Irrigation System Installation</b></h3>
                <p>Ensure your landscape is properly hydrated with our efficient irrigation systems. We design,
                   install, and maintain systems that conserve water while keeping your plants healthy.</p>
                <a href="#" class="btn-green">Contact Us</a>
                  
              </div>
              
          </div>
          <div class="col-md-6 ftco-animate">
            <!--<div class="media d-block text-center block-6 services">-->
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <!-- <span class="flaticon-choices"></span>-->
              </div>
              <div class="media-body">
                <img style="height: 300px; width: 550px; border-radius: 20px;" src="images\img-exp-17.png" alt="">
              </div>
          </div>

          <div class="col-md-6 ftco-animate">
            <!--<div class="media d-block text-center block-6 services">-->
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <!-- <span class="flaticon-choices"></span>-->
              </div>
              <div class="media-body">
                <img style="height: 300px; width: 550px; border-radius: 20px;" src="images\img-exp-18.png" alt="">
              </div>
          </div>
          <div class="col-md-6 ftco-animate">
            <!--<div class="media d-block text-center block-6 services">-->
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<!-- <span class="flaticon-choices"></span>-->
              </div>
              <div class="media-body" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>Seasonal Cleanup Services</b></h3>
                <p>Prepare your yard for every season with our thorough spring and fall cleanup services. We 
                  remove debris, prune plants, and ensure your landscape is ready for the upcoming season.
                </p>
                <a href="#" class="btn-green">Contact Us</a>
              </div>
              
          </div>


          <div class="col-md-6 ftco-animate">
            <!--<div class="media d-block text-center block-6 services">-->
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<!-- <span class="flaticon-choices"></span>-->
              </div>
              <div class="media-body" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>Outdoor Lighting Installation</b></h3>
                <p>Illuminate your landscape with our custom outdoor lighting solutions. We design and install 
                  lighting systems that enhance safety and highlight the beauty of your property.</p>
                <a href="#" class="btn-green">Contact Us</a>
                  
              </div>
              
          </div>
          <div class="col-md-6 ftco-animate">
            <!--<div class="media d-block text-center block-6 services">-->
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <!-- <span class="flaticon-choices"></span>-->
              </div>
              <div class="media-body">
                <img style="height: 300px; width: 525px; border-radius: 20px;" src="images\img-exp-20.png" alt="">
              </div>
          </div>
          
           
        </div>
<!--To Here-->
    	</div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container" style="font-family: Georgia, 'Times New Roman', Times, serif;">
        <div class="row mb-5">
          <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
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

		 
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
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