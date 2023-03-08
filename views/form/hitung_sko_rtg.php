<?php

include '../config/database.php';

$id = $_GET['id'];
$jab = $_GET['jab'];

$query = mysqli_query($conn, "SELECT * FROM kriteria_penilaian JOIN jabatans ON kriteria_penilaian.jabatan=jabatans.id WHERE jabatan='$jab'");
$sk = mysqli_query($conn, "SELECT * FROM kriteria_kompetensi WHERE jenis_sk='2'");
$periode = mysqli_query($conn, "SELECT * FROM periode");
$user = mysqli_query($conn, "SELECT * FROM users JOIN jabatans ON users.jabatan=jabatans.id WHERE id_user='$id'");
$n = $user->fetch_array();

?>

<!-- <section class="content-header"> -->
<!-- <div class="container-fluid">
  <div class="row">
    <div class="col-sm-6">
      <h3>Input Nilai</h3>
    </div>
  </div>
</div> -->
<!-- </section> -->

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title">Form Input Penilaian</h2>
          </div>
          <div class="card-body">
            <form action="../views/hitung/insert_nilai_rtg.php" method="post">
              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-6">
                  <input type="text" id="" value="<?= $n['name']; ?>" disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">ID Pegawai</label>
                <div class="col-sm-6">
                  <input type="text" id="" value="<?= $n['id_pegawai']; ?>" disabled>
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-6">
                  <input type="text" id="" value="<?= $n['name_jab']; ?>" disabled>
                </div>
              </div>
              <!-- Sasaran Kinerja Objektif -->
              <div class="card">
                <div class="card-header bg-primary text-white">
                  <h5 class="card-title">Sasaran Kinerja Objektif</h5>
                </div>
                <div class="card-body">
                  <?php foreach ($query as $q) : ?>
                    <div class="form-group row">
                      <!-- <input type="text" name="id_user[]" id="id_user[]" value="<?= $id; ?>" hidden> -->
                      <input type="text" name="div" id="div" value="<?= $div; ?>" hidden>
                      <input type="text" name="jab" id="jab" value="<?= $jab; ?>" hidden>
                      <!-- <input type="text" name="id_pegawai[]" id="id_pegawai[]" value="<?= $idpeg; ?>" hidden> -->
                      <!-- <input type="text" name="id_isi[]" id="id_isi[]" value="<?= $q['id_isi_sko']; ?>" hidden> -->
                      <label for="periode" class="col-sm-2 col-form-label">Periode</label>
                      <div class="col-sm-4">
                        <select name="periode[]" id="periode[]" class="form-select rounded col-2 text-center" required>
                          <option selected disabled value="">--</option>
                          <?php foreach ($periode as $p) : ?>
                            <option value="<?= $p['id_periode']; ?>"><?= $p['tahun']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Aspek</th>
                          <th>Kriteria</th>
                          <th>Target</th>
                          <th>Bobot</th>
                          <th>Realisasi (%)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($query as $q) : ?>
                          <tr>
                            <td>
                              <input type="text" name="id_isi[]" id="id_isi[]" value="<?= $q['id_isi_sko']; ?>" hidden>
                              <input type="text" name="aspek" id="aspek" value="<?= $q['aspek']; ?>" hidden>
                              <?= $q['aspek']; ?>
                            </td>
                            <td>
                              <input type="text" name="kriteria" id="kriteria" value="<?= $q['kriteria']; ?>" hidden>
                              <?= $q['kriteria']; ?>
                            </td>
                            <td>
                              <input type="text" name="target" id="target" value="<?= $q['target']; ?>" hidden>
                              <?= $q['target']; ?>
                            </td>
                            <td>
                              <input type="text" name="bobot[]" id="bobot[]" value="<?= $q['bobot']; ?>" hidden>
                              <?= $q['bobot']; ?>
                            </td>
                            <td>
                              <input type="text" name="realisasi[]" id="realisasi[]" required>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                    <!-- <div class="form-group row">
                      <label for="aspek" class="col-sm-2 col-form-label">Aspek</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="aspek" value="<?= $q['aspek']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="kriteria" class="col-sm-2 col-form-label">Kriteria</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="kriteria" value="<?= $q['kriteria']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="target" class="col-sm-2 col-form-label">Target</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="target" value="<?= $q['target']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
                      <div class="col-sm-10">
                        <select name="nilai[]" id="nilai[]" class="form-select rounded col-2 text-center" required>
                          <option selected disabled value="">--</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div>
                    </div>
                    <hr class="border-primary">
                  <?php endforeach; ?>
                </div>
              </div> -->
                    <!-- Sasaran Kompetensi -->
                    <div class="card mt-3">
                      <div class="card-header bg-success text-white">
                        <h5 class="card-title">Sasaran Kompetensi</h5>
                      </div>
                      <div class="card-body">
                        <!-- <label for="periode" class="col-sm-2 col-form-label">Periode</label>
                        <div class="col-sm-4">
                          <select name="periode[]" id="periode[]" class="form-select rounded col-2 text-center" required>
                            <option selected disabled value="">--</option>
                            <?php foreach ($periode as $p) : ?>
                              <option value="<?= $p['id_periode']; ?>"><?= $p['tahun']; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </div> -->
                        <?php foreach ($sk as $sk) : ?>
                          <div class="form-group row">
                            <input type="text" name="id_user[]" id="id_user[]" value="<?= $id; ?>" hidden>
                            <input type="text" name="id_pegawai[]" id="id_pegawai[]" value="<?= $idpeg; ?>" hidden>
                            <input type="text" name="id_isi_sk[]" id="id_isi_sk[]" value="<?= $sk['id_isi_sk']; ?>" hidden>
                          </div>
                          <div class="form-group row">
                            <label for="kriteria" class="col-sm-2 col-form-label">Kriteria</label>
                            <div class="col-sm-10">
                              <input type="text" readonly class="form-control-plaintext" id="kriteria" value="<?= $sk['kriteria']; ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="nilaisk" class="col-sm-2 col-form-label">Nilai</label>
                            <div class="col-sm-10">
                              <select name="nilaisk[]" id="nilaisk[]" class="form-select rounded col-2 text-center" required>
                                <option selected disabled value="">--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                            </div>
                          </div>
                          <hr class="border-success">
                        <?php endforeach; ?>
                      </div>
                    </div>
                    <!-- Pelanggaran Disiplin -->
                    <div class="card mt-3">
                      <div class="card-header bg-warning text-dark">
                        <h5 class=" card-title">Pelanggaran Disiplin</h5>
                      </div>
                      <div class="card-body">
                        <div class="form-group row">
                          <input type="text" name="id_user[]" id="id_user[]" value="<?= $id; ?>" hidden>
                          <input type="text" name="id_pegawai[]" id="id_pegawai[]" value="<?= $idpeg; ?>" hidden>
                        </div>
                        <div class="form-group row">
                          <label for="nilai" class="col-sm-2 col-form-label">Jenis Pelanggaran</label>
                          <div class="col-sm-10">
                            <select name="nilaihk" id="nilaihk" class="form-select rounded col-6 text-center" required>
                              <option selected value="0">Tidak ada pelanggaran dilakukan</option>
                              <option value="0.25">SP - 1 | 0.25</option>
                              <option value="0.35">SP - 2 | 0.35</option>
                              <option value="0.50">SP - 3 | 0.50</option>
                              <option value="1.00">Sistem dan Prosedur | 1.00</option>
                              <option value="1.50">Pelanggaran Fundamental | 1.50</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="rounded border border-dark border-5 opacity-75">
                    <div class="form-group">
                      <label for="catatan">Catatan</label>
                      <textarea class="form-control" id="catatan" name="catatan" rows="4" placeholder="Tambahkan Catatan"></textarea>
                    </div>
                    <hr class="rounded border border-dark border-5 opacity-75">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include '../template/footer.php' ?>