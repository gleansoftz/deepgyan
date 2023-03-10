<?php
    include("../includes/global.php");
    include("../includes/database.php");
    // print_r($_POST);
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $upass = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "SELECT * FROM tbl_user WHERE username='".$uname."' AND password='".$upass."' AND valid=1"; // SQL with parameters
    if(isset($_SESSION['ref_url'])){
        $URL=$_SESSION['ref_url'];
    }else{
        $URL = $site_path.'admin/';
    }
    $result = mysqli_query($conn, $sql); // get the mysqli result
    // echo mysqli_num_rows($result);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_assoc($result);
        // print_r($row);
        $_SESSION['login']=1;
        $_SESSION['user_type']=$row['type'];
        $_SESSION['user_id']=$row['id'];
        $_SESSION['name']=$row['name'];
        echo '<meta http-equiv="refresh" content="0; url='.$URL.'">';
    }else{
        $_SESSION['login'] = false;
        $msg = "Account Not found.";
        echo '<meta http-equiv="refresh" content="0; url='.$URL.'?emsg='.$msg.'">';
    }
?>