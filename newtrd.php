<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Store Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
	 <style>
  /* Make the image fully responsive */
  
  
  .carousel-indicators li{
  	background-color: #151414;
  }
  </style>

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		 <!--   Start Navbar -->

		<?php include('navbar.php')  ?>

           <!--   End Navbar -->
		<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>New Trading</h1>
				   					<h2 class="bread"><span><a href="index.php">Home</a></span> <span>New Trading</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
    <div class="container">
	<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators" style="margin-bottom: -2rem;">

	    <li data-target="#carouselExampleInterval" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleInterval" data-slide-to="1"></li>
	   
   </ol>
  <div class="carousel-inner">
  	<p class="text-center" style="margin-top: 76px;">OUR NEWTRADING PRODUCT</p>

    <div class="carousel-item active" data-interval="10000">
      <div class="row">

      	<div class="col-3">
      		<img src="images/s1.jpg" class="img-thumbnail" alt="">
      	</div>
      	<div class="col-3">
      		<img src="images/s2.jpg" class="img-thumbnail" alt="">
      	</div>
      	<div class="col-3">
      		<img src="images/s3.jpg" class="img-thumbnail" alt="">
      	</div>
      	<div class="col-3">
      		<img src="images/s4.jpg" class="img-thumbnail" alt="">
      	</div>
      	
      </div>
    </div>

    <div class="carousel-item" data-interval="1000">
     <div class="row">

     	<div class="col-3">
     		<img src="images/s1.jpg" class="img-thumbnail" alt="">
     	</div>
     	<div class="col-3">
     		<img src="images/s2.jpg" class="img-thumbnail" alt="">
     	</div>
     	<div class="col-3">
     		<img src="images/s3.jpg" class="img-thumbnail" alt="">
     	</div>
     	<div class="col-3">
     		<img src="images/s4.jpg" class="img-thumbnail" alt="">
     	</div>
     	
     </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

		<div id="colorlib-about">
			<div class="container">
				<div class="row">
					<div class="about-flex">
						<div class="col-one-forth">
							<div class="row">
								
						   </div>
						
					  </div>
				  </div>
			  </div>
		  </div>


		<!-- Subscribe Start -->
          
         <!--  <?php include('subscribe.php')  ?> -->

		<!-- Subscribe End -->

		<!-- footer Start -->
          
          <?php include('footer.php')  ?>

		<!-- footer End -->
	</div>
</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	</script>

	</body>
</html>

