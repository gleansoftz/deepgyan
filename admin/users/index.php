<?php
    include("../../includes/global.php");
    include("../../includes/database.php");
    include("../includes/checklogin.php");

    $query = "SELECT * FROM tbl_user WHERE deleted=0";
    $stmt = $conn->prepare($query); 
    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User list</title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo $site_path;?>admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $site_path;?>admin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo $site_path;?>admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


<?php include("../navbar.php");?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manage Users</h1>
                    <!-- <p class="mb-4">&nbsp;</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Users List (<?=$num_rows?> of <?=$num_rows?>)</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Doe</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Doe</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
<?php 
  $i= 1;
  while($row = $result->fetch_assoc()){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $type = $row['type'];
    $username = $row['username'];
    $password = $row['password'];
    $doe = $row['doe'];
    $dou = $row['dou'];
    $valid = $row['valid'];
    $deleted = $row['deleted'];
?>
                                        <tr>
                                            <td><?=$id;?></td>
                                            <td><?=$name;?></td>
                                            <td><?=$email;?></td>
                                            <td><?=$type;?></td>
    <td>
    <?php if($valid==1){
    ?>
            <a href="status.php?id=<?php echo $id;?>&status=0"><span class="text-success"><span class="material-icons">check_circle</span></span>
          <?php
              }else{
          ?>
            <a href="status.php?id=<?php echo $id;?>&status=1"><span class="text-danger"><span class="material-icons">dangerous</span></span>
          <?php
              }
          ?>
    </td>
    <td><?=$doe;?></td>
</tr>
<?php
}
?>                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include('../footer.php');?>
    <!-- Page level plugins -->
    <script src="<?php echo $site_path;?>admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo $site_path;?>admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo $site_path;?>admin/js/demo/datatables-demo.js"></script>