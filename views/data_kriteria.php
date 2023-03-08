<?php
include '../config/database.php';

$sko_spvcro = mysqli_query($conn, "SELECT * FROM kriteria_penilaian JOIN tk_kepentingan ON kriteria_penilaian.id_tk=tk_kepentingan.id_tk WHERE jabatan=3");
$sko_spvcit = mysqli_query($conn, "SELECT * FROM kriteria_penilaian JOIN tk_kepentingan ON kriteria_penilaian.id_tk=tk_kepentingan.id_tk WHERE jabatan=4");
$sko_spvrtg = mysqli_query($conn, "SELECT * FROM kriteria_penilaian JOIN tk_kepentingan ON kriteria_penilaian.id_tk=tk_kepentingan.id_tk WHERE jabatan=5");
$sko_pcro   = mysqli_query($conn, "SELECT * FROM kriteria_penilaian JOIN tk_kepentingan ON kriteria_penilaian.id_tk=tk_kepentingan.id_tk WHERE jabatan=13");
$sko_acro   = mysqli_query($conn, "SELECT * FROM kriteria_penilaian JOIN tk_kepentingan ON kriteria_penilaian.id_tk=tk_kepentingan.id_tk WHERE jabatan=7");
$sko_acit   = mysqli_query($conn, "SELECT * FROM kriteria_penilaian JOIN tk_kepentingan ON kriteria_penilaian.id_tk=tk_kepentingan.id_tk WHERE jabatan=8");
$sko_artg   = mysqli_query($conn, "SELECT * FROM kriteria_penilaian JOIN tk_kepentingan ON kriteria_penilaian.id_tk=tk_kepentingan.id_tk WHERE jabatan=9");
$jab = mysqli_query($conn, "SELECT * FROM jabatans");

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

    <!-- <?php foreach ($jab as $j) : ?>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">Sasaran Kinerja Objektif</h2><br>
              <h6><?= $j['name_jab']; ?></i></h6>
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
                  <?php foreach ($kriteria as $k) : ?>
                    <tr>
                      <td width="10%"><?= $k['aspek']; ?></td>
                      <td><?= $k['kriteria']; ?></td>
                      <td><?= $k['target']; ?></td>
                      <td>
                        <a href="index.php?page=edit-kriteria&&id=<?= $k['id_isi_sko']; ?>&&jab=<?= $k['jabatan']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                        <a onClick="hapusData()" href="../views/delete/delete_kriteria.php?id=<?= $k['id_isi_sko']; ?>" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?> -->









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
                  <th>Tingkat Kepentingan</th>
                  <th>Bobot</th>
                  <th width="8%">Options</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($sko_spvcro as $cro) : ?>
                  <tr>
                    <td width="10%"><?= $cro['aspek']; ?></td>
                    <td><?= $cro['kriteria']; ?></td>
                    <td><?= $cro['target']; ?></td>
                    <td><?= $cro['ket']; ?></td>
                    <td><?= $cro['bobot']; ?></td>
                    <td>
                      <a href="index.php?page=edit-kriteria&&id=<?= $cro['id_isi_sko']; ?>&&jab=<?= $cro['jabatan']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                      <a onClick="hapusData()" href="../views/delete/delete_kriteria.php?id=<?= $cro['id_isi_sko']; ?>" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i></a>
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
                  <th>Tingkat Kepentingan</th>
                  <th>Bobot</th>
                  <th width="8%">Options</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($sko_spvcit as $cit) : ?>
                  <tr>
                    <td width="10%"><?= $cit['aspek']; ?></td>
                    <td><?= $cit['kriteria']; ?></td>
                    <td><?= $cit['target']; ?></td>
                    <td><?= $cit['ket']; ?></td>
                    <td><?= $cit['bobot']; ?></td>
                    <td>
                      <a href="index.php?page=edit-kriteria&&id=<?= $cit['id_isi_sko']; ?>&&jab=<?= $cit['jabatan']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                      <a onClick="hapusData()" href="../views/delete/delete_kriteria.php?id=<?= $cit['id_isi_sko']; ?>" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i></a>
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
                  <th>Tingkat Kepentingan</th>
                  <th>Bobot</th>
                  <th width="8%">Options</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($sko_spvrtg as $rtg) : ?>
                  <tr>
                    <td width="10%"><?= $rtg['aspek']; ?></td>
                    <td><?= $rtg['kriteria']; ?></td>
                    <td width="40%"><?= $rtg['target']; ?></td>
                    <td><?= $rtg['ket']; ?></td>
                    <td><?= $rtg['bobot']; ?></td>
                    <td>
                      <a href="index.php?page=edit-kriteria&&id=<?= $rtg['id_isi_sko']; ?>&&jab=<?= $rtg['jabatan']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                      <a onClick="hapusData()" href="../views/delete/delete_kriteria.php?id=<?= $rtg['id_isi_sko']; ?>" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i></a>
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
                  <th>Tingkat Kepentingan</th>
                  <th>Bobot</th>
                  <th width="8%">Options</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($sko_pcro as $p) : ?>
                  <tr>
                    <td><?= $p['aspek']; ?></td>
                    <td><?= $p['kriteria']; ?></td>
                    <td><?= $p['target']; ?></td>
                    <td><?= $p['ket']; ?></td>
                    <td><?= $p['bobot']; ?></td>
                    <td>
                      <a href="index.php?page=edit-kriteria&&id=<?= $p['id_isi_sko']; ?>&&jab=<?= $p['jabatan']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                      <a onClick="hapusData()" href="../views/delete/delete_kriteria.php?id=<?= $p['id_isi_sko']; ?>" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i></a>
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
                  <th>Tingkat Kepentingan</th>
                  <th>Bobot</th>
                  <th width="8%">Options</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($sko_acro as $p) : ?>
                  <tr>
                    <td><?= $p['aspek']; ?></td>
                    <td><?= $p['kriteria']; ?></td>
                    <td><?= $p['target']; ?></td>
                    <td><?= $p['ket']; ?></td>
                    <td><?= $p['bobot']; ?></td>
                    <td>
                      <a href="index.php?page=edit-kriteria&&id=<?= $p['id_isi_sko']; ?>&&jab=<?= $p['jabatan']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                      <a onClick="hapusData()" href="../views/delete/delete_kriteria.php?id=<?= $p['id_isi_sko']; ?>" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i></a>
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
                  <th>Tingkat Kepentingan</th>
                  <th>Bobot</th>
                  <th width="8%">Options</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($sko_acit as $p) : ?>
                  <tr>
                    <td><?= $p['aspek']; ?></td>
                    <td><?= $p['kriteria']; ?></td>
                    <td><?= $p['target']; ?></td>
                    <td><?= $p['ket']; ?></td>
                    <td><?= $p['bobot']; ?></td>
                    <td>
                      <a href="index.php?page=edit-kriteria&&id=<?= $p['id_isi_sko']; ?>&&jab=<?= $p['jabatan']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                      <a onClick="hapusData()" href="../views/delete/delete_kriteria.php?id=<?= $p['id_isi_sko']; ?>" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i></a>
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
                  <th>Tingkat Kepentingan</th>
                  <th>Bobot</th>
                  <th width="8%">Options</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($sko_artg as $p) : ?>
                  <tr>
                    <td><?= $p['aspek']; ?></td>
                    <td><?= $p['kriteria']; ?></td>
                    <td><?= $p['target']; ?></td>
                    <td><?= $p['ket']; ?></td>
                    <td><?= $p['bobot']; ?></td>
                    <td>
                      <a href="index.php?page=edit-kriteria&&id=<?= $p['id_isi_sko']; ?>&&jab=<?= $p['jabatan']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                      <a onClick="hapusData(<?= $p['id_isi_sko']; ?>)" class="btn btn-sm btn-danger"><i class="nav-icon fas fa-trash"></i></a>
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
  <!-- <div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Kriteria & Target</h4>
          <button type="button" class="close" data-dismiss="modal" Arial-label="Close">
            <span Arial-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../views/add/tambah_kriteria.php" method="POST">
            <div class="form">
              <div class="row">
                <label for="jabatan">Jabatan</label>
                <select class="custom-select" name="jabatan" id="jabatan" required>
                  <option selected disabled value="">--</option>
                  <?php foreach ($jab as $j) : ?>
                    <option value="<?= $j['id']; ?>"><?= $j['name_jab']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="row">
                <label for="aspek">Aspek</label>
                <select class="custom-select" name="aspek" id="aspek" required>
                  <option value=" Aspek Proses Bisnis Internal">Proses Bisnis Internal</option>
                  <option value="Aspek Pekerja">Pekerja</option>
                  <option value="Aspek Pelanggan">Pelanggan</option>
                </select>
              </div>
              <div class="row">
                <label for="kriteria">Kriteria</label>
                <input type="text" class="form-control" name="kriteria" id="kriteria" required>
              </div>
              <div class="row">
                <label for="target">Target</label>
                <input type="text" class="form-control" name="target" id="target" required>
              </div>
              <div class="row">
                <label for="tk_kepentingan">Tingkat Kepentingan</label>
                <select class="custom-select" name="tk_kepentingan" id="tk_kepentingan" required>
                  <option value="1">Sangat Rendah</option>
                  <option value="2">Rendah</option>
                  <option value="3">Sedang</option>
                  <option value="4">Tinggi</option>
                  <option value="5">Sangat Tinggi</option>
                </select>
              </div>
              <div class="row">
                <label for="bobot">Bobot</label>
                <input type="text" class="form-control" name="bobot" id="bobot" required>
              </div>
              <div class="row mt-2 d-inline-block">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> -->
  <!-- End Modal Add -->

  <div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Kriteria & Target</h4>
          <button type="button" class="close" data-dismiss="modal" Arial-label="Close">
            <span Arial-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- <form action="../views/form/input_kriteria.php" method="POST"> -->
          <form action="index.php?page=tambah-kriteria" method="POST">
            <div class="form">
              <div class="row">
                <label for="jabatan">Jabatan</label>
                <select class="custom-select" name="jab" id="jab" required>
                  <option selected disabled value="">--</option>
                  <?php foreach ($jab as $j) : ?>
                    <option value="<?= $j['id']; ?>"><?= $j['name_jab']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="row">
                <label for="target">Jumlah Data</label>
                <input type="text" class="form-control" name="jml" id="jml" required>
              </div>
              <div class="row mt-2 d-inline-block">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                <!-- <a href="index.php?page=tambah-kriteria" class="btn btn-primary">Add</a> -->
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <?php include '../template/footer.php' ?>
  <script>
    function hapusData(data_id) {
      // alert('Yakin Hapus ?');
      Swal.fire({
        title: 'Are you sure ?',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes',
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          window.location = ("../views/delete/delete_kriteria.php?id=" + data_id);
          // Swal.fire('Saved!', '', 'success')
        }
      })
    }
  </script>
  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?php if (@$_SESSION['sukses']) { ?>
    <script>
      // Swal.fire(
      //   'Success',
      //   'Add Data',
      //   'success'
      // )
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

</section>