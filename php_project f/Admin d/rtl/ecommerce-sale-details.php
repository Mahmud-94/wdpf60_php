<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>


    <title><?php echo $language["Sale-Details"]; ?> | Dason - Admin & Dashboard Template</title>

    <?php include 'layouts/head.php'; ?>

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

                <!-- start page title -->
                <?php
                $maintitle = "Ecommerce";
                $title = "Sale-Details";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->
                <div class="row">
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <div class="d-flex justify-content-between align-items-baseline">
                                                <div>
                                                    <h5 class="">Sales Rating</h5>
                                                    <p class="text-muted mb-0">See team sales results.</p>
                                                </div>

                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="font-size-18 text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div id="doughnut-chart" data-colors='["--bs-success", "--bs-light"]' class="e-charts"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end card body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->

                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <div class="d-flex justify-content-between align-items-baseline">
                                                <div class="mb-4">
                                                    <h5 class="">All Sales</h5>
                                                    <p class="text-muted mb-0">Manage all team sales.</p>
                                                </div>

                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="font-size-18 text-muted dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card shadow-sm">
                                                        <div class="card-body">
                                                            <h5 class="text-muted fw-light">Targeting</h5>
                                                            <p class="fs-1 mb-0">$75,000.00</p>
                                                            <p class="mb-0"><span class="text-success"><i class="mdi mdi-arrow-up"></i>5,5% </span>vs last month.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card shadow-sm">
                                                        <div class="card-body">
                                                            <h5 class="text-muted fw-light">Total sales</h5>
                                                            <p class="fs-1 mb-0">$110,200.80</p>
                                                            <p class="mb-0"><span class="text-success"><i class="mdi mdi-arrow-up"></i>28,40% </span>vs last month.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="d-grid mb-2">
                                                        <a href="#" class="btn btn-soft-secondary text-start">See Details <span class="float-end"><i class="mdi mdi-chevron-double-right"></i></span></a>
                                                    </div>
                                                </div>

                                                <div class="p-3 pb-0 mt-2 border-top">
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-6">
                                                            <div>
                                                                <p class="text-muted mb-0">List of members who succesfully passed this month's sales target.</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-6">
                                                            <div class="d-flex justify-content-end">
                                                                <div class="avatar-group pe-2">
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                                            <img src="assets/images/small/img-1.jpg" alt="" class="rounded-circle avatar-sm">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                                            <img src="assets/images/small/img-2.jpg" alt="" class="rounded-circle avatar-sm">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                                            <img src="assets/images/small/img-3.jpg" alt="" class="rounded-circle avatar-sm">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                                            <img src="assets/images/small/img-4.jpg" alt="" class="rounded-circle avatar-sm">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="ps-2 border-start">
                                                                    <a href="javascript: void(0);" class="btn btn-primary rounded-circle"><i class="mdi mdi-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="mt-4">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span class="">60% completed</span>
                                                        <span class="">Update now</span>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end card body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <div class="d-flex justify-content-between align-items-baseline">
                                                <div>
                                                    <h5 class="">Sales Volume</h5>
                                                    <p class="text-muted mb-0">Manage all sales every month of the year.</p>
                                                </div>
                                                <div>
                                                    <ul class="nav nav-pills">
                                                        <li class="nav-item"> <a href="javascript: void(0);" class="text-muted nav-link">Daily</a></li>
                                                        <li class="nav-item"> <a href="javascript: void(0);" class="text-muted nav-link">Monthly</a></li>
                                                        <li class="nav-item"> <a href="javascript: void(0);" class="body-color nav-link">Yearly</a></li>
                                                        <li class="nav-item"> <a href="javascript: void(0);" class="text-white-50 nav-link bg-primary"><i class="mdi mdi-arrow-collapse-down"></i> Report</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div>
                                                <div id="apex-chart" class="apex-charts"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->




                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <div>
                                            <h5 class="">Sales Rating</h5>
                                            <p class="text-muted mb-0">See team sales results.</p>
                                        </div>

                                        <div class="">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-soft-secondary">See details</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-middle">
                                            <thead>
                                                <tr>
                                                    <th class="">Rating <i class="mdi mdi-chevron-down"></i></th>
                                                    <th>Name <i class="mdi mdi-chevron-down"></i></th>
                                                    <th><i class="mdi mdi-chevron-down"></i> Total sales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="col" class="font-size-16">1</th>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-md">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2">
                                                                <h6 class="mb-1">Kristin</h6>
                                                                <p class="text-muted font-size-10 mb-0">Gillette</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$23,000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col" class="font-size-16">2</th>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-md">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2">
                                                                <h6 class="mb-1">Savannah</h6>
                                                                <p class="text-muted font-size-10 mb-0">eBay</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$22,700</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col" class="font-size-16">3</th>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-md">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2">
                                                                <h6 class="mb-1">Latiful</h6>
                                                                <p class="text-muted font-size-10 mb-0">L'Oreal</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$23,000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col" class="font-size-16">4</th>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-md">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2">
                                                                <h6 class="mb-1">Brooklyn</h6>
                                                                <p class="text-muted font-size-10 mb-0">General</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$23,000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="col" class="font-size-16">5</th>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-md">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2">
                                                                <h6 class="mb-1">Jacob</h6>
                                                                <p class="text-muted font-size-10 mb-0">Disney</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$23,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div>
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <div>
                                                <h5 class="">Sales Summery</h5>
                                                <p class="text-muted mb-0">Summery of this month's sales target.</p>
                                            </div>

                                            <div class="">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-soft-secondary">See details</a>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <p class="fs-5 mb-0">$110,200.80 <span class="fw-light font-size-12">Total sales</span></p>
                                            <p class="mb-0"><span class="text-success"><i class="mdi mdi-arrow-up"></i>28,40% </span>vs last month.</p>
                                            <div>
                                                <div id="spline_area" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts" dir="ltr"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->

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

<!-- Plugins js-->
<script src="assets/js/pages/allchart.js"></script>
<!-- echarts js -->
<script src="assets/libs/echarts/echarts.min.js"></script>

<!-- apexcharts-->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="assets/js/pages/sale-details.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>