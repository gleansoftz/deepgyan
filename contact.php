<?php
	include("./includes/global.php");
	include("./includes/database.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Deepgyan - About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $site_path;?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $site_path;?>css/animate.css">
    
    <link rel="stylesheet" href="<?php echo $site_path;?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $site_path;?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $site_path;?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo $site_path;?>css/aos.css">

    <link rel="stylesheet" href="<?php echo $site_path;?>css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo $site_path;?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo $site_path;?>css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo $site_path;?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo $site_path;?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo $site_path;?>css/style.css">
<?php include("./includes/head.php"); ?>

  </head>
  <body>

	<div id="colorlib-page">

<?php include("sidebar.php");?>

		<div id="colorlib-main">
			<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container px-0">
	        <div class="row no-gutters block-9">
	          <div class="col-lg-6 order-md-last">
	            <form action="#" class="bg-primary p-5 contact-form">
	              <div class="form-group">
	                <input type="text" class="form-control" placeholder="Your Name">
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control" placeholder="Your Email">
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control" placeholder="Subject">
	              </div>
	              <div class="form-group">
	                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
	              </div>
	              <div class="form-group">
	                <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
	              </div>
	            </form>
	          
	          </div>

	          <div class="col-lg-6 d-flex">
	          	<div id="map" class="bg-light"></div>
	          </div>
	        </div>

	        <div class="row d-flex mb-5 px-4 px-md-4 contact-info mt-5">
	          <div class="col-md-12 mb-4">
	            <h2 class="h3">Contact Information</h2>
	          </div>
	          <div class="w-100"></div>
	          <div class="col-lg-6 col-xl-3 mb-4">
	          	<div class="info">
		            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
		          </div>
	          </div>
	          <div class="col-lg-6 col-xl-3 mb-4">
	          	<div class="info">
		            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
		          </div>
	          </div>
	          <div class="col-lg-6 col-xl-3 mb-4">
	          	<div class="info">
		            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
		          </div>
	          </div>
	          <div class="col-lg-6 col-xl-3 mb-4">
	          	<div class="info">
		            <p><span>Website</span> <a href="#">yoursite.com</a></p>
		          </div>
	          </div>
	        </div>
	    	</div>
	    </section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="<?php echo $site_path;?>js/jquery.min.js"></script>
  <script src="<?php echo $site_path;?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo $site_path;?>js/popper.min.js"></script>
  <script src="<?php echo $site_path;?>js/bootstrap.min.js"></script>
  <script src="<?php echo $site_path;?>js/jquery.easing.1.3.js"></script>
  <script src="<?php echo $site_path;?>js/jquery.waypoints.min.js"></script>
  <script src="<?php echo $site_path;?>js/jquery.stellar.min.js"></script>
  <script src="<?php echo $site_path;?>js/owl.carousel.min.js"></script>
  <script src="<?php echo $site_path;?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo $site_path;?>js/aos.js"></script>
  <script src="<?php echo $site_path;?>js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo $site_path;?>js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo $site_path;?>js/google-map.js"></script>
  <script src="<?php echo $site_path;?>js/main.js"></script>
<?php include("./includes/footer.php"); ?>
  </body>
</html>