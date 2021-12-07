<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('template/admin/template/vendors/feather/feather.css') ?>">
    <link rel="stylesheet" href="<?= base_url('template/admin/template/vendors/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('template/admin/template/vendors/ti-icons/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('template/admin/template/vendors/typicons/typicons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('template/admin/template/vendors/simple-line-icons/css/simple-line-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('template/admin/template/vendors/css/vendor.bundle.base.css') ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url('template/admin/template/vendors/datatables.net-bs4/dataTables.bootstrap4.css') ?>">
    <link rel="stylesheet" href="<?= base_url('template/admin/template/js/select.dataTables.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('template/admin/template/vendors/select2/select2.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('template/admin/template/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') ?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('template/admin/template/css/vertical-layout-light/style.css') ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('template/admin/template/images/favicon.png') ?>" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="<?= base_url('template/admin/template/images/logo.svg') ?>" alt="logo">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="fw-light">Sign in to continue.</h6>
                            <form class="pt-3" method="POST" action="<?= base_url('login/cek_login') ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="username" name="password" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url('template/admin/template/vendors/js/vendor.bundle.base.js') ?>"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="<?= base_url('template/admin/template/vendors/chart.js/Chart.min.js') ?>"></script>
    <script src="<?= base_url('template/admin/template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>"></script>
    <script src="<?= base_url('template/admin/template/vendors/progressbar.js/progressbar.min.js') ?>"></script>
    <script src="<?= base_url('template/admin/template/vendors/typeahead.js/typeahead.bundle.min.js') ?>"></script>
    <script src="<?= base_url('template/admin/template/vendors/select2/select2.min.js') ?>"></script>
    <script src="<?= base_url('template/admin/template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="<?= base_url('template/admin/template/js/off-canvas.js') ?>js/off-canvas.js"></script>
    <script src="<?= base_url('template/admin/template/js/hoverable-collapse.js') ?>"></script>
    <script src="<?= base_url('template/admin/template/js/template.js') ?>"></script>
    <script src="<?= base_url('template/admin/template/js/todolist.js') ?>"></script>
    <!-- endinject -->

    <!-- Custom js for this page-->
    <script src="<?= base_url('template/admin/template/js/dashboard.js') ?>"></script>
    <script src="<?= base_url('template/admin/template/js/Chart.roundedBarCharts.j') ?>s"></script>
    <script src="<?= base_url('template/admin/template/js/file-upload.js') ?>"></script>
    <script src="<?= base_url('template/admin/template/js/typeahead.js') ?>"></script>
    <script src="<?= base_url('template/admin/template/js/select2.js') ?>"></script>
    <!-- End custom js for this page-->
</body>

</html>