

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <title>Cleveland - Responsive Health And Medical Template</title>
    <!-- Bootstrap core CSS -->
	<?php include "parts/front/css.php"; ?>
    
</head>

<body class="home-2">

	<!-- START PRELOADER -->
	<div id="page-preloader">
		<div class="preloader-wrench"></div>
	</div>
	<!-- END PRELOADER --> 
    
	<!-- START HEADER SECTION -->
	<?php include "parts/front/header.php"; ?>
	<!-- END HEADER SECTION -->
	
	<!-- START SLIDER SECTION -->
	<?php include "parts/front/slider.php"; ?>
	<!-- END SLIDER SECTION  -->
	
	<!-- START ABOUT SECTION -->
    <?php include "parts/about.php"; ?>
    <!-- END ABOUT SECTION -->
	
	<!-- START SERViCE SECTION -->
	<?php include "parts/front/service.php"; ?>
    <!-- END SERViCE SECTION -->
	
	<!-- START GALLERY SECTION -->
    
    <!-- END GALLERY SECTION -->
	
	
	<!-- START VIDEO & FAQ -->
    <?php include "parts/front/video_faq.php"; ?>
    <!-- END VIDEO & FAQ -->
	
	<!-- START DOCTOR SECTION -->
	<?php include "parts/front/doctor.php"; ?>
    <!-- END DOCTOR SECTION -->
	
	<!-- START BLOG SERCTION -->
	<?php include "parts/front/blog.php"; ?>
    <!-- END BLOG SERCTION -->
	
	<!-- SINGLE DOCTOR PROMO -->
	<div class="single-doc-promo bg-theme mt-5">
        <div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-12">
					<div class="single-doc-promo-box-img">
						<img class="img-fluid" src="assets/img/bg/doc-promo.png" alt="">
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-12">
					<div class="single-doc-promo-box">
						<div class="row"> 
							<div class="col-lg-9">
								<div class="single-doc-promo-content">
								     <h5>If you need any home service</h5>
									 <p>Feel free to call us 24hr emergency number</p>
									 <a href="#"><i class="icofont icofont-phone"></i>+88 315 67 39</a>
								</div> 
							</div> 
							<div class="col-lg-3 mt-4">
								<a href="#" class="single-doc-promo-btn fadeInUp animated">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END SINGLE DOCTOR PROMO -->
	
    <!-- START FOOTER -->
    <?php include "parts/front/footer.php"; ?>
    <!-- END FOOTER -->
	
	
    <!-- Latest jQuery -->
	<?php include "parts/front/js.php"; ?>
    
</body>

</html>