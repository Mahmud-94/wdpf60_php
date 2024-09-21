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

<body>

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
    <div class="breadcrumb-area bg-overlay-2" style="background-image:url('assets/img/other/88.jpg')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title text-center">
                    <h2 class="page-title">Contact</h2>
                    <ul class="page-list">
                        <li><a href="index1.php"></a></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- contact-page-Start -->
    <div class="contact-page-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-details-inner mng-box-shadow">
                        <h4>Adipisicing elit se tempor labore .</h4>
                        <p>Lorem ipsum dolor consectetur aLorem ipsum consectetur adipisicing elit, eiusmod tempor
                            incididunt labore et dolore magna aliqua.minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-single-list">
                                    <h5>India Office</h5>
                                    <ul>
                                        <li><img src="assets/img/icon/location2.png" alt="img"> 420 Love Sreet 133/2
                                            Mirpur Nevis, Caribbean Dhaka</li>
                                        <li><img src="assets/img/icon/location2.png" alt="img"> +(066) 19 5017 800 628
                                        </li>
                                        <li><img src="assets/img/icon/location2.png" alt="img"> +(066) 19 5017 800 628
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-single-list">
                                    <h5>India Office</h5>
                                    <ul>
                                        <li><img src="assets/img/icon/location2.png" alt="img"> +(066) 19 5017 800 628
                                        </li>
                                        <li><img src="assets/img/icon/location2.png" alt="img"> +(066) 19 5017 800 628
                                        </li>
                                        <li><img src="assets/img/icon/location2.png" alt="img"> +(066) 19 5017 800 628
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="contact-single-date">
                                    <p><strong>Monday-Friday:</strong> 9am - 8pm</p>
                                    <p><strong>Saturday:</strong> 10 am to 3 pm</p>
                                    <p><strong>Sunday: </strong> Clossed</p>
                                </div>
                            </div>
                            <div class="col-md-6 align-self-center text-md-right">
                                <ul class="social-area style-3">
                                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <form action="mail.php" method="post" id="contact-form">
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="single-select-inner style-bg-border">
                                    <select name="service">
                                        <option value="1">General Information</option>
                                        <option value="2">General Information</option>
                                        <option value="3">General Information</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" name="subject" placeholder="Subject">
                                </label>
                            </div>
                            <div class="col-xl-12 col-lg-6">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" name="name" placeholder="Name">
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" name="email" placeholder="Email">
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" name="phone" placeholder="Phone">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="single-input-inner style-bg-border">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </label>
                            </div>
                            <div class="col-12 mb-4">
                                <button class="btn btn-base">Submit Now</button>
                            </div>
                        </div>
                        <p class="form-messege mb-0 mt-20"></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact-page-map mg-top-100">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d198059.49240377638!2d-84.68048827338674!3d39.13652252762691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1615660592820!5m2!1sen!2sbd"></iframe>
        </div>
    </div>
    <!-- contact-page-end -->

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