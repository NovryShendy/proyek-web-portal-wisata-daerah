<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $judul ?></title>
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
    <!-- partial:partials/_navbar.html -->
    <?php $this->load->view('template_admin/include/navbar.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php $this->load->view('template_admin/include/sidebar.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                  </ul>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                    <!-- Konten -->
                    <?php $this->load->view($content); ?>
                    <!-- Konten -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php $this->load->view('template_admin/include/footer.php'); ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
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