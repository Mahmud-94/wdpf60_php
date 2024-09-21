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
    <div class="breadcrumb-area bg-overlay-2" style="background-image:url('assets/img/other/99.jpg')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title text-center">
                    <h2 class="page-title">Add Property</h2>
                    <ul class="page-list">
                        <li><a href="index1.php"></a></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end --> 

    <!-- add-property Start --> 
    <div class="add-property-area pd-top-120">
        <div class="container">
            <form>
                <div class="btn btn-base hover-none">Basic Information</div>
                <div class="property-form-grid">
                    <div class="row">
                        <div class="col-12">
                            <label class="single-input-inner style-bg-border">
                                <span class="label">Proparty Title</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="single-input-inner style-bg-border">
                                <span class="label">Proparty Title</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="single-input-inner style-bg-border">
                                <span class="label">Proparty Title</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div class="single-select-inner style-bg-border">
                                <span class="label">Beds</span>
                                <select>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-select-inner style-bg-border">
                                <span class="label">Baths</span>
                                <select>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="avatar-upload-input text-center">
                                <img src="assets/img/icon/upload.png" alt="img">
                                <h2>Upload your photo</h2>
                                <p>Its must be a clean photo</p>
                                <div class="avatar-edit-input">
                                    <input class="btn btn-base" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                    <label class="btn btn-base" for="imageUpload">Click here to Upload</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="single-input-inner style-bg-border">
                                <span class="label">Address</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="single-input-inner style-bg-border">
                                <span class="label">City</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="single-input-inner style-bg-border">
                                <span class="label">State</span>
                                <input type="text">
                            </label>
                        </div>
                        <div class="col-md-6">
                            <label class="single-input-inner style-bg-border">
                                <span class="label">Zip Code</span>
                                <input type="text">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="btn btn-base hover-none">Contact Details</div>
                <div class="property-form-grid">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="single-input-inner style-bg-border">
                                <input type="text" placeholder="Name">
                            </label>
                        </div>
                        <div class="col-md-4">
                            <label class="single-input-inner style-bg-border">
                                <input type="text" placeholder="Email">
                            </label>
                        </div>
                        <div class="col-md-4">
                            <label class="single-input-inner style-bg-border">
                                <input type="text" placeholder="Phone">
                            </label>
                        </div>
                        <div class="col-12">
                            <label class="single-input-inner style-bg-border">
                                <textarea placeholder="Description"></textarea>
                            </label>
                        </div>
                        <div class="col-12 text-center mb-4">
                            <button class="btn btn-base">Submit Now</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- add-property end --> 

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