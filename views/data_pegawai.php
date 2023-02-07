<?php
include '../config/database.php';

// $query = mysqli_query($conn, "SELECT * FROM users");
$query = mysqli_query($conn, "SELECT * FROM users, jabatans, divisions WHERE users.jabatan = jabatans.id AND users.divisi = divisions.id");

?>

<!-- Content Wrapper. Contains page content -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1>Data Pegawai</h1>
        <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-xl">Add Pegawai</button>
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
            <h3 class="card-title">Data Pegawai</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID Pegawai</th>
                  <th>ID Personal</th>
                  <th>Nama</th>
                  <th>Divisi</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($query as $user) : ?>
                  <tr>
                    <td width="2%"><?= $user['id_pegawai']; ?></td>
                    <td width="2%"><?= $user['id_personal']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['name_div']; ?></td>
                    <td><?= $user['name_jab']; ?></td>
                    <td>
                      <a href="index.php?page=detail-pegawai&&id=<?= $user['id_pegawai']; ?>" class="btn btn-sm btn-info">Detail</a>
                      <a href="index.php?page=edit-data-pegawai&&id=<?= $user['id_pegawai']; ?>" class="btn btn-sm btn-warning">Edit</a>
                      <a onClick="hapusData()" href="../views/delete/delete_data_pegawai.php?id=<?= $user['id_pegawai']; ?>" class="btn btn-sm btn-danger">Delete</a>
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

<!-- MODAL XL -->
<div class="modal fade" id="modal-xl">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Pegawai</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../views/add/tambah_data_pegawai.php" method="POST">
          <div class="form">
            <div class="row">
              <label for="name">Nama</label>
              <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="row">
              <label for="id_pegawai">ID Pegawai</label>
              <input type="text" class="form-control" name="id_pegawai" id="id_pegawai">
            </div>
            <div class="row">
              <label for="id_personal">ID Personal</label>
              <input type="text" class="form-control" name="id_personal" id="id_personal">
            </div>
            <div class="row">
              <label for="divisi">Divisi</label>
              <select class="custom-select" name="divisi" id="divisi">
                <option value="1">CRO</option>
                <option value="2">CIT</option>
                <option value="3">RTG</option>
              </select>
            </div>
            <div class="row">
              <label for="jabatan">Jabatan</label>
              <select class="custom-select" name="jabatan" id="jabatan">
                <option value="1">Pimpinan Cabang</option>
                <option value="2">Wakil Pimpinan Cabang</option>
                <option value="3">Asisten Supervisor CRO</option>
                <option value="4">Asisten Supervisor CIT</option>
                <option value="5">Asisten Supervisor Rutang</option>
                <option value="6">Internal Control</option>
                <option value="7">Admin CRO</option>
                <option value="8">Admin CIT</option>
                <option value="9">Admin Rutang</option>
                <option value="10">Pelaksana CIT</option>
                <option value="11">Pelaksana CPC</option>
                <option value="12">Supervisor CRO</option>
                <option value="13">Pelaksana CRO</option>
              </select>
            </div>
            <div class="row">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>


  <!-- END MODAL XL -->


  <!-- /.content -->
</div>
<!-- END MODAL XL -->
</div>
<!-- ./wrapper -->
<!-- DataTables  & Plugins -->
<!-- <?php include '../template/footer.php' ?> -->
<script>
  $(document).ready(function() {
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
</body>

</html>