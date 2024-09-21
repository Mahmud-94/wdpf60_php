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
    <div class="body-overlay" id="body-overlay"></div>
    <div class="td-search-popup" id="td-search-popup">
        <form action="index1.php" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- navbar start -->
    <?php include_once("partial/topbar.php"); ?>
    <!-- navbar end -->

    <!-- banner start -->
    <div class="banner-area banner-area-1 banner-area-bg" style="background: url(assets/img/banner/11.jpg);">
        <div class="container">
            <div class="banner-area-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="banner-inner text-center">
                            <p></p>
                            <div class="line"></div>
                            <h2>The Best Way To Find Your Perfect Home</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 mt-4">
                        <form class="main-search-inner">
                            <div class="row custom-gutters-10">
                                <div class="col-md-3">
                                    <div class="single-select-inner">
                                        <select>
                                            <option>Location</option>
                                            <option value="1">Location 1</option>
                                            <option value="2">Location 2</option>
                                            <option value="3">Location 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-select-inner">
                                        <select>
                                            <option>Property</option>
                                            <option value="1">Property 1</option>
                                            <option value="2">Property 2</option>
                                            <option value="3">Property 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single-select-inner">
                                        <select>
                                            <option>Price</option>
                                            <option value="1">Price</option>
                                            <option value="2">Price</option>
                                            <option value="3">Price</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <a class="btn btn-base w-100" href="#"><i class="fa fa-search mr-1"></i> Search</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- service start -->
    <div class="service-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-10">
                    <div class="single-service-wrap">
                        <div class="thumb">
                            <img src="assets/img/service/1.png" alt="icon">
                        </div>
                        <div class="single-service-details">
                            <h4><a href="property-details.php">Sell Poparty</a></h4>
                            <p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-10">
                    <div class="single-service-wrap">
                        <div class="thumb">
                            <img src="assets/img/service/2.png" alt="icon">
                        </div>
                        <div class="single-service-details">
                            <h4><a href="property-details.php">Daily Apartment</a></h4>
                            <p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-10">
                    <div class="single-service-wrap mb-0">
                        <div class="thumb">
                            <img src="assets/img/service/3.png" alt="icon">
                        </div>
                        <div class="single-service-details">
                            <h4><a href="property-details.php">Family House</a></h4>
                            <p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service end -->

    <!-- product area start -->
    <div class="product-area pd-top-118 pd-bottom-90">
        <div class="container">
            <div class="section-title text-center">
                <h6>We are offring the best real estate</h6>
                <h2>Best House For You</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-product-wrap">
                        <div class="thumb">
                            <img src="assets/img/product/11.jpg" alt="img">
                            <a class="cat" href="property-details.php">For Sell</a>
                        </div>
                        <div class="product-wrap-details">
                            <div class="media">
                                <div class="author">
                                    <img src="assets/img/author/1.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <h6><a href="#">Owner Name</a></h6>
                                    <p><img src="assets/img/icon/location-alt.png" alt="img">New York real estate </p>
                                </div>
                                <a class="fav-btn float-right" href="#"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="product-meta">
                                <span class="price">$ 80,650.00</span>
                                <div class="float-right d-inline-block">
                                    <ul>
                                        <li><img src="assets/img/icon/triangle.png" alt="img">2</li>
                                        <li><img src="assets/img/icon/bed.png" alt="img">3</li>
                                        <li><img src="assets/img/icon/wall.png" alt="img">1026 sq ft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-product-wrap">
                        <div class="thumb">
                            <img src="assets/img/product/22.jpg" alt="img">
                            <a class="cat" href="property-details.php">For Sell</a>
                        </div>
                        <div class="product-wrap-details">
                            <div class="media">
                                <div class="author">
                                    <img src="assets/img/author/2.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <h6><a href="#">Owner Name</a></h6>
                                    <p><img src="assets/img/icon/location-alt.png" alt="img">New York real estate </p>
                                </div>
                                <a class="fav-btn float-right" href="#"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="product-meta">
                                <span class="price">$ 80,650.00</span>
                                <div class="float-right d-inline-block">
                                    <ul>
                                        <li><img src="assets/img/icon/triangle.png" alt="img">2</li>
                                        <li><img src="assets/img/icon/bed.png" alt="img">3</li>
                                        <li><img src="assets/img/icon/wall.png" alt="img">1026 sq ft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-product-wrap">
                        <div class="thumb">
                            <img src="assets/img/product/33.jpg" alt="img">
                            <a class="cat" href="property-details.php">For Sell</a>
                        </div>
                        <div class="product-wrap-details">
                            <div class="media">
                                <div class="author">
                                    <img src="assets/img/author/3.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <h6><a href="#">Owner Name</a></h6>
                                    <p><img src="assets/img/icon/location-alt.png" alt="img">New York real estate </p>
                                </div>
                                <a class="fav-btn float-right" href="#"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="product-meta">
                                <span class="price">$ 80,650.00</span>
                                <div class="float-right d-inline-block">
                                    <ul>
                                        <li><img src="assets/img/icon/triangle.png" alt="img">2</li>
                                        <li><img src="assets/img/icon/bed.png" alt="img">3</li>
                                        <li><img src="assets/img/icon/wall.png" alt="img">1026 sq ft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product area end -->

    <!-- video area start -->
  
    <!-- video area end -->

    <!-- product area start -->
    <div class="product-area pd-top-118 pd-bottom-90">
        <div class="container">
            <div class="section-title text-center">
                <h6>We are offring the best real estate</h6>
                <h2>Populer Categores</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-category-product-wrap">
                        <div class="thumb">
                            <img src="assets/img/product/cat-11.png" alt="img">
                        </div>
                        <div class="single-category-product-details">
                            <h4><a href="property-details.php">Orchard</a></h4>
                            <a class="btn btn-base" href="property.php">3 Porparties</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-category-product-wrap">
                        <div class="thumb">
                            <img src="assets/img/product/cat-22.png" alt="img">
                        </div>
                        <div class="single-category-product-details">
                            <h4><a href="property-details.php">Rose Cottage</a></h4>
                            <a class="btn btn-base" href="property.php">6 Porparties</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-category-product-wrap">
                        <div class="thumb">
                            <img src="assets/img/product/cat-33.png" alt="img">
                        </div>
                        <div class="single-category-product-details">
                            <h4><a href="property-details.php">Ong Barn</a></h4>
                            <a class="btn btn-base" href="property.php">2 Porparties</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 order-lg-12">
                    <div class="single-category-product-wrap">
                        <div class="thumb">
                            <img src="assets/img/product/cat-55.png" alt="img">
                        </div>
                        <div class="single-category-product-details">
                            <h4><a href="property-details.php">Family House</a></h4>
                            <a class="btn btn-base" href="property.php">1 Porparties</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-1">
                    <div class="single-category-product-wrap">
                        <div class="thumb">
                            <img src="assets/img/product/cat-44.png" alt="img">
                        </div>
                        <div class="single-category-product-details">
                            <h4><a href="property-details.php">Beach House</a></h4>
                            <a class="btn btn-base" href="property.php">7 Porparties</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product area end -->

    <!-- testimonial area start -->
   
    <!-- testimonial area end -->

    <!-- Propartes area start -->
    
    <!-- Propartes area end -->

    <!-- call-to-action area start -->
    
    <!-- call-to-action area end -->

    <!-- agent area start -->
    <div class="agent-area text-center pd-top-118 pd-bottom-90">
        <div class="container">
            <div class="section-title text-center">
                <h6>Meet Our Agent</h6>
                <h2>Our Best Agent</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-agent-wrap">
                        <div class="thumb">
                            <img src="assets/img/agent/22.jpg" alt="img">
                        </div>
                        <div class="details">
                            <h4>Sandara Mrikon</h4>
                            <h6>Estate Agent</h6>
                            <ul class="social-area style-2">
                                <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-agent-wrap">
                        <div class="thumb">
                            <img src="assets/img/agent/11.jpg" alt="img">
                        </div>
                        <div class="details">
                            <h4>Sarif Jaya Miprut</h4>
                            <h6>Area Agent</h6>
                            <ul class="social-area style-2">
                                <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-agent-wrap">
                        <div class="thumb">
                            <img src="assets/img/agent/33.jpg" alt="img">
                        </div>
                        <div class="details">
                            <h4>Jordan Smith</h4>
                            <h6>Expart Agent</h6>
                            <ul class="social-area style-2">
                                <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- agent area end -->

    <!-- client area start -->
    
    <div class="container">
        <div class="client-slider bg-main style-two owl-carousel">
            <div class="item">
                <div class="thumb">
                    <img src="assets/img/client/2.png" alt="img">
                </div>
            </div>
            <div class="item">
                <div class="thumb">
                    <img src="assets/img/client/3.png" alt="img">
                </div>
            </div>
            <div class="item">
                <div class="thumb">
                    <img src="assets/img/client/4.png" alt="img">
                </div>
            </div>
            <div class="item">
                <div class="thumb">
                    <img src="assets/img/client/5.png" alt="img">
                </div>
            </div>
            <div class="item">
                <div class="thumb">
                    <img src="assets/img/client/2.png" alt="img">
                </div>
            </div>
        </div>
    </div>
    <!-- client area end -->

    <!-- blog area start -->
   
    <!-- Blog area end -->

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