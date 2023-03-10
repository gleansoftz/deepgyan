<?php
	include("../../includes/global.php");
	include("../../includes/database.php");
	include("../../includes/functions.php");

	if(isset($_REQUEST['id'])){
		$id = $_REQUEST['id'];
		$query = "SELECT * FROM tbl_post WHERE id=".$id." AND valid=1 AND deleted=0";
    $stmt = $conn->prepare($query); 
    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = mysqli_num_rows($result);
	}else{
		echo "redirect home";
	}
  $rowsblogdetail = $result->fetch_assoc();
  // print_r($rowsblogdetail);

    $blog_id = $rowsblogdetail['id'];
    $blog_category_id = $rowsblogdetail['category_id'];
    $blog_tag = $rowsblogdetail['tag'];
    $blog_user_id = $rowsblogdetail['user_id'];
    $blog_title = $rowsblogdetail['title'];
    $blog_sort_desc = $rowsblogdetail['sort_desc'];
    $blog_description = $rowsblogdetail['description'];
    $blog_image = $rowsblogdetail['image'];
    $blog_view_count = $rowsblogdetail['view_count'];
    $blog_doe = $rowsblogdetail['doe'];
    $blog_dou = $rowsblogdetail['dou'];
    $blog_valid = $rowsblogdetail['valid'];
    $blog_deleted = $rowsblogdetail['deleted'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $site_title;?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../../css/animate.css">
    
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">

    <link rel="stylesheet" href="../../css/aos.css">

    <link rel="stylesheet" href="../../css/ionicons.min.css">

    <link rel="stylesheet" href="../../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../../css/flaticon.css">
    <link rel="stylesheet" href="../../css/icomoon.css">
    <link rel="stylesheet" href="../../css/style.css">
<?php include("../../includes/head.php"); ?>
  </head>
  <body>

	<div id="colorlib-page">
<?php include("../../sidebar.php"); ?>
		<div id="colorlib-main">
			<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container px-0">
	    		<div class="row d-flex no-gutters">
	    			<div class="col-lg-8 px-md-5 py-5">
	    				<div class="row">
	    					<h1 class="mb-3"><?=$blog_title;?></h1>
		            <?php echo $blog_description;?>
		            <div class="tag-widget post-tag-container mb-5 mt-5">
		              <div class="tagcloud">
		              	&nbsp;
		              	<?php
		              		$tags = printTag($conn, $blog_tag);
		              			// print_r($tags);
		              		while ($rows = $tags->fetch_assoc()) {
		                		echo '<a href="'.$site_path.'tag/?id='.$rows["id"].'" class="tag-cloud-link">'.$rows["title"].'</a>';
		              		}
		              	?>
                		<a href="<?=$site_path?>tag/" class="tag-cloud-link"> Show All Tags</a>

		                <!-- <a href="#" class="tag-cloud-link">Life</a>
		                <a href="#" class="tag-cloud-link">Sport</a>
		                <a href="#" class="tag-cloud-link">Tech</a>
		                <a href="#" class="tag-cloud-link">Travel</a> -->
		              </div>
		            </div>
		            <?php /*?>
		            <div class="about-author d-flex p-4 bg-light">
		              <div class="bio mr-5">
		                <img src="../../images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
		              </div>
		              <div class="desc">
		                <h3>George Washington</h3>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
		              </div>
		            </div>
		            <?php */ ?>
			    		</div><!-- END-->
			    	</div>
	    			<div class="col-lg-4 sidebar ftco-animate bg-light pt-5">
	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Popular Articles</h3>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(../../images/image_1.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> Sept. 12, 2019</a></div>
	                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(../images/image_2.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> Sept. 12, 2019</a></div>
	                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(../images/image_3.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> Sept. 12, 2019</a></div>
	                    <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="sidebar-box ftco-animate">
	            	<h3 class="sidebar-heading">Archives</h3>
	              <ul class="categories">
	              	<li><a href="#">December 2018 <span>(10)</span></a></li>
	                <li><a href="#">September 2018 <span>(6)</span></a></li>
	                <li><a href="#">August 2018 <span>(8)</span></a></li>
	                <li><a href="#">July 2018 <span>(2)</span></a></li>
	                <li><a href="#">June 2018 <span>(7)</span></a></li>
	                <li><a href="#">May 2018 <span>(5)</span></a></li>
	              </ul>
	            </div>
	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Paragraph</h3>
	              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut.</p>
	            </div>
	          </div><!-- END COL -->
	    		</div>
	    	</div>
	    </section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/jquery.easing.1.3.js"></script>
  <script src="../../js/jquery.waypoints.min.js"></script>
  <script src="../../js/jquery.stellar.min.js"></script>
  <script src="../../js/owl.carousel.min.js"></script>
  <script src="../../js/jquery.magnific-popup.min.js"></script>
  <script src="../../js/aos.js"></script>
  <script src="../../js/jquery.animateNumber.min.js"></script>
  <script src="../../js/scrollax.min.js"></script>
  <script src="../../js/main.js"></script>

<?php include("../../includes/footer.php"); ?>

  </body>
</html>