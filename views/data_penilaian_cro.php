<?php
include '../config/database.php';

$pcro = mysqli_query($conn, "SELECT * FROM users JOIN divisions ON users.divisi=divisions.id JOIN jabatans ON users.jabatan=jabatans.id WHERE divisi='1' AND jabatan='13'");
$acro = mysqli_query($conn, "SELECT * FROM users JOIN divisions ON users.divisi=divisions.id JOIN jabatans ON users.jabatan=jabatans.id WHERE divisi='1' AND jabatan='7'");
$pcpc = mysqli_query($conn, "SELECT * FROM users JOIN divisions ON users.divisi=divisions.id JOIN jabatans ON users.jabatan=jabatans.id WHERE divisi='1' AND jabatan='11'");

?>

<!-- Content Wrapper. Contains page content -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1>Data Penilaian</h1>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Penilaian</h3>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                  <th width="2%">No</th>
                  <th>ID Pegawai</th>
                  <th>ID Personal</th>
                  <th>Nama</th>
                  <th>Divisi</th>
                  <th>Jabatan</th>
                  <th>Input Nilai</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1 ?>
                <?php foreach ($pcro as $user) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td width="2%"><?= $user['id_pegawai']; ?></td>
                    <td width="2%"><?= $user['id_personal']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['name_div']; ?></td>
                    <td><?= $user['name_jab']; ?></td>
                    <td width="20%">
                      <a href="index.php?page=input-nilai-cro&&id=<?= $user['id_user']; ?>&&idpeg=<?= $user['id_pegawai']; ?>&&div=<?= $user['divisi']; ?>&&jab=<?= $user['jabatan']; ?>" class="btn btn-primary inline-block"><i class="nav-icon fas fa-plus"></i> Nilai</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                  <th width="2%">No</th>
                  <th>ID Pegawai</th>
                  <th>ID Personal</th>
                  <th>Nama</th>
                  <th>Divisi</th>
                  <th>Jabatan</th>
                  <th>Input Nilai</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1 ?>
                <?php foreach ($acro as $user) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td width="2%"><?= $user['id_pegawai']; ?></td>
                    <td width="2%"><?= $user['id_personal']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['name_div']; ?></td>
                    <td><?= $user['name_jab']; ?></td>
                    <td width="20%">
                      <a href="index.php?page=input-nilai-cro&&id=<?= $user['id_user']; ?>&&idpeg=<?= $user['id_pegawai']; ?>&&div=<?= $user['divisi']; ?>&&jab=<?= $user['jabatan']; ?>" class="btn btn-primary inline-block"><i class="nav-icon fas fa-plus"></i> Nilai</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                  <th width="2%">No</th>
                  <th>ID Pegawai</th>
                  <th>ID Personal</th>
                  <th>Nama</th>
                  <th>Divisi</th>
                  <th>Jabatan</th>
                  <th>Input Nilai</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1 ?>
                <?php foreach ($pcpc as $user) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td width="2%"><?= $user['id_pegawai']; ?></td>
                    <td width="2%"><?= $user['id_personal']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['name_div']; ?></td>
                    <td><?= $user['name_jab']; ?></td>
                    <td width="20%">
                      <a href="index.php?page=input-nilai-cro&&id=<?= $user['id_user']; ?>&&idpeg=<?= $user['id_pegawai']; ?>&&div=<?= $user['divisi']; ?>&&jab=<?= $user['jabatan']; ?>" class="btn btn-primary inline-block"><i class="nav-icon fas fa-plus"></i> Nilai</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <!-- /.container-fluid -->
</section>

<!-- /.content-wrapper -->
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- DataTables  & Plugins -->
<!-- <?php include '../template/footer.php' ?> -->
<script>
  $(function() {
    $("#example1")
      .DataTable({
        responsive: true,
        lengthChange: false,
        autoWidth: false,
        buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
      })
      .buttons()
      .container()
      .appendTo("#example1_wrapper .col-md-6:eq(0)");
    $("#example2").DataTable({
      paging: true,
      lengthChange: false,
      searching: false,
      ordering: true,
      info: true,
      autoWidth: false,
      responsive: true,
    });
  });
</script>
<script>
  function hapusData() {
    alert('Yakin Hapus ?');
  }
</script>
<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- start nofit -->
<?php if (@$_SESSION['sukses']) { ?>
  <script>
    Swal.fire({
      text: "<?php echo $_SESSION['sukses']; ?>",
      icon: "success",
      customClass: {
        confirmButton: "btn fw-bold btn-primary",
        cancelButton: "btn fw-bold btn-active-light-primary"
      }
    })
  </script>
<?php unset($_SESSION['sukses']);
} ?>
<!-- end notif -->
</body>

</html>