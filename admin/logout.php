<?php
    include("../includes/global.php");

    $_SESSION['login'] = '0';
    if(isset($_SESSION['ref_url'])){
        $ref_url = $_SESSION['ref_url'];
    }else{
        $ref_url = $site_path."admin/";
    }
    session_destroy();
    echo '<meta http-equiv="refresh" content="0; url='.$ref_url.'">';

?>