<?php

include '../config/database.php';

$user = $_SESSION['user'];
$id = $_SESSION['id_user'];
$jab = $_SESSION['name_jab'];
$div = $_SESSION['name_div'];
$idpeg = $_SESSION['id_pegawai'];

$nilaisko = mysqli_query($conn, "SELECT * FROM hitung_nilai JOIN kriteria_penilaian ON hitung_nilai.id_isi_sko=kriteria_penilaian.id_isi_sko WHERE id_user='$id'");
$nilaisk = mysqli_query($conn, "SELECT * FROM hitung_nilai_sk JOIN kriteria_kompetensi ON hitung_nilai_sk.id_isi_sk=kriteria_kompetensi.id_isi_sk WHERE id_user='$id'");
$me = mysqli_query($conn, "SELECT * FROM nilai_akhir JOIN periode ON nilai_akhir.periode=periode.id_periode WHERE id_user='$id'");
$m = mysqli_fetch_array($me);

?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">
              <h4>Detail Nilai</h4>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-4">
                <input type="text" id="" value="<?= $_SESSION['user']; ?>" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">ID Pegawai</label>
              <div class="col-sm-4">
                <input type="text" id="" value="<?= $_SESSION['id_pegawai']; ?>" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Divisi</label>
              <div class="col-sm-4">
                <input type="text" id="" value="<?= $_SESSION['name_div']; ?>" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Jabatan</label>
              <div class="col-sm-4">
                <input type="text" id="" value="<?= $_SESSION['name_jab']; ?>" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Periode Penilaian</label>
              <div class="col-sm-4">
                <input type="text" id="" value="<?= $m['tahun']; ?>" disabled>
              </div>
            </div>
            <hr class="border-primary">
            <h5>Sasaran Kinerja Objektif</h5>
            <table class="table table-bordered">
              <thead>
                <th>Aspek</th>
                <th>Kriteria</th>
                <th>Target</th>
                <th>Bobot</th>
                <th>Realisasi (%)</th>
                <th>Nilai</th>
              </thead>
              <tbody>
                <?php foreach ($nilaisko as $sko) : ?>
                  <tr>
                    <td><?= $sko['aspek']; ?></td>
                    <td><?= $sko['kriteria']; ?></td>
                    <td><?= $sko['target']; ?></td>
                    <td><?= $sko['bobot']; ?></td>
                    <td><?= $sko['realisasi']; ?></td>
                    <td placeholder="--"><?= $sko['nilai_sko']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <div class="row mb-3 mt-2">
              <label for="nilaisko" class="col-sm-2 col-form-label">Total Nilai SKO</label>
              <div class="col-2">
                <input type="text" id="nilaisko" name="nilaisko" value="<?= @$m['total_nilai_sko']; ?>" placeholder="--" disabled>
              </div>
            </div>
          </div>
          <hr class="border-primary">
          <div class="card-body">
            <h5>Sasaran Kompetensi</h5>
            <table class="table table-bordered">
              <thead>
                <th>Kriteria</th>
                <th>Nilai</th>
              </thead>
              <tbody>
                <?php foreach ($nilaisk as $sk) : ?>
                  <tr>
                    <td><?= $sk['kriteria']; ?></td>
                    <td><?= $sk['nilai']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <div class="row mb-3 mt-2">
              <label for="nilaisk" class="col-sm-2 col-form-label">Total Nilai SK</label>
              <div class="col-2">
                <input type="text" id="nilaisk" name="nilaisk" value="<?= @$m['total_nilai_sk'] ? $m['total_nilai_sk'] : '--'; ?>" placeholder="--" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <label for="nilaiakhir" class="col-sm-2 col-form-label">Nilai Akhir</label>
              <div class="col-2">
                <input type="text" id="nilaiakhir" name="nilaiakhir" value="<?= @$m['nilai_akhir'] ? $m['nilai_akhir'] : '--'; ?>" disabled>
              </div>
            </div>
            <div class=" row mb-3">
              <label for="predikat" class="col-sm-2 col-form-label">Predikat</label>
              <div class="col-2">
                <input type="text" id="predikat" name="predikat" value="<?= @$m['predikat'] ?: '--'; ?>" disabled>
              </div>
            </div>
          </div>
          <hr class="border-primary">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Catatan</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" disabled><?= @$m['catatan'] ?: 'Tidak ada catatan'; ?></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include '../template/footer.php'; ?>