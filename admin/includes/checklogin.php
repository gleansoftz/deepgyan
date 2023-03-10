<?php
	$_SESSION['ref_url'] = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if(isset($_SESSION['login'])){
		if($_SESSION['login']){
		 	$admin_name = $_SESSION['name'];
			$user_type = $_SESSION['user_type'];
			if(isset($_SESSION['ref_url'])){
				$ref_url = $_SESSION['ref_url'];
			}else{
				$ref_url = $site_path;
			}
	      // echo '<meta http-equiv="refresh" content="0; url='.$ref_url.'">';
			// exit;
		}else{
	      echo '<meta http-equiv="refresh" content="0; url='.$site_path.'admin/login.php">';
	      exit;
		}
	}else{
	  echo '<meta http-equiv="refresh" content="0; url='.$site_path.'admin/login.php">';
	      exit;
	}
?>