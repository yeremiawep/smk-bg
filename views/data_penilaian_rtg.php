<?php
include '../config/database.php';

$query = mysqli_query($conn, "SELECT * FROM users JOIN jabatans ON users.jabatan=jabatans.id JOIN divisions ON users.divisi=divisions.id WHERE divisi='3' AND jabatan='9' ");

$sko = mysqli_query($conn, "SELECT * FROM penilaian_cro");
$sk = mysqli_query($conn, "SELECT * FROM sk_pcro");

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
                <?php foreach ($query as $user) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td width="2%"><?= $user['id_pegawai']; ?></td>
                    <td width="2%"><?= $user['id_personal']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['name_div']; ?></td>
                    <td><?= $user['name_jab']; ?></td>
                    <td width="30%">
                      <!-- <a class="btn btn-primary inline-block" id="isiSko" data-toggle="modal" data-target="#modal-xl" data-id="<?= $user['id_pegawai']; ?>">Isi Nilai</a>
                      <a class="btn btn-primary inline-block" id="isiSk" data-toggle="modal" data-target="#modal-sk" data-id=<?= $user['id_pegawai']; ?>>Isi Nilai SK</a> -->
                      <a href="index.php?page=input-nilai-rtg&&id=<?= $user['id_pegawai']; ?>&&jab=<?= $user['name_jab']; ?>" class="btn btn-sm btn-primary">Input Nilai</a>
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

  $(document).on("click", "#isiSko", function() {
    let id = $(this).data('id');

    $(".modal-body #id_pegawai").val(id);
  })

  $(document).on("click", "#isiSk", function() {
    let id = $(this).data('id');
    $(".modal-body #id_pegawai").val(id);
  })
</script>
<script>
  function hapusData() {
    alert('Yakin Hapus ?');
  }
</script>
</body>

</html>