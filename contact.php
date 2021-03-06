<?php
// $fnameErr = $lnameErr= $emailErr = "";
// $fname = $lname= $email = "";

if(isset($_POST['submit']))
{
	$to  = "mikesh470@gmail.com";
	$fname     = $_POST['fname'];
	$lname    = $_POST['lname'];
	$email  =  $_POST['email'];
	$subject  = $_POST['subject'];
	$text  = $_POST['message'];


	// if (empty($_POST['fname'])) 
	// {
	// 	echo '<div style="color:red;">Enter Your First Name</div>';
	// }
	// else
	// {	
	// 	if (!preg_match("/^[a-zA-Z ]*$/", $_POST['fname'])) {
	// 	  echo "Only letters and white space allowed";
	// 	}
	// 	else
	// 	{
	// 		echo $_POST['fname'];
	// 	}
	// }

	$header  = "From: $fname". " "."$lname<$email>";
	
	$message = "First Name: $fname \n last Name : $lname \n E-mail: $email \nSubject: $subject \n\n $text";
	   
	   if($fname =='' || $lname =='' || $email == '' || $subject ==''|| $text =='')
    	{
    	    $msg = "<span style='color:red'>Fill all the required filled!</span>";
     	}
     	else    
     	{
     	    if(mail($to, $subject,$message,$header))
         	{
         	$msg = "<span style='color:green'>Your message successfully sent!
         	Thank you for contacting us, we will reply
         	to your inquiry as soon as possible!</span>";
         	}
         	else
         	{
         	    $msg = "<span style='color:red'>Error, Please try again later.<span>";
         	}
        }
    }
?>
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

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		 <!--   Start Navbar -->

		<?php include('navbar.php')  ?>

           <!--   End Navbar -->
           <aside id="colorlib-hero" style="height: 450px; overflow: hidden;">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-left">
				   					<h1 style="font-size: 30px;">Contact Us</h1>
				   					<h2 class="bread"><span><a href="index">Home</a></span> <span>Contact Us</span></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		

		<div id="colorlib-contact" style="padding-top: 60px !important;">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1" style="font-size: 12px;">
						<h3>Contact Information</h3>
						<div class="row contact-info-wrap">
							<div class="col-sm-4">
								<p><span><i class="icon-location"></i></span>Ambedkar Chowk, Ambikapur,(Chhattisgarh)-497001.</p>
							</div>
							<div class="col-sm-4">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 07774 - 230141</a></p>
							</div>
							<div class="col-sm-4">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com" >nishants_next_world@yahoo.com</a></p>
							</div>
							<!-- <div class="col-sm-4">
								<p><span><i class="icon-globe"></i></span> <a href="#">nishantdrnishant@yahoo.co.in</a></p>
							</div> -->
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1">
						<div class="contact-wrap">
							<h3>Get In Touch</h3>
							<form action="#" method="post" onsubmit="return validateForm()" >
								<span><strong><?php if(isset($msg)){ echo $msg; } ?></strong></span>
								<div class="row form-group">
									<div class="col-md-6 padding-bottom">
										<label for="fname">First Name</label>
										<input  type="text" id="fname" name="fname" class="form-control" placeholder="Your firstname"  style="color: #1e1b1b;">
										<span id="first_name_error" class="text-danger"></span>
									</div>
									<div class="col-md-6">
										<label for="lname">Last Name</label>
										<input type="text" id="lname" name="lname" class="form-control" placeholder="Your lastname"  style="color: #1e1b1b;">
										<span id="last_name_error" class="text-danger"></span>
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="email">Email</label>
										<input type="text" id="email" name="email" class="form-control" placeholder="Your email address"  style="color: #1e1b1b;">
										<span id="email_error" class="text-danger"></span>
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="subject">Subject</label>
										<input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message"  style="color:#1e1b1b;">
										<span id="subject_error" class="text-danger"></span>
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="4" class="form-control" placeholder="Say something about us"  style="color: #1e1b1b;"></textarea>
										<span id="message_error" class="text-danger"></span>
									</div>
								</div>
								<div class="form-group text-center">
									<input type="submit" value="Send Message" name="submit" class="btn btn-primary" >
								</div>
							</form>		
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- <div id="map" class="colorlib-map"></div> -->

		<!-- footer Start -->
          
          <?php include('footer.php')  ?>

		<!-- footer End -->
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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
		function validateForm()
		{
			let first_name	= $('#fname').val();
			let last_name	= $('#lname').val();
			let email	= $('#email').val();
			let subject	= $('#subject').val();
			let message	= $('#message').val();
			let error = 0;

			if (first_name == '') {
				$('#first_name_error').html('This feild is Required');
				error++;
			}
			else{
				
                var regex = /^[a-zA-Z ]*$/;
                if(!regex.test(first_name)){
                	$('#first_name_error').html('Enter valid  first name');
                	error++;
                  }
                }
                   
            if (last_name == '') {
				$('#last_name_error').html('This feild is Required');
				error++;

			} else{

				var regex1 = /^[a-zA-Z ]*$/;
                if(!regex1.test(last_name)){
                	$('#last_name_error').html('Enter valid last name');
                	error++;
                  }
                }
			if (email== '') {
				$('#email_error').html('This feild is Required');
				error++;
			}
             else{
             	var regex3 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
             	if(!regex3.test(email)){
             		$('#email_error').html('Enter valid Email ');
                	error++;
             	}
             }
			
            if (subject== '') {
				$('#subject_error').html('This feild is Required');
				error++;
			}
			if (message== '') {
				$('#message_error').html('This feild is Required');
				// error++;
			}


			if (error == 0) {
				form.submit();
			}
			else {
				return false;
			}

		}
	</script>
	</body>
</html>

