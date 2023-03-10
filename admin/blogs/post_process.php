<?php
    include("../../includes/global.php");
    include("../../includes/database.php");
    include("../includes/checklogin.php");

	$title = $conn -> real_escape_string($_POST['title']);
	$sort_desc = $conn -> real_escape_string($_POST['sort_desc']);
	$description = $conn -> real_escape_string($_POST['description']);
	$doe = date('Y-m-d H:i:s');
	
	$imageFileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
	
	$validext = array('jpg', 'jpeg', 'png', 'gif');

	if(in_array($imageFileType, $validext)){
		$target_dir = "../../images/post/";
		$filename =  time() .'-'.basename($_FILES["image"]["name"]);
		$target_file = $target_dir .$filename;
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
	}else{
		$filename = "defalut-post-image.jpg";
	}

	$query = "INSERT INTO tbl_post SET title='".$title."', image='".$filename."', sort_desc='".$sort_desc."', description='".$description."', doe='".$doe."', dou='".$doe."'";
	$stmt = $conn->prepare($query); 
	$stmt->execute();
    echo '<meta http-equiv="refresh" content="0;url='.$site_path.'admin/blogs/" />';
?>