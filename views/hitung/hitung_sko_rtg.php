<?php

include '../config/database.php';

$id = $_GET['id'];
$div = $_GET['div'];
$jab = $_GET['jab'];

$query = mysqli_query($conn, "SELECT * FROM kriteria_penilaian JOIN divisions ON kriteria_penilaian.divisi=divisions.id JOIN jabatans ON kriteria_penilaian.jabatan=jabatans.id WHERE divisi='$div' AND jabatan='$jab'");

$sk = mysqli_query($conn, "SELECT * FROM kriteria_kompetensi WHERE jenis_sk='2'");

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
          <div class="card-header" style="font-family: Inter;">
            <h2 class="card-title">Form Input Penilaian</h2>
          </div>
          <div class="card-body">
            <form action="../views/hitung/input/insert_nilai.php" method="post">
              <div class="card">
                <div class="card-header bg-primary text-white" style="font-family: Inter;">
                  <h5 class="card-title">Sasaran Kinerja Objektif</h5>
                </div>
                <div class="card-body" style="font-family: Inter;">
                  <?php foreach ($query as $q) : ?>
                    <div class="form-group row">
                      <input type="text" name="id_pegawai[]" id="id_pegawai[]" value="<?= $id; ?>">
                      <input type="text" name="id_isi[]" id="id_isi[]" value="<?= $q['id_isi']; ?>">
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
                        <select name="nilai[]" id="nilai[]" class="rounded col-1 text-center" required>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="card mt-3">
                <div class="card-header bg-success text-white" style="font-family: Inter;">
                  <h5 class="card-title">Sasaran Kompetensi</h5>
                </div>
                <div class="card-body" style="font-family: Inter;">
                  <?php foreach ($sk as $sk) : ?>
                    <div class="form-group row">
                      <input type="text" name="id_pegawai[]" id="id_pegawai[]" value="<?= $id; ?>">
                      <input type="text" name="id_isi_sk[]" id="id_isi_sk[]" value="<?= $sk['id_isi']; ?>">
                    </div>
                    <div class="form-group row">
                      <label for="kriteria" class="col-sm-2 col-form-label">Kriteria</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="kriteria" value="<?= $sk['kriteria']; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="target" class="col-sm-2 col-form-label">Target</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="target" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
                      <div class="col-sm-10">
                        <select name="nilai[]" id="nilai[]" class="rounded col-1 text-center" required>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
              <div class="card mt-3">
                <div class="card-header bg-warning text-dark" style="font-family: Inter;">
                  <h5 class=" card-title">Pelanggaran Disiplin</h5>
                </div>
                <div class="card-body" style="font-family: Inter;">
                  <div class="form-group row">
                    <input type="text" name="id_pegawai[]" id="id_pegawai[]" value="" hidden>
                    <input type="text" name="id_isi[]" id="id_isi[]" value="" hidden>
                  </div>
                  <div class="form-group row">
                    <label for="aspek" class="col-sm-2 col-form-label">Aspek</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="aspek" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria" class="col-sm-2 col-form-label">Kriteria</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="kriteria" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="target" class="col-sm-2 col-form-label">Target</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="target" value="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
                    <div class="col-sm-10">
                      <select name="nilai[]" id="nilai[]" class="rounded col-1 text-center" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="rounded border border-primary border-2 opacity-75">
              <button type="submit" class="btn btn-md btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>