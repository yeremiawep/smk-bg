<?php
include '../config/database.php';

// $query = mysqli_query($conn, "SELECT * FROM users");
$jabatan = mysqli_query($conn, "SELECT * FROM jabatans");

?>

<!-- Content Wrapper. Contains page content -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1>Data Jabatan</h1>
        <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-xl">Add Jabatan</button>
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
            <h3 class="card-title">Data Jabatan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($jabatan as $j) : ?>
                  <tr>
                    <td width="20%"><?= $j['name_jab']; ?></td>
                    <td width="20%">
                      <a href="index.php?page=edit-data-jabatan&&id=<?= $j['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                      <a onClick="hapusData()" href="../views/delete/delete_data_jabatan.php?id=<?= $j['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
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
        <h4 class="modal-title">Add Jabatan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../views/add/tambah_data_jabatan.php" method="POST">
          <div class="form">
            <div class="row">
              <label for="name_jab">Jabatan</label>
              <input type="text" class="form-control" name="name_jab" id="name_jab">
            </div>
            <div class="row mt-2 d-inline-block">
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
</body>

</html>