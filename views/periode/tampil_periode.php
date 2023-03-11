<?php
include '../config/database.php';

$periode = mysqli_query($conn, "SELECT * FROM periode");

?>

<!-- Content Wrapper. Contains page content -->
<section class="content-header">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Periode</h1>
        <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-xl"><i class="nav-icon fas fa-plus"></i> Add Periode</button>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Periode</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                  <th width="2%">No</th>
                  <th width="10%">Periode</th>
                  <th width="10%">Tgl. Mulai</th>
                  <th width="10%">Tgl. Berakhir</th>
                  <th width="10%">Status</th>
                  <th width="10%">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($periode as $p) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $p['tahun']; ?></td>
                    <td><?= $p['tgl_mulai']; ?></td>
                    <td><?= $p['tgl_berakhir']; ?></td>
                    <td>
                      <?php if ($p['status'] == 'Aktif') { ?>
                        <a class="badge badge-lg badge-success"><?= $p['status']; ?></a>
                      <?php } else if ($p['status'] == 'Tidak Aktif') { ?>
                        <a class="badge badge-lg badge-danger disabled"><?= $p['status']; ?></a>
                      <?php } ?>
                    </td>
                    <td>
                      <a href="index.php?page=setting-periode&&id=<?= $p['id_periode']; ?>" class="badge badge-lg badge-primary"><i class="fas fa-cog"></i></i> Setting</a>
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
        <h4 class="modal-title">Add New Periode</h4>
        <button type="button" class="close" data-dismiss="modal" Arial-label="Close">
          <span Arial-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../views/add/tambah_data_periode.php" method="POST">
          <div class="form">
            <div class="row">
              <label for="tahun">Tahun</label>
              <input type="text" class="form-control" name="tahun" id="tahun" required>
            </div>
            <div class="row">
              <label for="tgl_mulai">Tgl. Mulai</label>
              <input type="date" class="form-control" name="tgl_mulai" id="tgl_mulai" required>
            </div>
            <div class="row">
              <label for="tgl_berakhir">Tgl. Berakhir</label>
              <input type="date" class="form-control" name="tgl_berakhir" id="tgl_berakhir" required>
            </div>
            <div class="row mt-2 d-inline-block">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
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
    alert('Yakin Hapus Data ?')
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