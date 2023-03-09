<?php

$id = $_GET['id'];
$kriteria = mysqli_query($conn, "SELECT * FROM kriteria_penilaian JOIN jabatans ON kriteria_penilaian.jabatan=jabatans.id WHERE id_isi_sko = '$id'");

?>
<!-- 
<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h4 class="card-title">Edit Data Kriteria</h4>
      </div>
<div class="card-body">
  <form method="POST" action="../views/update/update_data_kriteria.php">
    <?php foreach ($kriteria as $k) : ?>
      <div class="row">
        <input type="text" name="id_isi" value="<?= $k['id_isi_sko']; ?>" hidden>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" value="<?= $k['name_jab']; ?>" readonly>
          </div>
        </div>
      </div>
      <div class=" row">
        <div class="col-sm-6">
          <div class="form-group">
            <label>Aspek</label>
            <input type="text" class="form-control" name="aspek" value="<?= $k['aspek']; ?>">
          </div>
        </div>
      </div>
      <div class=" row">
        <div class="col-sm-6">
          <div class="form-group">
            <label>Kriteria</label>
            <input type="text" class="form-control" name="kriteria" value="<?= $k['kriteria']; ?>">
          </div>
        </div>
      </div>
      <div class=" row">
        <div class="col-sm-6">
          <div class="form-group">
            <label>Target</label>
            <input type="text" class="form-control" name="target" value="<?= $k['target']; ?>">
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <a href="index.php?page=data-kinerja-objektif" class="btn btn-sm btn-warning">Back</a>
    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
  </form>
</div>
</div>
</div>
</section> -->

<?php

include '../config/database.php';

$jab = $_POST['jab'];
$jml = $_POST['jml'];

$tkkep = mysqli_query($conn, "SELECT * FROM tk_kepentingan");
$kriteria = mysqli_query($conn, "SELECT * FROM kriteria_penilaian WHERE jabatan='$jab'");
$jabatan = mysqli_query($conn, "SELECT * FROM jabatans WHERE id='$jab'");
$j = $jabatan->fetch_array();

?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">
              <h4>Tambah Kriteria</h4>
              <h5><?= $j['name_jab']; ?></h5>
            </div>
            <div class="card-body">
              <form action="../views/add/tambah_kriteria.php" method="POST">
                <table class="table table-bordered">
                  <thead>
                    <td width="15%">Aspek</td>
                    <td>Kriteria</td>
                    <td>Target</td>
                    <td width="12%">Tingkat Kepentingan</td>
                  </thead>
                  <tbody>
                    <?php for ($i = 1; $i <= $jml; $i++) { ?>
                      <tr>
                        <td hidden><input type="text" name="jab[]" id="jab[]" value="<?= $jab; ?>"></td>
                        <td>
                          <select class="custom-select" name="aspek[]" id="aspek[]" required>
                            <option value="Aspek Proses Bisnis Internal">Proses Bisnis Internal</option>
                            <option value="Aspek Pekerja">Pekerja</option>
                            <option value="Aspek Pelanggan">Pelanggan</option>
                          </select>
                        </td>
                        <td><input type="text" class="col-11" name="kriteria[]" id="kriteria[]" required></td>
                        <td><input type="text" class="col-11" name="target[]" id="target[]"></td>
                        <td>
                          <select class="custom-select" name="tk_kep[]" id="tk_kep[]" required>
                            <option value="" selected disabled>--</option>
                            <?php foreach ($tkkep as $tk) : ?>
                              <option value="<?= $tk['id_tk']; ?>"><?= $tk['ket']; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include '../template/footer.php' ?>

<?php include '../template/footer.php' ?>