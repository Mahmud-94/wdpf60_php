<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Zegva - Responsive Admin & Dashboard Template | Themesdesign</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <?php include_once("partials/topbar.php"); ?>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include_once("partials/leftbar.php"); ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">

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
                    <!-- end page-title -->

                    <div class="row">
                        <div class="col-lg-8 offset-2">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Doctor entry name</h4>
                                    <?php
                                    if (isset($_POST['button'])) {
                                        extract($_POST);
                                        include_once "dbconfig.php";
                                        $photo_name = $_FILES['photo']['name'];
                                        $photo_tname = $_FILES['photo']['tmp_name'];
                                        $path = "doctors/";
                                        $url = $path.$photo_name;

                                        if (move_uploaded_file($photo_tname, $path.$photo_name)) {

                                            $db->query("INSERT INTO doctors (id,specilization,doctorName,address,image,docFees,contactno,email,password) VALUES (NULL, '$specilization','$docname','$address','$url','$fee','$phone','$email','$pass')");

                                            if ($db->affected_rows) {
                                                echo "Inserted";
                                            }
                                        }
                                    }
                                    ?>



                                    <form class="" action="#" enctype="multipart/form-data" method="post">
                                        <div class="form-group">
                                            <label>specilization</label>

                                            <select name="specilization" id="" class="form-control">
                                                <option value="">Select one</option>

                                                <?php include_once "dbconfig.php";

                                                $sql = $db->query("SELECT specilization FROM `doctorspecilization`");
                                                while ($row = $sql->fetch_assoc()) {
                                                ?>
                                                    <tr>

                                                        <option value="<?php echo $row['specilization']; ?>">
                                                            <td><?php echo $row['specilization']; ?></td>
                                                        </option>
                                                    </tr>
                                                <?php }
                                                ?>
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
                                            <label>image</label>
                                            <div>
                                                <input parsley-type="url" name="photo" type="file" class="form-control" required placeholder="URL" />
                                            </div>
                                            <div class="form-group">
                                                <label>doctorfees</label>
                                                <div>
                                                    <input type="number" name="fee" class="form-control" required placeholder="fees" />
                                                </div>

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
                    <!-- end row -->

                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

            <?php include_once("partials/footer.php"); ?>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>

    <script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Parsley js -->
    <script src="../plugins/parsleyjs/parsley.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>

</body>

</html>