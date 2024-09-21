<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mindgrand - Real Estate HTML Template</title>

    <!-- Stylesheet -->
    <?php include_once("partial/css.php"); ?>

</head>
<body class="bg-gray">

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search popup start-->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="td-search-popup" id="td-search-popup">
        <form action="index1.php" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->

    <!-- navbar start -->
    <?php include_once("partial/navbar.php"); ?>
    <!-- navbar end -->
    
    <!-- breadcrumb start -->
    <div class="breadcrumb-area bg-overlay-2" style="background-image:url('assets/img/other/8.png')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title text-center">
                    <h2 class="page-title">Sign Up</h2>
                    <ul class="page-list">
                        <li><a href="index1.php">Home</a></li>
                        <li>Sign Up</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end --> 

    <!-- signup-page-Start --> 
    <div class="signup-page-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    <form class="signin-inner">
                        <div class="row">
                            <div class="col-12">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="First Name">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Last Name">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Email">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Password">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Confirm Password">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="single-checkbox-inner">
                                    <input type="checkbox">
                                    By clicking "create account".
                                </label>
                            </div>
                            <div class="col-12 mb-4">
                                <button class="btn btn-base w-100">Create Account</button>
                            </div>
                            <div class="col-12">
                                <span>By creating an account</span>
                                <a href="signin.php"><strong>Signin</strong></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- signup-page-end --> 

    <!-- footer area start -->
    <?php include_once("partial/footer.php"); ?>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <!-- all plugins here -->
    <?php include_once("partial/js.php"); ?>
</body>
</html>