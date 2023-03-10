<?php
    include("../../includes/global.php");
    include("../../includes/database.php");
    include("../includes/checklogin.php");

    // print_r($_REQUEST);
    $id = $_REQUEST['id'];
    $status = $_REQUEST['status'];

    $query = "UPDATE tbl_subscriber SET valid=".$status." WHERE id=$id";
    $stmt = $conn->prepare($query); 
    $stmt->execute();
    echo '<meta http-equiv="refresh" content="0;url='.$site_path.'admin/subscribers/" />'

?>