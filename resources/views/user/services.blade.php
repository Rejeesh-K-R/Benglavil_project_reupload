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
    <link rel="stylesheet" href="css/newbutton.css">
    <link rel="icon" type="image" href="assets/img/img.jpeg.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
  
        @include('layouts.userheader')
    
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
                <div class="col-md-6 ftco-animate" style="padding: 10px;">
                  <!--<div class="media d-block text-center block-6 services">-->
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                      <!-- <span class="flaticon-choices"></span>-->
                    </div>
                    <div class="media-body">
                      <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>{{ $service->service_name }}</b></h3>
                      <p class="popins">{{ $service->description }}</p>
                        <a href="contact" class="btn-green">Contact Us</a>
                    </div>
                    
                </div>
              
                <div class="col-md-6 ftco-animate" style="padding: 10px;">
                  <!--<div class="media d-block text-center block-6 services">-->
                  <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <!-- <span class="flaticon-choices"></span>-->
                  </div>
                  <div class="media-body">
                    <img style="height: 300px; width: 550px; border-radius: 20px; box-shadow: rgba(0, 0, 0, 0.4) -5px 5px, rgba(0, 0, 0, 0.3) -10px 10px, rgba(0, 0, 0, 0.2) -15px 15px, rgba(0, 0, 0, 0.1) -20px 20px, rgba(0, 0, 0, 0.05) -25px 25px;" src="{{ Storage::url($service->image) }}" alt="{{ $service->service_name }}">
                  </div>
                      
                </div> 
              @else     
            
                <div class="col-md-6 ftco-animate" style="padding: 10px;">
                  <div class="icon d-flex justify-content-center align-items-center mb-5"></div>
                  <div class="media-body">
                    <img style="height: 300px; width: 550px; border-radius: 20px; box-shadow: rgba(0, 0, 0, 0.4) 5px 5px, rgba(0, 0, 0, 0.3) 10px 10px, rgba(0, 0, 0, 0.2) 15px 15px, rgba(0, 0, 0, 0.1) 20px 20px, rgba(0, 0, 0, 0.05) 25px 25px;" src="{{ Storage::url($service->image) }}" alt="{{ $service->service_name }}">
                  </div>
                </div>  
                <div class="col-md-6 ftco-animate" style="padding: 18px;">
                  <div class="icon d-flex justify-content-center align-items-center mb-5"></div>
                  <div class="media-body">
                    <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>{{ $service->service_name }}</b></h3>
                    <p class="popins">{{ $service->description }}</p>
                    <a href="contact" class="btn-green">Contact Us</a>
                  </div>
                </div>
              @endif
            @endforeach







<!--From Here-->
          <!-- <div class="col-md-6 ftco-animate"> -->
            <!-- <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<!-- <span class="flaticon-choices"></span>-->
              <!-- </div>
              <div class="media-body" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>Custom Landscape Design</b></h3>
                <p>Transform your outdoor space with our bespoke landscape design services. We create 
                  beautiful, functional, and sustainable designs tailored to your preferences.</p>
                  <a href="#" class="btn-green">Contact Us</a> -->
              <!-- </div>
              
          </div>   
            <div class="col-md-6 ftco-animate"> -->
              <!--<div class="media d-block text-center block-6 services">-->
                <!-- <div class="icon d-flex justify-content-center align-items-center mb-5"> -->
                  <!-- <span class="flaticon-choices"></span>-->
                <!-- </div>
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
                  
           
          <div class="col-md-6 ftco-animate"> -->
            <!--<div class="media d-block text-center block-6 services">-->
              <!-- <div class="icon d-flex justify-content-center align-items-center mb-5"> -->
              	<!-- <span class="flaticon-choices"></span>-->
              <!-- </div>
              <div class="media-body" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>Garden Installation and Maintenance</b></h3>
                <p>Enhance your property with vibrant gardens. Our expert team selects, plants, and maintains 
                  a variety of flowers, shrubs, and trees to ensure a thriving garden.</p>
                  <a href="#" class="btn-green">Contact Us</a>
              </div>
              
          </div>
          <div class="col-md-6 ftco-animate"> -->
            <!--<div class="media d-block text-center block-6 services">-->
              <!-- <div class="icon d-flex justify-content-center align-items-center mb-5"> -->
                <!-- <span class="flaticon-choices"></span>-->
              <!-- </div>
              <div class="media-body">
                <img style="height: 300px; width: 550px; border-radius: 20px;" src="images\img-exp-15.png" alt="">
              </div>
          </div>
          
          <div class="col-md-6 ftco-animate"> -->
            <!--<div class="media d-block text-center block-6 services">-->
              <!-- <div class="icon d-flex justify-content-center align-items-center mb-5"> -->
                <!-- <span class="flaticon-choices"></span>-->
              <!-- </div>
              <div class="media-body">
                <img style="height: 300px; width: 550px; border-radius: 20px;" src="images\img-exp-16.png" alt="">
              </div>
          </div>
          <div class="col-md-6 ftco-animate" style="font-family: Georgia, 'Times New Roman', Times, serif;"> -->
            <!--<div class="media d-block text-center block-6 services">-->
              <!-- <div class="icon d-flex justify-content-center align-items-center mb-5"> -->
              	<!-- <span class="flaticon-choices"></span>-->
              <!-- </div>
              <div class="media-body">
                <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>Hardscaping Solutions</b></h3>
                <p>Add durable and stylish features to your landscape with our hardscaping solutions. We 
                  design and install patios, walkways, retaining walls, and more using high-quality materials.
                </p>
                <a href="#" class="btn-green">Contact Us</a>
              </div>
              
          </div>
          


          <div class="col-md-6 ftco-animate"> -->
            <!--<div class="media d-block text-center block-6 services">-->
              <!-- <div class="icon d-flex justify-content-center align-items-center mb-5"> -->
              	<!-- <span class="flaticon-choices"></span>-->
              <!-- </div>
              <div class="media-body" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>Irrigation System Installation</b></h3>
                <p>Ensure your landscape is properly hydrated with our efficient irrigation systems. We design,
                   install, and maintain systems that conserve water while keeping your plants healthy.</p>
                <a href="#" class="btn-green">Contact Us</a>
                  
              </div> 
              
          </div>
          <div class="col-md-6 ftco-animate"> -->
            <!--<div class="media d-block text-center block-6 services">-->
              <!-- <div class="icon d-flex justify-content-center align-items-center mb-5"> -->
                <!-- <span class="flaticon-choices"></span>-->
              <!-- </div>
              <div class="media-body">
                <img style="height: 300px; width: 550px; border-radius: 20px;" src="images\img-exp-17.png" alt="">
              </div>
          </div>

          <div class="col-md-6 ftco-animate"> -->
            <!--<div class="media d-block text-center block-6 services">-->
              <!-- <div class="icon d-flex justify-content-center align-items-center mb-5"> -->
                <!-- <span class="flaticon-choices"></span>-->
              <!-- </div>
              <div class="media-body">
                <img style="height: 300px; width: 550px; border-radius: 20px;" src="images\img-exp-18.png" alt="">
              </div>
          </div>
          <div class="col-md-6 ftco-animate"> -->
            <!--<div class="media d-block text-center block-6 services">-->
              <!-- <div class="icon d-flex justify-content-center align-items-center mb-5"> -->
              	<!-- <span class="flaticon-choices"></span>-->
              <!-- </div>
              <div class="media-body" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>Seasonal Cleanup Services</b></h3>
                <p>Prepare your yard for every season with our thorough spring and fall cleanup services. We 
                  remove debris, prune plants, and ensure your landscape is ready for the upcoming season.
                </p>
                <a href="#" class="btn-green">Contact Us</a>
              </div>
              
          </div>


          <div class="col-md-6 ftco-animate"> -->
            <!--<div class="media d-block text-center block-6 services">-->
              <!-- <div class="icon d-flex justify-content-center align-items-center mb-5"> -->
              	<!-- <span class="flaticon-choices"></span>-->
              <!-- </div>
              <div class="media-body" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;"><b>Outdoor Lighting Installation</b></h3>
                <p>Illuminate your landscape with our custom outdoor lighting solutions. We design and install 
                  lighting systems that enhance safety and highlight the beauty of your property.</p>
                <a href="#" class="btn-green">Contact Us</a>
                  
              </div>
              
          </div>
          <div class="col-md-6 ftco-animate"> -->
            <!--<div class="media d-block text-center block-6 services">-->
              <!-- <div class="icon d-flex justify-content-center align-items-center mb-5"> -->
                <!-- <span class="flaticon-choices"></span>-->
              <!-- </div>
              <div class="media-body">
                <img style="height: 300px; width: 525px; border-radius: 20px;" src="images\img-exp-20.png" alt="">
              </div>
          </div>
          
           
        </div> -->
<!--To Here-->
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