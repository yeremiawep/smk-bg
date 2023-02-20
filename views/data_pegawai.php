<?php
include '../config/database.php';

$query = mysqli_query($conn, "SELECT * FROM users JOIN jabatans ON users.jabatan=jabatans.id JOIN divisions ON users.divisi=divisions.id;");

?>

<!-- Content Wrapper. Contains page content -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1>Data Pegawai</h1>
        <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-xl"><i class="nav-icon fas fa-user-plus"></i> Add Pegawai</button>
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
                  <th>Options</th>
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
                      <a href="index.php?page=detail-pegawai&&id=<?= $user['id_pegawai']; ?>" class="btn btn-sm btn-info"><i class="nav-icon fas fa-eye"></i></a>
                      <a href="index.php?page=edit-data-pegawai&&id=<?= $user['id_pegawai']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                      <a onClick="hapusData(<?= $user['id_pegawai']; ?>)" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i></a>
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
        <button type="button" class="close" data-dismiss="modal" Arial-label="Close">
          <span Arial-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../views/add/tambah_data_pegawai.php" method="POST">
          <div class="form">
            <div class="row">
              <label for="name">Nama</label>
              <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="row">
              <label for="id_pegawai">ID Pegawai</label>
              <input type="text" class="form-control" name="id_pegawai" id="id_pegawai" required>
            </div>
            <div class="row">
              <label for="id_personal">ID Personal</label>
              <input type="text" class="form-control" name="id_personal" id="id_personal" required>
            </div>
            <div class="row">
              <label for="divisi">Divisi</label>
              <select class="custom-select" name="divisi" id="divisi" required>
                <option value="1">CRO</option>
                <option value="2">CIT</option>
                <option value="3">RTG</option>
              </select>
            </div>
            <div class="row">
              <label for="jabatan">Jabatan</label>
              <select class="custom-select" name="jabatan" id="jabatan" required>
                <option value="13">Pelaksana CRO</option>
                <option value="1">Pemimpin Cabang</option>
                <option value="2">Wakil Pemimpin Cabang</option>
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
              </select>
            </div>
            <div class="row mt-2 inline-block">
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
</div>
<!-- END MODAL XL -->

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
  function hapusData(data_id) {
    // alert('Yakin Hapus ?');
    // window.location=("../views/delete/delete_data_pegawai.php?id="+data_id);
    Swal.fire({
        title: 'Are you sure ?',
        showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        denyButtonText: `Don't save`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          window.location=("../views/delete/delete_data_pegawai.php?id="+data_id);
          // Swal.fire('Saved!', '', 'success')
        }
      })
  }
</script>
<script>
  $('.view-data').click(function() {
    var id_pegawai = $(this).attr('data-id');
    console.log(id_pegawai);
  });
</script>
</body>

</html>