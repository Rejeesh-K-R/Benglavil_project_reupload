<html>
    <head>

    </head>
    <body>
    <nav class="navbar navbar-expand-lg  ftco_navbar ftco-navbar-light" id="ftco-navbar" style="background-color: #ff0000;">
		<img style="width: 100px; height: 100px; position: relative; left: 0px;" src="{{asset('images/img.jpeg.png')}}" alt="">
	    <div class="container">
	      
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto" style="font-family: Georgia, 'Times New Roman', Times, serif;">
				<!--html here (index.html)-->
	          <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a href="/" class="nav-link" style="color: #000;">Home</a></li>
	          <!--<li class="nav-item"><a href="menu.html" class="nav-link">Menu</a></li>-->
			  <!--html here-->
	          <li class="nav-item {{ Request::is('gallery') ? 'active' : '' }}"><a href="/gallery" class="nav-link"  style="color: #000;">Gallery</a></li>
			  
			  <!--html here-->
	          <li class="nav-item {{ Request::is('service') ? 'active' : '' }}"><a href="/service" class="nav-link"  style="color: #000;">Services</a></li>
			  <!--
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
			  -->
			  <!--html here-->
	          <li style="font-family: Georgia, 'Times New Roman', Times, serif;" class="nav-item {{ Request::is('about') ? 'active' : '' }}"><a href="/about" class="nav-link"  style="color: #000;">About</a></li>
			  
			<!--html here-->
	          <li class="nav-item act{{ Request::is('contact') ? 'active' : '' }}" stle="color: #000;"><a href="/contact" class="nav-link"  style="color: #000;">Contact</a></li>
			  <!--
	          <li class="nav-item cart"><a href="cart.html" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li>
			  -->
	        </ul>
	      </div>
		  </div>
	  </nav>
    </body>
</html>