<?php

include '../config/database.php';

$id = $_GET['id'];
$idpeg = $_GET['idpeg'];
$div = $_GET['div'];
$jab = $_GET['jab'];

$query = mysqli_query($conn, "SELECT * FROM kriteria_penilaian JOIN divisions ON kriteria_penilaian.divisi=divisions.id JOIN jabatans ON kriteria_penilaian.jabatan=jabatans.id WHERE divisi='$div' AND jabatan='$jab'");
$sk = mysqli_query($conn, "SELECT * FROM kriteria_kompetensi WHERE jenis_sk='2'");
$hukuman = mysqli_query($conn, "SELECT * FROM hukuman");

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
          <div class="card-header" style="font-family: Poppins; font-style: bold;">
            <h2 class="card-title">Form Input Penilaian</h2>
          </div>
          <div class="card-body" style="font-family: Poppins;">
            <form action="../views/hitung/insert_nilai_rtg.php" method="post">
              <!-- Sasaran Kinerja Objektif -->
              <div class="card">
                <div class="card-header bg-primary text-white">
                  <h5 class="card-title">Sasaran Kinerja Objektif</h5>
                </div>
                <div class="card-body">
                  <?php foreach ($query as $q) : ?>
                    <div class="form-group row">
                      <input type="text" name="id_user[]" id="id_user[]" value="<?= $id; ?>" hidden>
                      <input type="text" name="div" id="div" value="<?= $div; ?>" hidden>
                      <input type="text" name="jab" id="jab" value="<?= $jab; ?>" hidden>
                      <input type="text" name="id_pegawai[]" id="id_pegawai[]" value="<?= $idpeg; ?>" hidden>
                      <input type="text" name="id_isi[]" id="id_isi[]" value="<?= $q['id_isi_sko']; ?>" hidden>
                    </div>
                    <div class="form-group row">
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
              </div>
              <!-- Sasaran Kompetensi -->
              <div class="card mt-3">
                <div class="card-header bg-success text-white">
                  <h5 class="card-title">Sasaran Kompetensi</h5>
                </div>
                <div class="card-body">
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
                        <?php foreach ($hukuman as $hk) : ?>
                          <option value="<?= $hk['bobot']; ?>"><?= $hk['bobot']; ?> | <?= $hk['jenis_pelanggaran']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                </div>
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