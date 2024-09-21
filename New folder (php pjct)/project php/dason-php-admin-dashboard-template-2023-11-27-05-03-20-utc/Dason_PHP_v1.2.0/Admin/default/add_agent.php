

<head>

    <title><?php echo $language["Dashboard"]; ?> | Dason - Admin & Dashboard Template</title>

    <?php include 'layouts/head.php'; ?>
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

            <div class="page-title-box">

                        <div class="row align-items-center ">
                            <div class="col-md-8">
                                <div class="page-title-box">
                                    <h4 class="page-title">Uploads Validation</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="javascript:void(0);">Zegva</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="javascript:void(0);">Forms</a>
                                        </li>
                                        <li class="breadcrumb-item active">Uploads Validation</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="float-right d-none d-md-block app-datepicker">
                                    <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">
                                    <i class="mdi mdi-chevron-down mdi-drop"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6 offset-2">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Agent entry name</h4>
                                    



                                    <form class="" action="#" enctype="multipart/form-data" method="post">
                                        <div class="form-group">
                                            <label>specilization</label>

                                            <select name="specilization" id="" class="form-control">
                                                <option value="">Select one</option>

                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>doctorName</label>
                                            <div>
                                                <input type="text" class="form-control" required placeholder="name" name="docname" />
                                            </div>

                                        </div>




                                        <div class="form-group">
                                            <label>address </label>
                                            <div>
                                                <textarea required class="form-control" name="address" rows="5"></textarea>
                                            </div>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>contactno</label>
                                            <div>
                                                <input data-parsley-type="digits" name="phone" type="text" class="form-control" required placeholder="Enter only digits" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>email</label>
                                            <div>
                                                <input data-parsley-type="number" name="email" type="text" class="form-control" required placeholder="Enter only numbers" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>password</label>
                                            <div>
                                                <input data-parsley-type="alphanum" name="pass" type="password" class="form-control" required placeholder="Enter alphanumeric value" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>confirm password</label>
                                            <div>
                                                <input data-parsley-type="alphanum" name="rpass" type="password" class="form-control" required placeholder="Enter alphanumeric value" />
                                            </div>
                                        </div>

                                        <div class="form-group mb-0">
                                            <div>
                                                <button type="submit" name="button" class="btn btn-primary waves-effect waves-light">
                                                    Submit
                                                </button>
                                                <button type="reset" name="cancel" class="btn btn-secondary waves-effect m-l-5">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->


                        <!-- end col -->
                    </div>

                

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include 'layouts/right-sidebar.php'; ?>

<?php include 'layouts/vendor-scripts.php'; ?>
<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/allchart.js"></script>
<!-- Plugins js-->
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<!-- dashboard init -->
<script src="assets/js/pages/dashboard.init.js"></script>


</body>

</html>