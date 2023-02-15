<?php
include '../config/database.php';

$divisi = mysqli_query($conn, "SELECT * FROM divisions");

?>

<!-- Content Wrapper. Contains page content -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <h1>Data Divisi</h1>
        <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-xl"><i class="nav-icon fas fa-plus"></i> Add Division</button>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="flash-data" data-flashdata="<?php if (isset($_SESSION['message'])) {
                                            echo $_SESSION['message'];
                                          }
                                          unset($_SESSION['message']); ?>"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Divisi</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                  <th width="10%">Divisi</th>
                  <th width="10%">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($divisi as $d) : ?>
                  <tr>
                    <td><?= $d['name_div']; ?></td>
                    <td>
                      <a href="index.php?page=edit-data-divisi&&id=<?= $d['id']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                      <a onclick="hapusData()" href="../views/delete/delete_data_divisi.php?id=<?= $d['id']; ?>" class="btn btn-sm btn-danger" id="tombol"><i class="nav-icon fas fa-trash"></i></a>
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
        <h4 class="modal-title">Add Divisi</h4>
        <button type="button" class="close" data-dismiss="modal" Arial-label="Close">
          <span Arial-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../views/add/tambah_data_divisi.php" method="POST">
          <div class="form">
            <div class="row">
              <label for="name_div">Divisi</label>
              <input type="text" class="form-control" name="name_div" id="name_div">
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
    alert('Yakin Hapus Data ?')
  }
</script>
<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  const notifikasi = $('.flash-data').data(flashdata);
  if (notifikasi) {
    Swal.fire(
      'Sucess',
      'Add Data',
      'success'
    )
  } else {
    Swal.fire(
      'Failed',
      'Add Data',
      'error'
    )
  }
</script>

</body>

</html>