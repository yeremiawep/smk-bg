<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PT. Bringin Gigantara Cabang Cempaka Putih</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
  <!-- Font Nunito -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page" style="font-family: Nunito;">
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-sm-10 col-md-8 col-lg-6 col-xl-4">
        <div class="card p-4 shadow-sm">
          <div class="card-header">
            <h3 class="text-center font-weight-light my-3">Lupa Password</h3>

          </div>
          <div class="card-body">
            <div class="justify-content-center text-center">
              <p class="fs-4 my-3 mb-5 fw-bold">PT. Bringin Gigantara KC. Cempaka Putih</p>
              <img src="app/dist/img/logo_bg2.png" alt="" height="150px" class="my-3 mb-5">
            </div>
            <form action="./proses_lupa_password.php?aksi=lupa_password" method="POST">
              <div class="mb-3">
                <label for="email">Masukkan Email</label>
                <input type="email" class="form-control py-2" placeholder="email" name="email" value="" required>
              </div>
              <div class="form-group d-flex align-items-end justify-content-end mt-4 mb-0">
                <button type="submit" class="btn btn-primary">Kirim</button>
              </div>
            </form>
            <div class="form-group d-flex align-items-end justify-content-end mt-4 mb-0">
              <a href="./index.php">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.login-box -->


  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- start notif -->
  <?php
  if (@$_SESSION['emailgagal']) { ?>
    <script>
      Swal.fire({
        text: "<?= $_SESSION['emailgagal']; ?>",
        icon: "error",
        customClass: {
          confirmButton: "btn fw-bold btn-primary",
          cancelButton: "btn fw-bold btn-active-light-primary"
        }
      })
    </script>
  <?php unset($_SESSION['emailgagal']);
  } ?>
  <!-- end notif -->
  <!-- jQuery -->
  <script src="app/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="app/dist/js/adminlte.min.js"></script>
  <?php include 'template/footer.php'; ?>

</body>

</html>