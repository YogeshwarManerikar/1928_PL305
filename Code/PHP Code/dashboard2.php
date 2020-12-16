<?php
session_start();
//error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Dashboard</title>
    <link href="vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    
	
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">

<?php include_once('includes/navbar.php');
include_once('includes/sidebar2.php');
?>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->
        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hk-row">

<?php
$query=mysqli_query($con,"select id from tblcategory");
$listedcat=mysqli_num_rows($query);
?>

<div class="col-lg-3 col-md-6">
<div class="card card-sm">
<div class="card-body">
<div class="d-flex justify-content-between mb-5">
<div>
<span class="d-block font-15 text-dark font-weight-500">Categories</span>
</div>
<div>
</div>
</div>
<div class="text-center">
<span class="d-block display-4 text-dark mb-5"><?php echo $listedcat;?></span>
<small class="d-block">Listed Categories</small>
</div>
</div>
</div>
</div>
							

<?php
$ret=mysqli_query($con,"select id from tblcompany");
$listedcomp=mysqli_num_rows($ret);
?>
<div class="col-lg-3 col-md-6">
<div class="card card-sm">
<div class="card-body">
<div class="d-flex justify-content-between mb-5">
<div>
<span class="d-block font-15 text-dark font-weight-500">Companies</span>
</div>
<div>
</div>
</div>

<div class="text-center">
<span class="d-block display-4 text-dark mb-5"><span class="counter-anim"><?php echo $listedcomp;?></span></span>
<small class="d-block">Listed Companies</small>
</div>
</div>
</div>
</div>
							
<?php
$sql=mysqli_query($con,"select id from tblproducts");
$listedproduct=mysqli_num_rows($sql);
?>
<div class="col-lg-3 col-md-6">
<div class="card card-sm">
<div class="card-body">
<div class="d-flex justify-content-between mb-5">
<div>
<span class="d-block font-15 text-dark font-weight-500">Products</span>
</div>
<div>
</div>
</div>
<div class="text-center">
<span class="d-block display-4 text-dark mb-5"><?php echo $listedproduct;?></span>
<small class="d-block">Listed Products</small>
</div>
</div>
</div>
</div>




</div>
					
            </div>
            <!-- /Container -->
			
            <!-- Footer -->
<?php include_once('includes/footer.php');?>
            <!-- /Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/jquery.slimscroll.js"></script>
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>
	<script src="vendors/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="vendors/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="vendors/vectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="dist/js/vectormap-data.js"></script>
    <script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="vendors/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
    <script src="vendors/apexcharts/dist/apexcharts.min.js"></script>
	<script src="dist/js/irregular-data-series.js"></script>
    <script src="dist/js/init.js"></script>
	
</body>

</html>
<?php } ?>