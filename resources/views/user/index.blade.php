<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home page</title>
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

	<style>
		
	</style>
  </head>
  <body>
	
  @if(Auth::check() && Auth::user()->isAdmin())
        @include('layouts.adminheader')
    @else
        @include('layouts.userheader')
    @endif
    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url(images/img-exp-5.png);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4" style="font-family: Georgia, 'Times New Roman', Times, serif;">Transforming Your Outdoor Spaces</h1>
              <p class="mb-4 mb-md-5" style="font-family: Georgia, 'Times New Roman', Times, serif;">Expert Landscaping and Hardscaping Solutions
			</p>
              <p><a href="#1" class="custom-btn btn-primary p-3 px-xl-4 py-xl-3" style="font-family: Georgia, 'Times New Roman', Times, serif; border-radius: 8px; padding: 25px; position: relative; top:-10px; width: 150px; height: 60px;">Let's Begin</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/img-exp-4.png);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4" style="font-family: Georgia, 'Times New Roman', Times, serif;">Amazing Designs &amp; Beautiful Places</h1>
              <p class="mb-4 mb-md-5" style="font-family: Georgia, 'Times New Roman', Times, serif;">EXPERT LANDSCAPING AND HARDSCAPING SOLUTIONS</p>
              <p><a href="#1" class="custom-btn btn-primary p-3 px-xl-4 py-xl-3" style="font-family: Georgia, 'Times New Roman', Times, serif; border-radius: 8px; padding: 25px; position: relative; top:-10px; width: 150px; height: 60px;">Let's Begin</a> </p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/img-ext-1.png);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4" style="font-family: Georgia, 'Times New Roman', Times, serif;">Transforming Your Outdoor Spaces</h1>
              <p class="mb-4 mb-md-5" style="font-family: Georgia, 'Times New Roman', Times, serif;">EXPERT LANDSCAPING AND HARDSCAPING SOLUTIONS
			</p>
              <p><a href="#1" class="custom-btn btn-primary p-3 px-xl-4 py-xl-3" style="font-family: Georgia, 'Times New Roman', Times, serif; border-radius: 8px; padding: 25px; position: relative; top:-10px; width: 150px; height: 60px;">Let's Begin</a> </p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-xl-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate" style="color: black;">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3 style="color: black;">	+91 940 001 1292</h3>
	    						<p class="popins">A small river named Duden flows by their place and supplies.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate" style="color: black;">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3 class="popins" style="color: #000;">198 West 21th Street</h3>
	    						<p class="popins">	203 Fake St. Mountain View, San Francisco, California, USA</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate" style="color: black;">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3 class="popins" style="color: black;">Open Monday-Friday</h3>
	    						<p class="popins">8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
				
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex" id="1">
	
    	<div class="one-half img" style="background-image: url({{ asset('storage/' . $about->image) }}); box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; position: relative; top: 15px;"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">@if($about->discover)
        {{ $about->discover }}
    @endif</span>
	          <h2 class="mb-4" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #fff;">{{ $about->title }}</h2>
	        </div>
	        <div>
	  				<p class="popins" style="color: #fff;">{{ $about->description }}
					</p>
	  			</div>
  			</div>
    	</div>
    </section>

    <section class="ftco-section ftco-services">
    <div class="container">
        <div id="servicesCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4 ftco-animate">
                            <div class="media d-block text-center block-6 services" style="border-radius: 8px;">
                                <div class="mt-lg-4">
                                    <img style="width: 100%; border-radius: 8px;" src="images/New_pic_aaaded.webp" alt="A picture">
                                </div>
                                <div class="media-body" style="padding: 8px;">
                                    <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; ">Landscaping</h3>
                                    <p class="popins">We offer comprehensive landscaping services to create stunning outdoor environments. Our team ensures that every detail is meticulously planned and executed.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <div class="media d-block text-center block-6 services" style=" border-radius: 8px;">
                                <div class="mt-lg-4">
                                    <img style="width: 100%; border-radius: 8px;" src="images/New_pic_aaaded_02.webp" alt="">
                                </div>
                                <div class="media-body" style="padding: 8px;">
                                    <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif;">Hardscaping</h3>
                                    <p class="popins">Our hardscaping solutions include patios, walkways, retaining walls, and more. We use high-quality materials to ensure durability and aesthetic appeal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <div class="media d-block text-center block-6 services" style="border-radius: 8px;">
                                <div class="mt-lg-4">
                                    <img style="width: 100%; border-radius: 8px;" src="images/New_pic_aaaded_03.webp" alt="">
                                </div>
                                <div class="media-body" style="padding: 8px;">
                                    <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif;">Outdoor Lighting</h3>
                                    <p class="popins">Enhance your landscape with our outdoor lighting services. We design and install lighting solutions that highlight the beauty of your outdoor spaces.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <!-- Repeat the same content for the second slide -->
                        <div class="col-md-4 ftco-animate">
							<div class="media d-block text-center block-6 services" style="border-radius: 8px;">
								
                                    <img style="width: 100%; border-radius: 8px; position: relative;" src="images/New_pic_aaaded_04.webp" alt="A picture">

                                <div class="media-body" style="padding: 8px;">
                                    <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif;">Exterior Designing</h3>
                                    <p style="font-family: 'Poppins">We offer great and beautiful looking exterior services like no other to create stunning environments. Our team of professionals ensures that every detail is meticulously planned and executed so that there is a beautiful smile on your face.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
							<div class="media d-block text-center block-6 services" style="border-radius: 8px;">
                                
                                    <img style="width: 70%; border-radius: 8px;" src="images/New_pic_aaaded_05.webp" alt="">
                               
                                <div class="media-body" style="padding: 8px;">
                                    <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif;">Garden Installations and Maintanance</h3>
                                    <p class="popins">Our handpicked team of specilized worked will make your garden look more fresh and beatuiful to see, We use high-quality materials to ensure durability and elagont looks. Our garden management team will look after your garden and maintain it for you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
							<div class="media d-block text-center block-6 services">
                                
                                    <img style="width: 100%; border-radius: 8px;" src="images/New_pic_aaaded_06.webp" alt="">
                                </div>
                                <div class="media-body" style="padding: 8px; position: relative; top: -28px;">
                                    <h3 class="heading" style="font-family: Georgia, 'Times New Roman', Times, serif; color: #000;">Seasonal Cleanup Services</h3>
                                    <p class="popins">Tired of clean up after a bad season, well then here is your solution for you!!!, We are here to take care of your problems for you. Out team of experts will take care of your work's of cleaning up after the end of each seasons.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more slides as needed -->
            </div>
            <a class="carousel-control-prev" href="#servicesCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#servicesCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>


    <section class="ftco-section" style="padding: 1px;">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-md-6 pr-md-5">
    				<div class="heading-section text-md-right ftco-animate">
	          	<span class="subheading">Discover</span>
	            <h2 class="mb-4" style="font-family: Georgia, 'Times New Roman', Times, serif; color: black;">Our Services</h2>
	            <p class="mb-4" class="popins" style="color: black;">{{ $discoverService->description }}
					</p>
	            <p><a href="service" class="btn btn-primary btn-outline-primary px-4 py-3" style="font-family: Georgia, 'Times New Roman', Times, serif; box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;">View More </a></p>
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
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><i class="fa-sharp fa-solid fa-building" style="padding: 10px; font-size:300%; color: #fff;"></i></div>
		              	<strong class="number" data-number="100">0</strong>
		              	<span  class="popins">Our Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><i class="fa-solid fa-person-circle-check" style="padding: 10px; font-size:300%; color: #fff;"></i></div>
		              	<strong class="number" data-number="10567">0</strong>
		              	<span  class="popins">Number of Project We Did</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><i class="fa-solid fa-person" style="padding: 10px; font-size:300%; color: #fff;"></i></div>
		              	<strong class="number" data-number="10567">0</strong>
		              	<span  class="popins">Happy Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon" style="color: #fff;"><i class="fa-solid fa-person-digging" style="padding: 10px; font-size:300%; color: #fff;"></i></div>
		              	<strong class="number" data-number="900">0</strong>
		              	<span  class="popins">Staff</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

	<!--
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4" style="font-family: Georgia, 'Times New Roman', Times, serif; color: black;">Our Best Offers</h2>
            <p style="font-family: Georgia, 'Times New Roman', Times, serif;">Explore our exclusive deals designed to provide the best value for your landscaping needs. Take advantage of these limited-time offers and transform your outdoor space today.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/img-exp-7.png);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#" style="font-family: Georgia, 'Times New Roman', Times, serif; color: black;">Seasonal Special</a></h3>
    						<p style="font-family: Georgia, 'Times New Roman', Times, serif;">
								Prepare your garden for the upcoming season with our comprehensive seasonal package. Enjoy 20% off on all services this spring and fall.
								
								</p>
    						<p class="price"><span style="color: black; font-family: Georgia, 'Times New Roman', Times, serif;">$5.90</span></p>
    						<p><a href="#" style="font-family: Georgia, 'Times New Roman', Times, serif;" class="btn btn-primary btn-outline-primary">Grab The Deal</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/img-exp-8.png);"></a>
    					<div class="text text-center pt-4">
    						<h3 style="font-family: Georgia, 'Times New Roman', Times, serif;"><a href="#" style="color: black;">Referral Reward</a></h3>
    						<p style="font-family: Georgia, 'Times New Roman', Times, serif;">
								Refer a friend and both of you receive a 15% discount on your next service. Share the joy 
								of a beautifully maintained landscape!</p>
    						<p class="price"><span style="color: black; font-family: Georgia, 'Times New Roman', Times, serif;">$5.90</span></p>
    						<p><a href="#" style="font-family: Georgia, 'Times New Roman', Times, serif;" class="btn btn-primary btn-outline-primary">Grab The Deal</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/img-exp-5.png);"></a>
    					<div class="text text-center pt-4">
    						<h3 style="font-family: Georgia, 'Times New Roman', Times, serif; color: black;"><a href="#" style="color: black;">New Client Welcome</a></h3>
    						<p style="font-family: Georgia, 'Times New Roman', Times, serif;">
								First-time customers get a 25% discount on their initial service. Start your journey 
								with us and see the difference.</p>
    						<p class="price" ><span style="color: black; font-family: Georgia, 'Times New Roman', Times, serif;">$5.90</span></p>
    						<p><a href="#" style="font-family: Georgia, 'Times New Roman', Times, serif;" class="btn btn-primary btn-outline-primary">Grab The Deal</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(images/img-exp-4.png);"></a>
    					<div class="text text-center pt-4" style="color: black;">
    						<h3 style="font-family: Georgia, 'Times New Roman', Times, serif"><a href="#" style="color: black;">Bundle Deal</a></h3>
    						<p style="font-family: Georgia, 'Times New Roman', Times, serif;">
								Save 30% when you combine lawn maintenance with garden installation. Perfect 
								for a complete landscape makeover.</p>
    						<p class="price"><span style="color: black; font-family: Georgia, 'Times New Roman', Times, serif;"> $5.90</span></p>
    						<p><a href="#" style="font-family: Georgia, 'Times New Roman', Times, serif;" class="btn btn-primary btn-outline-primary">Grab The Deal</a></p>
    					</div>
    				</div>
        	</div>
        </div>
    	</div>
    </section>
-->

	<section class="ftco-gallery">
		<div class="container-wrap">
			<div class="row no-gutters">
				<div class="col-6 col-lg align-self-sm-end ftco-animate">
					<div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="images/img-exp-9.png" style="height: 250px;" class="d-block w-100" alt="Image 1">
							</div>
							<div class="carousel-item">
								<img src="images/gallery-2.jpg" style="height: 250px;" class="d-block w-100" alt="Image 2">
							</div>
							<div class="carousel-item">
								<img src="images/gallery-4.jpg" style="height: 250px;" class="d-block w-100" alt="Image 3">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-6 col-lg align-self-sm-end ftco-animate">
					<div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="images/gallery-2.jpg" style="height: 250px;" class="d-block w-100" alt="Image 4">
							</div>
							<div class="carousel-item">
								<img src="images/img-exp-9.png" style="height: 250px;" class="d-block w-100" alt="Image 5">
							</div>
							<div class="carousel-item">
								<img src="images/img-exp-10.png" style="height: 250px;" class="d-block w-100" alt="Image 6">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-6 col-lg align-self-sm-end ftco-animate">
					<div id="carouselExampleControls3" style="height: 250px;" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="images/img-exp-10.png" style="height: 250px;" class="d-block w-100" alt="Image 7">
							</div>
							<div class="carousel-item">
								<img src="images/gallery-2.jpg" style="height: 250px;" class="d-block w-100" alt="Image 8">
							</div>
							<div class="carousel-item">
								<img src="images/gallery-4.jpg" style="height: 250px;" class="d-block w-100" alt="Image 9">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-6 col-lg align-self-sm-end ftco-animate">
					<div id="carouselExampleControls4" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="images/gallery-4.jpg" style="height: 250px;" class="d-block w-100" alt="Image 10">
							</div>
							<div class="carousel-item">
								<img src="images/img-exp-10.png" style="height: 250px;" class="d-block w-100" alt="Image 11">
							</div>
							<div class="carousel-item">
								<img src="images/img-exp-9.png" style="height: 250px;" class="d-block w-100" alt="Image 12">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls4" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls4" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>


<!--
		<section class="ftco-menu">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Main Dish</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Desserts</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dish-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Grilled Beef</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dish-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Grilled Beef</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dish-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Grilled Beef</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Lemonade Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pineapple Juice</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Soda Drinks</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Hot Cake Honey</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Hot Cake Honey</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/dessert-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Hot Cake Honey</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>
	-->

	


	<section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/img-exp-8.png);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Testimony</span>
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
                                        <img style="border-radius: 20px;" src="{{ asset('storage/' . $testimony->image) }}" alt="">
                                    </div>
                                    <div class="name align-self-center"  class="popins">
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
	          <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: white;">Hear from our satisfied customers about their experiences with our exceptional landscaping services. Their words reflect our commitment to quality and customer satisfaction.</p>
	        </div>
	      </div>
	    </div>
	    <div class="container-wrap">
	      <div class="row d-flex no-gutters">
	        <div class="col-lg align-self-sm-end ftco-animate">
	          <div class="testimony" style="font-family: Georgia, 'Times New Roman', Times, serif;">
	             <blockquote>
	                <p>&ldquo;My garden has never looked better! The team was professional, punctual, and transformed my outdoor space into a beautiful oasis&rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                <div class="image mr-3 align-self-center">
	                  <img src="images\person_4.jpg" alt="">
	                </div>
	                <div class="name align-self-center" style="font-family: Georgia, 'Times New Roman', Times, serif;">Louise Kelly <span class="position">Illustrator Designer</span></div>
	              </div>
	          </div>
	        </div>
	        <div class="col-lg align-self-sm-end">
	          <div class="testimony overlay" style="font-family: Georgia, 'Times New Roman', Times, serif;">
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
	          <div class="testimony" style="font-family: Georgia, 'Times New Roman', Times, serif;">
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
	          <div class="testimony overlay" style="font-family: Georgia, 'Times New Roman', Times, serif;">
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
	          <div class="testimony" style="font-family: Georgia, 'Times New Roman', Times, serif;">
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
<!--
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent from blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text py-4 d-block">
              	<div class="meta">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">The Delicious Pizza</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
-->
		
<section class="ftco-appointment">
	<div class="overlay"></div>
	<div class="container-wrap">
		<div class="row no-gutters d-flex align-items-center">
			<div class="col-12 col-md-6 d-flex align-self-stretch">
				<div style="width: 100%;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d355688.94458197936!2d76.52036054809118!3d9.94687135613845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1722513010961!5m2!1sen!2sin" width="100%" height="100%" style="border:0; min-height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
			<div class="col-12 col-md-6 appointment ftco-animate">
				<h3 class="mb-3" style="font-family: Georgia, 'Times New Roman', Times, serif;">Contact Us</h3>
				<form action="{{ route('contact.store') }}" method="POST" class="appointment-form">
					@csrf
					<div class="d-md-flex">
						<div class="form-group">
							<input type="text" name="name" class="form-control" style="font-family: Georgia, 'Times New Roman', Times, serif;" placeholder="Full Name">
						</div>
						<div class="form-group ml-md-4">
							<input name="mobile" type="text" class="form-control" style="font-family: Georgia, 'Times New Roman', Times, serif;" placeholder="Phone">
						</div>
					</div>
					<div class="d-md-flex">
						<div class="form-group">
							<input type="text" name="email" class="form-control" style="font-family: Georgia, 'Times New Roman', Times, serif;" placeholder="Email">
						</div>
					</div>
					<div class="d-md-flex">
						<div class="form-group">
							<textarea name="message" id="" cols="30" rows="2" class="form-control" style="font-family: Georgia, 'Times New Roman', Times, serif;" placeholder="Message"></textarea>
						</div>
					</div>
					<button type="submit" style="padding:20px; width:100%; font-family: Georgia, 'Times New Roman', Times, serif;" class="btn btn-primary">Send Message</button>
				</form>
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


<!--
color:#05ef1a
black background pic : images/bg_4.jpg
-->