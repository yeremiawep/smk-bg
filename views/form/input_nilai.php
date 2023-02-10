<?php 
include '../config/database.php';

$id_pegawai = $_GET['id'];
$name_jab = $_GET['jab'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE id_pegawai='$id_pegawai'");
$user = mysqli_fetch_array($query);

$sko = mysqli_query($conn, "SELECT * FROM penilaian_cro");
$sk = mysqli_query($conn, "SELECT * FROM sk_pcro");


?>

<!-- <section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1>Form Input Penilaian</h1>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title">Form Input Penilaian</h2>
          </div>
          <div class="card-body">
            <form action="../views/hitung/hitung_sko.php" method="POST">
              <div class="row">
                <label for="id_pegawai" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-auto">
                  <input type="text" id="name" name="name" class="form-control-plaintext form-control-sm" value="<?= $user['name']; ?>" readonly>
                  <input type="text" id="id_pegawai" name="id_pegawai" class="form-control-plaintext form-control-sm" value="<?= $user['id_pegawai']; ?>" hidden>
                </div>
              </div>
              <div class="row">
                <label for="name_jab" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-auto">
                  <input type="text" id="name_jab" name="name_jab" class="form-control-plaintext form-control-sm" value="<?= $name_jab; ?>" disabled>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-sm-12">
                  <h4>Sasaran Kinerja Objektif</h4>
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
                          <select class="form-select" name="nilaiSko[]" id="nilaiSko[]">
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
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <h4>Sasaran Kompetensi</h4>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kriteria</th>
                        <th>Nilai</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1 ?>
                      <?php foreach ($sk as $sk) : ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $sk['kriteria']; ?></td>
                        <td>
                          <select class="form-select" name="nilaiSk[]" id="nilaiSk[]">
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
                </div>
              </div>
              <div class="row">
                <button type="submit" class="btn btn-md btn-success">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>