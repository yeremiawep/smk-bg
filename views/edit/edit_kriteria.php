<?php

include '../config/database.php';

$jab = @$_GET['jab'];
$jab2 = @$_POST['jab'];
$jml = @$_POST['jml'];
$tkkep = mysqli_query($conn, "SELECT * FROM tk_kepentingan");
$kriteria = mysqli_query($conn, "SELECT * FROM kriteria_penilaian JOIN tk_kepentingan ON kriteria_penilaian.id_tk=tk_kepentingan.id_tk WHERE jabatan='$jab' OR jabatan='$jab2'");
$jabatan = mysqli_query($conn, "SELECT * FROM jabatans WHERE id='$jab' OR id='$jab2'");
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
              <form action="../views/update/update_data_kriteria.php" method="POST">
                <table class="table table-bordered">
                  <thead>
                    <td width="15%">Jabatan</td>
                    <td width="15%">Aspek</td>
                    <td>Kriteria</td>
                    <td>Target</td>
                    <td width="12%">Tingkat Kepentingan</td>
                  </thead>
                  <tbody>
                    <?php foreach ($kriteria as $k) : ?>
                      <tr>
                        <td hidden><input type="text" name="id_isi[]" class="id_isi[]" value="<?= $k['id_isi_sko']; ?>"></td>
                        <td><?= $j['name_jab']; ?></td>
                        <td>
                          <select class="custom-select" name="aspek[]" id="aspek[]" value="<?= $k['aspek']; ?>">
                            <option value="<?= $k['aspek']; ?>" selected><?= $k['aspek']; ?></option>
                            <option value="Aspek Proses Bisnis Internal">Proses Bisnis Internal</option>
                            <option value="Aspek Pekerja">Pekerja</option>
                            <option value="Aspek Pelanggan">Pelanggan</option>
                          </select>
                        </td>
                        <td><input type="text" class="col-11" name="kriteria[]" id="kriteria[]" value="<?= $k['kriteria']; ?>"></td>
                        <td><input type="text" class="col-11" name="target[]" id="target[]" value="<?= $k['target']; ?>"></td>
                        <td>
                          <select class="custom-select" name="tk_kep[]" id="tk_kep[]" value="<?= $k['id_tk']; ?>">
                            <option value="<?= $k['id_tk']; ?>" selected><?= $k['ket']; ?></option>
                            <?php foreach ($tkkep as $tk) : ?>
                              <option value="<?= $tk['id_tk']; ?>"><?= $tk['ket']; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Update</button>
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