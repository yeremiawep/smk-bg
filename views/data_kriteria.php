<?php 
include '../config/database.php';

$sko_spvcro = mysqli_query($conn, "SELECT * FROM kriteria_penilaian WHERE jabatan=3 ");
$sko_spvcit = mysqli_query($conn, "SELECT * FROM kriteria_penilaian WHERE jabatan=4");
$sko_spvrtg = mysqli_query($conn, "SELECT * FROM kriteria_penilaian WHERE jabatan=5");
$sko_pcro   = mysqli_query($conn, "SELECT * FROM kriteria_penilaian WHERE jabatan=13");
$sko_acro   = mysqli_query($conn, "SELECT * FROM kriteria_penilaian WHERE jabatan=7");
$sko_acit   = mysqli_query($conn, "SELECT * FROM kriteria_penilaian WHERE jabatan=8");
$sko_artg   = mysqli_query($conn, "SELECT * FROM kriteria_penilaian WHERE jabatan=9");

?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1>Sasaran Kinerja Objektif</h1>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="container-fluid">

    <!-- Kriteria Ass.SPV CRO -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Sasaran Kinerja Objektif</h2><br>
              <h6>Asisten Supervisor | <i>Cash Replenishment Outsource</i></h6>
              <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-add"><i class="nav-icon fas fa-plus"></i> Add Kriteria</button>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Aspek</th>
                    <th>Kriteria</th>
                    <th>Target</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($sko_spvcro as $cro) : ?>
                  <tr>
                    <td width="10%"><?= $cro['aspek']; ?></td>
                    <td><?= $cro['kriteria']; ?></td>
                    <td><?= $cro['target']; ?></td>
                    <td>
                      <a href="index.php?page=edit-kriteria&&id=<?= $cro['id_isi']; ?>&&jab=<?= $cro['jabatan']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                      <a onClick="hapusData()" href="../views/delete/delete_kriteria.php?id=<?= $cro['id_isi']; ?>" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- End Kriteria Ass.SPV CRO  -->

    <!-- Kriteria Ass.SPV CIT -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Sasaran Kinerja Objektif</h2><br>
              <h6>Asisten Supervisor | <i>Cash In Transit</i></h6>
            <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-add"><i class="nav-icon fas fa-plus"></i> Add Kriteria</button>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Aspek</th>
                    <th>Kriteria</th>
                    <th>Target</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($sko_spvcit as $cit) : ?>
                  <tr>
                    <td width="10%"><?= $cit['aspek']; ?></td>
                    <td><?= $cit['kriteria']; ?></td>
                    <td><?= $cit['target']; ?></td>
                    <td>
                    <a href="index.php?page=edit-kriteria&&id=<?= $cit['id_isi']; ?>&&jab=<?= $cit['jabatan']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                      <a onClick="hapusData()" href="../views/delete/delete_kriteria.php?id=<?= $cit['id_isi']; ?>" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- End Kriteria Ass.SPV CIT -->

    <!-- Kriteria Ass.SPV RTG -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Sasaran Kinerja Objektif</h2><br>
              <h6>Asisten Supervisor | <i>Rumah Tangga</i></h6>
              <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-add"><i class="nav-icon fas fa-plus"></i> Add Kriteria</button>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Aspek</th>
                    <th>Kriteria</th>
                    <th>Target</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($sko_spvrtg as $rtg) : ?>
                  <tr>
                    <td width="10%"><?= $rtg['aspek']; ?></td>
                    <td><?= $rtg['kriteria']; ?></td>
                    <td width="40%"><?= $rtg['target']; ?></td>
                    <td>
                    <a href="index.php?page=edit-kriteria&&id=<?= $rtg['id_isi']; ?>&&jab=<?= $rtg['jabatan']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                      <a onClick="hapusData()" href="../views/delete/delete_kriteria.php?id=<?= $rtg['id_isi']; ?>" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- End Kriteria Ass.SPV RTG -->

    <!-- Kriteria Admin & Pelaksana -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Sasaran Kinerja Objektif</h2><br>
              <h6>Pelaksana | <i>Cash Replenishment Outsource</i></h6>
              <!-- <h6>| <i>Cash Replenishment Outsource</i></h6> -->
              <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-add"><i class="nav-icon fas fa-plus"></i> Add Kriteria</button>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Aspek</th>
                    <th>Kriteria</th>
                    <th>Target</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($sko_pcro as $p) : ?>
                  <tr>
                    <td><?= $p['aspek']; ?></td>
                    <td><?= $p['kriteria']; ?></td>
                    <td><?= $p['target']; ?></td>
                    <td>
                    <a href="index.php?page=edit-kriteria&&id=<?= $p['id_isi']; ?>&&jab=<?= $p['jabatan']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                      <a onClick="hapusData()" href="../views/delete/delete_kriteria.php?id=<?= $p['id_isi']; ?>" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- End Kriteria Admin & Pelaksana -->

    <!-- Kriteria Admin CRO -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Sasaran Kinerja Objektif</h2><br>
              <h6>Admin | <i>Cash Replenishment Outsource</i></h6>
              <!-- <h6>| <i>Cash Replenishment Outsource</i></h6> -->
              <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-add"><i class="nav-icon fas fa-plus"></i> Add Kriteria</button>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Aspek</th>
                    <th>Kriteria</th>
                    <th>Target</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($sko_acro as $p) : ?>
                  <tr>
                    <td><?= $p['aspek']; ?></td>
                    <td><?= $p['kriteria']; ?></td>
                    <td><?= $p['target']; ?></td>
                    <td>
                    <a href="index.php?page=edit-kriteria&&id=<?= $p['id_isi']; ?>&&jab=<?= $p['jabatan']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                      <a onClick="hapusData()" href="../views/delete/delete_kriteria.php?id=<?= $p['id_isi']; ?>" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- End Kriteria Admin CRO -->

    <!-- Kriteria Admin CIT -->
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Sasaran Kinerja Objektif</h2><br>
              <h6>Admin | <i>Cash In Transit</i></h6>
              <!-- <h6>| <i>Cash Replenishment Outsource</i></h6> -->
              <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-add"><i class="nav-icon fas fa-plus"></i> Add Kriteria</button>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Aspek</th>
                    <th>Kriteria</th>
                    <th>Target</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($sko_acit as $p) : ?>
                  <tr>
                    <td><?= $p['aspek']; ?></td>
                    <td><?= $p['kriteria']; ?></td>
                    <td><?= $p['target']; ?></td>
                    <td>
                    <a href="index.php?page=edit-kriteria&&id=<?= $p['id_isi']; ?>&&jab=<?= $p['jabatan']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                      <a onClick="hapusData()" href="../views/delete/delete_kriteria.php?id=<?= $p['id_isi']; ?>" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- End Kriteria Admin CIT -->

    <!-- Kriteria Admin RTG -->
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Sasaran Kinerja Objektif</h2><br>
              <h6>Admin | <i>Rumah Tangga</i></h6>
              <!-- <h6>| <i>Cash Replenishment Outsource</i></h6> -->
              <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-add"><i class="nav-icon fas fa-plus"></i> Add Kriteria</button>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Aspek</th>
                    <th>Kriteria</th>
                    <th>Target</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($sko_artg as $p) : ?>
                  <tr>
                    <td><?= $p['aspek']; ?></td>
                    <td><?= $p['kriteria']; ?></td>
                    <td><?= $p['target']; ?></td>
                    <td>
                    <a href="index.php?page=edit-kriteria&&id=<?= $p['id_isi']; ?>&&jab=<?= $p['jabatan']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                      <a onClick="hapusData()" href="../views/delete/delete_kriteria.php?id=<?= $p['id_isi']; ?>" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!-- End Kriteria Admin RTG -->

  </div>

  <!-- Modal Add -->
  <div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Kriteria & Target</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../views/add/tambah_kriteria.php" method="POST">
            <div class="form">
              <div class="row">
                <label for="divisi">Divisi</label>
                <select class="custom-select" name="divisi" id="divisi">
                <option value="1">CRO</option>
                <option value="2">CIT</option>
                <option value="3">Rutang</option>
                </select>
              </div>  
              <div class="row">
                <label for="jabatan">Jabatan</label>
                <select class="custom-select" name="jabatan" id="jabatan">
                <option value="3">Asisten Supervisor CRO</option>
                <option value="4">Asisten Supervisor CIT</option>
                <option value="5">Asisten Supervisor Rutang</option>
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
                <label for="aspek">Aspek</label>
                <select class="custom-select" name="aspek" id="aspek">
                <option value=" Aspek Proses Bisnis Internal">Proses Bisnis Internal</option>
                <option value="Aspek Pekerja">Pekerja</option>
              </select>
              </div>
              <div class="row">
                <label for="kriteria">Kriteria</label>
                <input type="text" class="form-control" name="kriteria" id="kriteria">
              </div>
              <div class="row">
                <label for="target">Target</label>
                <input type="text" class="form-control" name="target" id="target">
              </div>
              <div class="row mt-2 d-inline-block">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal Add -->

  <script>
  function hapusData() {
    alert('Yakin Hapus ?');
  }
</script>
</section>