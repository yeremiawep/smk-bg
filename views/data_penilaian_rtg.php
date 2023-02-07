<?php
include '../config/database.php';

$query = mysqli_query($conn, "SELECT * FROM users WHERE divisi='1' AND jabatan='9' ");

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
                  <th>Nilai SKO</th>
                  <th>Nilai SK</th>
                  <th>Pelanggaran Disiplin</th>
                  <th>Nilai Akhir</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1 ?>
                <?php foreach ($query as $user) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td width="2%"><?= $user['id_pegawai']; ?></td>
                    <td width="2%"><?= $user['id_personal']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['divisi']; ?></td>
                    <td><?= $user['jabatan']; ?></td>
                    <td width="30%">
                      <a href="" class="btn btn-primary inline-block" data-toggle="modal" data-target="#modal-xl">Isi Nilai SKO</a>
                      <a href="" class="btn btn-primary inline-block" data-toggle="modal" data-target="#modal-sk">Isi Nilai SK</a>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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

<!-- SKO -->
<div class="modal fade" id="modal-xl">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Penilaian</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../views/hitung/hitung_sko.php" method="POST">
          <div class="form">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Aspek</th>
                  <th>Kriteria</th>
                  <th>Target</th>
                  <th>Nilai</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($sko as $sko) : ?>
                  <tr>
                    <td><?= $sko['aspek']; ?></td>
                    <td><?= $sko['kriteria']; ?></td>
                    <td><?= $sko['target']; ?></td>
                    <td>
                      <select class="form-select" aria-label="Default select example" name="nilai" id="nilai">
                        <option selected>Input Nilai</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                      <!-- <div class="form-check">
                        <input class="form-check-input" type="radio" name="nilai" id="nilai" value="1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="nilai" id="nilai" value="2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="nilai" id="nilai" value="3">
                        <label class="form-check-label" for="inlineRadio2">3</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="nilai" id="nilai" value="4">
                        <label class="form-check-label" for="inlineRadio2">4</label>
                      </div> -->
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <div class="row d-inline-block">
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
<!-- END SKO -->

<!-- SK -->
<div class="modal fade" id="modal-sk">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Penilaian</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../views/hitung/hitung_sk.php" method="GET">
          <div class="form">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Kriteria</th>
                  <th>Nilai</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($sk as $sk) : ?>
                  <tr>
                    <td><?= $sk['kriteria']; ?></td>
                    <td>
                      <select class="form-select" aria-label="Default select example" name="nilai" id="nilai">
                        <option selected>Input Nilai</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                      <!-- <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="nilai" id="nilai" value="1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="nilai" id="nilai" value="2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="nilai" id="nilai" value="3">
                        <label class="form-check-label" for="inlineRadio2">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="nilai" id="nilai" value="4">
                        <label class="form-check-label" for="inlineRadio2">4</label>
                      </div> -->
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <div class="row d-inline-block">
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
<!-- END SK -->



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