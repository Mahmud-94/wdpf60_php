<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>

    <title><?php echo $language["Task_List"]; ?> | Dason - Admin & Dashboard Template</title>

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
                $maintitle = "Tasks";
                $title = "Task List";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->


                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Upcoming</h4>
                                <div class="table-responsive">
                                    <table class="table table-nowrap align-middle mb-0">
                                        <tbody>
                                            <tr>
                                                <td style="width: 40px;">
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="upcomingtaskCheck01">
                                                        <label class="form-check-label" for="upcomingtaskCheck01"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="text-truncate font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Create a Dason Dashboard UI</a></h5>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">
                                                        <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 3
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">Product Design</p>
                                                </td>

                                                <td>
                                                    <div class="text-center">
                                                        <span class="badge rounded-pill bg-secondary-subtle text-secondary font-size-11">Waiting</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">
                                                        <i class="mdi mdi-file-outline text-muted font-size-16  me-1"></i> 1
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="upcomingtaskCheck02" checked>
                                                        <label class="form-check-label" for="upcomingtaskCheck02"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="text-truncate font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Create a New Landing UI</a></h5>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">
                                                        <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 8
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">Web Development</p>
                                                </td>

                                                <td>
                                                    <div class="text-center">
                                                        <span class="badge rounded-pill bg-primary-subtle text-primary font-size-11">Approved</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">
                                                        <i class="mdi mdi-file-outline text-muted font-size-16  me-1"></i> 4
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                        A
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="upcomingtaskCheck03">
                                                        <label class="form-check-label" for="upcomingtaskCheck03"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="text-truncate font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Create a Dason Logo</a></h5>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">
                                                        <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 5
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">Illustration</p>
                                                </td>

                                                <td>
                                                    <div class="text-center">
                                                        <span class="badge rounded-pill bg-secondary-subtle text-secondary font-size-11">Waiting</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">
                                                        <i class="mdi mdi-file-outline text-muted font-size-16  me-1"></i> 4
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title rounded-circle bg-warning text-white font-size-16">
                                                                        R
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">In Progress</h4>
                                <div class="table-responsive">
                                    <table class="table table-nowrap align-middle mb-0">
                                        <tbody>
                                            <tr>
                                                <td style="width: 40px;">
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="inprogresstaskCheck01" checked>
                                                        <label class="form-check-label" for="inprogresstaskCheck01"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="text-truncate font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Brand logo design</a></h5>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">
                                                        <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 2
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">Illustration</p>
                                                </td>

                                                <td>
                                                    <div class="text-center">
                                                        <span class="badge rounded-pill bg-success-subtle text-success font-size-11">Complete</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">
                                                        <i class="mdi mdi-file-outline text-muted font-size-16  me-1"></i> 2
                                                    </p>
                                                </td>

                                                <td>
                                                    <div class="avatar-group">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="inprogresstaskCheck02">
                                                        <label class="form-check-label" for="inprogresstaskCheck02"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="text-truncate font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Create a Blog Template UI</a></h5>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">
                                                        <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 6
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">Web Development</p>
                                                </td>

                                                <td>
                                                    <div class="text-center">
                                                        <span class="badge rounded-pill bg-warning-subtle text-warning font-size-11">Pending</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">
                                                        <i class="mdi mdi-file-outline text-muted font-size-16  me-1"></i> 2
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                        A
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Completed</h4>
                                <div class="table-responsive">
                                    <table class="table table-nowrap align-middle mb-0">
                                        <tbody>
                                            <tr>
                                                <td style="width: 40px;">
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="completedtaskCheck01">
                                                        <label class="form-check-label" for="completedtaskCheck01"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="text-truncate font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Redesign - Landing page</a></h5>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">
                                                        <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 5
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">Web Development</p>
                                                </td>

                                                <td>
                                                    <div class="text-center">
                                                        <span class="badge rounded-pill bg-success-subtle text-success font-size-11">Complete</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">
                                                        <i class="mdi mdi-file-outline text-muted font-size-16  me-1"></i> 3
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title rounded-circle bg-danger text-white font-size-16">
                                                                        K
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="completedtaskCheck02" checked>
                                                        <label class="form-check-label" for="completedtaskCheck02"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="text-truncate font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Multipurpose Landing</a></h5>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">
                                                        <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 1
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">Product Design</p>
                                                </td>


                                                <td>
                                                    <div class="text-center">
                                                        <span class="badge rounded-pill bg-success-subtle text-success font-size-11">Complete</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">
                                                        <i class="mdi mdi-file-outline text-muted font-size-16  me-1"></i> 1
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="completedtaskCheck03">
                                                        <label class="form-check-label" for="completedtaskCheck03"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="text-truncate font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Create a Blog Template UI</a></h5>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">
                                                        <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 5
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">Illustration</p>
                                                </td>

                                                <td>
                                                    <div class="text-center">
                                                        <span class="badge rounded-pill bg-success-subtle text-success font-size-11">Complete</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="ml-4 text-muted mb-0">
                                                        <i class="mdi mdi-file-outline text-muted font-size-16  me-1"></i> 4
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                        D
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Week Tasks</h4>

                                <div id="task-chart" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Recent Tasks</h4>

                                <div class="table-responsive">
                                    <table class="table table-nowrap align-middle mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h5 class="text-truncate font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Brand logo design</a></h5>
                                                </td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="text-truncate font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Create a Blog Template UI</a></h5>
                                                </td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                        D
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="text-truncate font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Redesign - Landing page</a></h5>
                                                </td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-sm">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title rounded-circle bg-danger text-white font-size-16">
                                                                        P
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table responsive -->
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end row -->



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
<script src="assets/js/pages/allchart.js"></script>
<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="assets/js/pages/tasklist.init.js"></script>

</body>

</html>