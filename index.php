<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Manajemen Kinerja | BG</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="app/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" />
  <!-- Toastr -->
  <link rel="stylesheet" href="app/plugins/toastr/toastr.min.css" />
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <h1>Bringin Gigantara</h1>
      </div>
      <div class="card-body">
        <form action="config/auth.php" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="nip" name="nip" placeholder="ID Pegawai">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->


  <!-- SweetAlert2 -->
  <script src="app/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- jQuery -->
  <script src="app/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="app/dist/js/adminlte.min.js"></script>
  <!-- Toastr -->
  <script src="app/plugins/toastr/toastr.min.js"></script>
</body>

<?php
if (isset($_GET['error'])) {
  $x = $_GET['error'];
  if ($x == 1) {
    echo
    "<script>var Toast = Swal.mixin({
          toast: true,
          position: 'center-top',
          showConfirmButton: false,
          timer: 3000,
        });
  toastr.warning('Login Gagal')</script>";
  } else if ($x == 2) {
    echo "<script>var Toast = Swal.mixin({
          toast: true,
          position: 'center-top',
          showConfirmButton: false,
          timer: 3000,
        });
  toastr.info('Silahkan Masukkan NIP dan Password')</script>";
  } else {
    echo "";
  }
}
?>
</html>