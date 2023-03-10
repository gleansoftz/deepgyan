<?php
	include("./includes/global.php");
	include("./includes/database.php");

  $query = "SELECT * FROM tbl_post WHERE valid=1 AND deleted=0";
  $stmt = $conn->prepare($query); 
  $stmt->execute();
  $result = $stmt->get_result();
  $num_rows = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DeepGyan - Blog</title>
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
			<section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
	    	<div class="container px-0">
	    		<div class="row no-gutters">
<?php 
  $i= 1;
  while($row = $result->fetch_assoc()){
    // print_r($row);
    $id = $row['id'];
    $category_id = $row['category_id'];
    $tag = $row['tag'];
    $user_id = $row['user_id'];
    $title = $row['title'];
    $image = $row['image'];
    $sort_desc = $row['sort_desc'];
    $description = $row['description'];
    $view_count = $row['view_count'];
    $doe = $row['doe'];
    $dou = $row['dou'];
    $valid = $row['valid'];
    $deleted = $row['deleted'];
    if($image==""){
    	$image = "default-blog-img.jpg";
    }
?>
<div class="col-md-4 d-flex">
	<div class="blog-entry ftco-animate">
		<a href="blog/detai/?" class="img" style="background-image: url(<?php echo $site_path;?>images/<?php echo $image; ?>);"></a>
		<div class="text p-4">
			<h3 class="mb-2"><a href="<?php echo $site_path.'blog/detail/?id='.$id;?>"><?php echo $row['title'];?></a></h3>
			<div class="meta-wrap">
				<p class="meta">
				<span><i class="icon-calendar mr-2"></i> <?=date("M. d, Y", strtotime($doe))?></span>

				<span><a href=""><i class="icon-folder-o mr-2"></i>Travel</a></span>

				<span><i class="icon-comment2 mr-2"></i>5 Comment</span>
				</p>
			</div>
			<p class="mb-4"><?php echo $sort_desc;?></p>
			<p><a href="<?php echo $site_path.'blog/detail/?id='.$id;?>" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
		</div>
	</div>
</div>
<?php 
}
?>
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
  <script src="<?php echo $site_path;?>js/main.js"></script>
<?php include("./includes/footer.php"); ?>
  </body>
</html>