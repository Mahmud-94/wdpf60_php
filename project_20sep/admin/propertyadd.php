<?php
session_start();
require("config.php");
////code

if (!isset($_SESSION['auser'])) {
	header("location:index.php");
}

//// code insert
//// add code
$error = "";
$msg = "";
if (isset($_POST['add'])) {

	$title = $_POST['title'];

	$ptype = $_POST['ptype'];

	$bed = $_POST['bed'];
	$balc = $_POST['balc'];
	$hall = $_POST['hall'];
	$stype = $_POST['stype'];
	$bath = $_POST['bath'];
	$kitc = $_POST['kitc'];
	$floor = $_POST['floor'];
	$price = $_POST['price'];
	$city = $_POST['city'];
	$asize = $_POST['asize'];
	$loc = $_POST['loc'];
	$district = $_POST['district'];





	$sql = "INSERT INTO property (title,type,stype,bedroom,bathroom,balcony,kitchen,hall,floor,size,price,location,city,district)
	VALUES('$title','$ptype','$stype','$bed','$bath','$balc','$kitc','$hall','$floor','$asize','$price',
	'$loc','$city','$district')";
	$result = mysqli_query($con, $sql);
	if ($result) {
		$msg = "<p class='alert alert-success'>Property Inserted Successfully</p>";
	} else {
		$error = "<p class='alert alert-warning'>Something went wrong. Please try again</p>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>LM HOMES | Property</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feathericon.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>


	<!-- Header -->
	<?php include("header.php"); ?>
	<!-- /sidebar -->

	<!-- Page Wrapper -->
	<div class="page-wrapper">
		<div class="content container-fluid">

			<!-- Page Header -->
			<div class="page-header">
				<div class="row">
					<div class="col">
						<h3 class="page-title">Property</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
							<li class="breadcrumb-item active">Property</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Page Header -->

			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Add Property Details</h4>
						</div>
						<form method="post" enctype="multipart/form-data">
							<div class="card-body">
								<h5 class="card-title">Property Detail</h5>
								<?php echo $error; ?>
								<?php echo $msg; ?>

								<div class="row">
									<div class="col-xl-12">
										<div class="form-group row">
											<label class="col-lg-2 col-form-label">Title</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="title" required placeholder="Enter Title">
											</div>
										</div>


									</div>
									<div class="col-xl-6">
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Property Type</label>
											<div class="col-lg-9">
												<select class="form-control" required name="ptype">
													<option value="">Select Type</option>
													<option value="apartment">Apartment</option>
													<option value="flat">Flat</option>
													<option value="building">Building</option>
													<option value="house">House</option>
													<option value="villa">Villa</option>
													<option value="office">Office</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Selling Type</label>
											<div class="col-lg-9">
												<select class="form-control" required name="stype">
													<option value="">Select Status</option>
													<option value="rent">Rent</option>
													<option value="sale">Sale</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Bathroom</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="bath" required placeholder="Enter Bathroom (only no 1 to 10)">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Kitchen</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="kitc" required placeholder="Enter Kitchen (only no 1 to 10)">
											</div>
										</div>

									</div>
									<div class="col-xl-6">

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Bedroom</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="bed" required placeholder="Enter Bedroom  (only no 1 to 10)">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Balcony</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="balc" required placeholder="Enter Balcony  (only no 1 to 10)">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Hall</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="hall" required placeholder="Enter Hall  (only no 1 to 10)">
											</div>
										</div>

									</div>
								</div>
								<h4 class="card-title">Price & Location</h4>
								<div class="row">
									<div class="col-xl-6">
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Floor</label>
											<div class="col-lg-9">
												<select class="form-control" required name="floor">
													<option value="">Select Floor</option>
													<option value="1st Floor">1st Floor</option>
													<option value="2nd Floor">2nd Floor</option>
													<option value="3rd Floor">3rd Floor</option>
													<option value="4th Floor">4th Floor</option>
													<option value="5th Floor">5th Floor</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Price</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="price" required placeholder="Enter Price">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">City</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="city" required placeholder="Enter City">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">district</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="district" required placeholder="Enter district">
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Area Size</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" name="asize" required placeholder="Enter Area Size (in sqrt)">
										</div>
									</div>


								</div>
							</div>




							<input type="submit" value="Submit" class="btn btn-primary" name="add" style="margin-left:200px;">

					</div>
					</form>
				</div>
			</div>
		</div>

	</div>
	</div>
	<!-- /Main Wrapper -->


	<!-- jQuery -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/plugins/tinymce/tinymce.min.js"></script>
	<script src="assets/plugins/tinymce/init-tinymce.min.js"></script>
	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

</html>