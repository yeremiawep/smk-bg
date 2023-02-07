<?php 
include '../config/database.php';

$sko_spvcro = mysqli_query($conn, "SELECT * FROM penilaian_spvcro");
$sko_spvcit = mysqli_query($conn, "SELECT * FROM penilaian_spvcit");
$sko_spvrtg = mysqli_query($conn, "SELECT * FROM penilaian_spvrtg");
$sko_pcro   = mysqli_query($conn, "SELECT * FROM penilaian_cro");

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
            <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-cro">Add Kriteria</button>
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
                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                    <a onClick="hapusData()" href="../views/delete/delete_spvcro.php?id=<?= $cro['id_isi']; ?>" class="btn btn-sm btn-danger">Delete</a>
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
            <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-cit">Add Kriteria</button>
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
                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                    <a onClick="hapusData()" href="../views/delete/delete_spvcit.php?id=<?= $cit['id_isi']; ?>" class="btn btn-sm btn-danger">Delete</a>
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
            <h6>Asisten Supervisor | <i>Rutang</i></h6>
            <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-rtg">Add Kriteria</button>
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
                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                    <a onClick="hapusData()" href="../views/delete/delete_spvrtg.php?id=<?= $rtg['id_isi']; ?>" class="btn btn-sm btn-danger">Delete</a>
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
            <h6>Admin & Pelaksana</h6>
            <!-- <h6>| <i>Cash Replenishment Outsource</i></h6> -->
            <button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#modal-pcro">Add Kriteria</button>
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
                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                    <a onClick="hapusData()" href="../views/delete/delete_pcro.php?id=<?= $p['id_isi']; ?>" class="btn btn-sm btn-danger">Delete</a>
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
  </div>

  <!-- Modal Ass.SPV CRO -->
  <div class="modal fade" id="modal-cro">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Kriteria & Target |</h4>
          <vr>
          <h6> 
            Asisten Supervisor 
            <br>
            <i>Cash Replenishment Outsource</i>
          </h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../views/add/tambah_kriteria_cro.php" method="POST">
            <div class="form">
              <div class="row">
                <label for="aspek">Aspek</label>
                <select class="custom-select" name="aspek" id="aspek">
                <option value="Proses Bisnis Internal">Proses Bisnis Internal</option>
                <option value="Pekerja">Pekerja</option>
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
  <!-- End Modal Ass.SPV CRO -->

  <!-- Modal Ass.SPV CIT -->
  <div class="modal fade" id="modal-cit">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Kriteria & Target |</h4>
          <vr>
          <h6> 
            Asisten Supervisor 
            <br>
            <i>Cash In Transit</i>
          </h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../views/add/tambah_kriteria_cit.php" method="POST">
            <div class="form">
              <div class="row">
                <label for="aspek">Aspek</label>
                <select class="custom-select" name="aspek" id="aspek">
                <option value="Proses Bisnis Internal">Proses Bisnis Internal</option>
                <option value="Pekerja">Pekerja</option>
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
  <!-- End Modal Ass.SPV CIT -->

  <!-- Modal Ass.SPV RTG -->
  <div class="modal fade" id="modal-rtg">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Add Kriteria & Target |</h4>
          <vr>
          <h6> 
            Asisten Supervisor 
            <br>
            <i>Rutang</i>
          </h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../views/add/tambah_kriteria_rtg.php" method="POST">
            <div class="form">
              <div class="row">
                <label for="aspek">Aspek</label>
                <select class="custom-select" name="aspek" id="aspek">
                <option value="Proses Bisnis Internal">Proses Bisnis Internal</option>
                <option value="Pekerja">Pekerja</option>
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
  <!-- End Modal Ass.SPV RTG -->

  <!-- Modal Admin & Pelaksana -->
  <div class="modal fade" id="modal-pcro">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Add Kriteria & Target |</h4>
          <vr>
          <h6> 
            Admin & Pelaksana 
            <br>
            <i></i>
          </h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../views/add/tambah_kriteria_pcro.php" method="POST">
            <div class="form">
              <div class="row">
                <label for="aspek">Aspek</label>
                <select class="custom-select" name="aspek" id="aspek">
                <option value="Proses Bisnis Internal">Proses Bisnis Internal</option>
                <option value="Pekerja">Pekerja</option>
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
  <!-- End Modal Admin & Pelaksana -->

  <script>
  function hapusData() {
    alert('Yakin Hapus ?');
  }
</script>
</section>