<?php
    include("../../includes/global.php");
    include("../../includes/database.php");
    include("../includes/checklogin.php");

    $id = $_REQUEST['id'];
    $status = $_REQUEST['status'];

    $query = "UPDATE tbl_user SET valid=".$status." WHERE id=".$id." AND id!=1";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    echo '<meta http-equiv="refresh" content="0;url='.$site_path.'admin/users/" />'
?>