<?php
include '../config/database.php';

$cro = mysqli_query($conn, "SELECT * FROM users JOIN jabatans ON users.jabatan=jabatans.id JOIN divisions ON users.divisi=divisions.id WHERE divisi='1' AND jabatan='3' ");
$cit = mysqli_query($conn, "SELECT * FROM users JOIN jabatans ON users.jabatan=jabatans.id JOIN divisions ON users.divisi=divisions.id WHERE divisi='2' AND jabatan='4' ");
$rtg = mysqli_query($conn, "SELECT * FROM users JOIN jabatans ON users.jabatan=jabatans.id JOIN divisions ON users.divisi=divisions.id WHERE divisi='3' AND jabatan='5' ");


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
            <h3 class="card-title">Asisten Supervisor | <i>Cash Replenishment Outsource</i></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
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
                <?php foreach ($cro as $cro) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td width="2%"><?= $cro['id_pegawai']; ?></td>
                    <td width="2%"><?= $cro['id_personal']; ?></td>
                    <td><?= $cro['name']; ?></td>
                    <td><?= $cro['name_div']; ?></td>
                    <td><?= $cro['name_jab']; ?></td>
                    <td width="30%">
                      <a href="index.php?page=input-nilai-atasan&&id=<?= $cro['id_user']; ?>&&idpeg=<?= $cro['id_pegawai']; ?>&&div=<?= $cro['divisi']; ?>&&jab=<?= $cro['jabatan']; ?>" class="btn btn-primary inline-block"><i class="nav-icon fas fa-plus"></i> Nilai</a>
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

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Asisten Supervisor | <i>Cash In Transit</i></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
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
                <?php foreach ($cit as $cit) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td width="2%"><?= $cit['id_pegawai']; ?></td>
                    <td width="2%"><?= $cit['id_personal']; ?></td>
                    <td><?= $cit['name']; ?></td>
                    <td><?= $cit['name_div']; ?></td>
                    <td><?= $cit['name_jab']; ?></td>
                    <td width="30%">
                      <a href="index.php?page=input-nilai-atasan&&id=<?= $cit['id_user']; ?>&&idpeg=<?= $cit['id_pegawai']; ?>&&div=<?= $cit['divisi']; ?>&&jab=<?= $cit['jabatan']; ?>" class="btn btn-primary inline-block"><i class="nav-icon fas fa-plus"></i> Nilai</a>
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

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Asisten Supervisor | <i>Rumah Tangga</i></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
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
                <?php foreach ($rtg as $rtg) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td width="2%"><?= $rtg['id_pegawai']; ?></td>
                    <td width="2%"><?= $rtg['id_personal']; ?></td>
                    <td><?= $rtg['name']; ?></td>
                    <td><?= $rtg['name_div']; ?></td>
                    <td><?= $rtg['name_jab']; ?></td>
                    <td width="30%">
                      <a href="index.php?page=input-nilai-atasan&&id=<?= $rtg['id_user']; ?>&&idpeg=<?= $rtg['id_pegawai']; ?>&&div=<?= $rtg['divisi']; ?>&&jab=<?= $rtg['jabatan']; ?>" class="btn btn-primary inline-block"><i class="nav-icon fas fa-plus"></i> Nilai</a>
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
<?php include '../template/footer.php' ?>
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