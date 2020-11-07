<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>Porduct slider</title>
	 <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;

  }
  p{
  font-weight: bold;
  margin-top: 28px;
  margin-bottom: 21px;
  }
  li{
  	color: blue;
  }
  .carousel-indicators li{
  	background-color: #151414;
  }
  </style>
</head>
<body>
	<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators" style="margin-bottom: -2rem;">
    <li data-target="#carouselExampleInterval" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleInterval" data-slide-to="1"></li>
   
       </ol>
  <div class="carousel-inner">
  	<p class="text-center">OUR NEWTRADING PRODUCT</p>

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

<!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/s1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>

    </div>
    <div class="carousel-item">
      <img src="images/s1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/s1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
</body>
</html>