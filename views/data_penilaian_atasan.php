<?php
include '../config/database.php';

$cro = mysqli_query($conn, "SELECT * FROM users JOIN jabatans ON users.jabatan=jabatans.id JOIN divisions ON users.divisi=divisions.id WHERE divisi='1' AND jabatan='3' ");
$cit = mysqli_query($conn, "SELECT * FROM users JOIN jabatans ON users.jabatan=jabatans.id JOIN divisions ON users.divisi=divisions.id WHERE divisi='2' AND jabatan='4' ");
$rtg = mysqli_query($conn, "SELECT * FROM users JOIN jabatans ON users.jabatan=jabatans.id JOIN divisions ON users.divisi=divisions.id WHERE divisi='3' AND jabatan='5' ");


$sko_cro = mysqli_query($conn, "SELECT * FROM kriteria_penilaian");
$sko_cit = mysqli_query($conn, "SELECT * FROM kriteria_penilaian");
$sko_rtg = mysqli_query($conn, "SELECT * FROM kriteria_penilaian");
$sk = mysqli_query($conn, "SELECT * FROM kriteria_kompetensi");

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
                  <th>Nilai SKO</th>
                  <th>Nilai SK</th>
                  <th>Pelanggaran Disiplin</th>
                  <th>Nilai Akhir</th>
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
                      <a href="index.php?page=input-nilai&&id=<?= $cro['id_pegawai']; ?>&&div=<?= $cro['divisi']; ?>&&jab=<?= $cro['jabatan']; ?>" class="btn btn-primary inline-block"><i class="nav-icon fas fa-plus"></i> Nilai SKO</a>
                      <a href="index.php?page=input-nilai-sk&&id=<?= $cro['id_pegawai']; ?>&&div=<?= $cro['divisi']; ?>&&jab=<?= $cro['jabatan']; ?>" class="btn btn-primary inline-block"><i class="nav-icon fas fa-plus"></i> Nilai SK</a>
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
                  <th>Nilai SKO</th>
                  <th>Nilai SK</th>
                  <th>Pelanggaran Disiplin</th>
                  <th>Nilai Akhir</th>
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
                      <a href="index.php?page=input-nilai&&id=<?= $cit['id_pegawai']; ?>&&div=<?= $cit['divisi']; ?>&&jab=<?= $cit['jabatan']; ?>" class="btn btn-primary inline-block"><i class="nav-icon fas fa-plus"></i> Nilai SKO</a>
                      <a href="index.php?page=input-nilai-sk&&id=<?= $cit['id_pegawai']; ?>&&div=<?= $cit['divisi']; ?>&&jab=<?= $cit['jabatan']; ?>" class="btn btn-primary inline-block"><i class="nav-icon fas fa-plus"></i> Nilai SK</a>
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
                  <th>Nilai SKO</th>
                  <th>Nilai SK</th>
                  <th>Pelanggaran Disiplin</th>
                  <th>Nilai Akhir</th>
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
                      <a href="index.php?page=input-nilai&&id=<?= $rtg['id_pegawai']; ?>&&div=<?= $rtg['divisi']; ?>&&jab=<?= $rtg['jabatan']; ?>" class="btn btn-primary inline-block"><i class="nav-icon fas fa-plus"></i> Nilai SKO</a>
                      <a href="index.php?page=input-nilai-sk&&id=<?= $rtg['id_pegawai']; ?>&&div=<?= $rtg['divisi']; ?>&&jab=<?= $rtg['jabatan']; ?>" class="btn btn-primary inline-block"><i class="nav-icon fas fa-plus"></i> Nilai SK</a>
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

<!-- SKO CRO -->
<div class="modal fade" id="modal-cro">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Penilaian</h4>
        <button type="button" class="close" data-dismiss="modal" Arial-label="Close">
          <span Arial-hidden="true">&times;</span>
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
                <?php foreach ($sko_cro as $sko) : ?>
                  <tr>
                    <td><?= $sko['aspek']; ?></td>
                    <td><?= $sko['kriteria']; ?></td>
                    <td><?= $sko['target']; ?></td>
                    <td>
                      <select class="form-select" Arial-label="Default select example" name="nilai" id="nilai">
                        <option selected>Input Nilai</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
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
<!-- END SKO CRO -->

<!-- SKO CIT -->
<div class="modal fade" id="modal-cit">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Penilaian</h4>
        <button type="button" class="close" data-dismiss="modal" Arial-label="Close">
          <span Arial-hidden="true">&times;</span>
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
                <?php foreach ($sko_cit as $sko) : ?>
                  <tr>
                    <td><?= $sko['aspek']; ?></td>
                    <td><?= $sko['kriteria']; ?></td>
                    <td><?= $sko['target']; ?></td>
                    <td>
                      <select class="form-select" Arial-label="Default select example" name="nilai" id="nilai">
                        <option selected>Input Nilai</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
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
<!-- END SKO CIT -->

<!-- SKO RTG -->
<div class="modal fade" id="modal-rtg">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Penilaian</h4>
        <button type="button" class="close" data-dismiss="modal" Arial-label="Close">
          <span Arial-hidden="true">&times;</span>
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
                <?php foreach ($sko_rtg as $sko) : ?>
                  <tr>
                    <td><?= $sko['aspek']; ?></td>
                    <td><?= $sko['kriteria']; ?></td>
                    <td><?= $sko['target']; ?></td>
                    <td>
                      <select class="form-select" Arial-label="Default select example" name="nilai" id="nilai">
                        <option selected>Input Nilai</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
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
<!-- END SKO RTG -->



<!-- SK -->
<div class="modal fade" id="modal-sk">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Penilaian</h4>
        <button type="button" class="close" data-dismiss="modal" Arial-label="Close">
          <span Arial-hidden="true">&times;</span>
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
                      <select class="form-select" Arial-label="Default select example" name="nilai" id="nilai">
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