<?php

include '../config/database.php';

$idna = $_GET['idna'];
$id = $_GET['id'];
$idpeg = $_GET['idpeg'];

$nilai = mysqli_query($conn, "SELECT * FROM nilai_akhir JOIN users ON nilai_akhir.id_user=users.id_user WHERE id_na='$idna'");
$nilaisko = mysqli_query($conn, "SELECT * FROM hitung_nilai JOIN kriteria_penilaian ON hitung_nilai.id_isi_sko=kriteria_penilaian.id_isi_sko WHERE id_user='$id'");
$nilaisk = mysqli_query($conn, "SELECT * FROM hitung_nilai_sk JOIN kriteria_kompetensi ON hitung_nilai_sk.id_isi_sk=kriteria_kompetensi.id_isi_sk WHERE id_user='$id'");

$n = mysqli_fetch_array($nilai);

?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">
              <h4>Detail Nilai Pegawai</h4>
            </div>
          </div>
          <div class="card-body">
            <h5>Sasaran Kinerja Objektif</h5>
            <table class="table table-bordered">
              <thead>
                <th>Aspek</th>
                <th>Kriteria</th>
                <th>Target</th>
                <th>Nilai</th>
              </thead>
              <tbody>
                <?php foreach ($nilaisko as $sko) : ?>
                  <tr>
                    <td><?= $sko['aspek']; ?></td>
                    <td><?= $sko['kriteria']; ?></td>
                    <td><?= $sko['target']; ?></td>
                    <td><?= $sko['nilai_sko']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <div class="row mb-3 mt-2">
              <label for="nilaisko" class="col-sm-2 col-form-label">Total Nilai SKO</label>
              <div class="col-2">
                <input type="text" class="form-control" id="nilaisko" name="nilaisko" value="<?= $n['total_nilai_sko']; ?>" disabled>
              </div>
            </div>
          </div>
          <hr class="border-primary">
          <div class="card-body">
            <h5>Sasaran Kinerja Objektif</h5>
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
                <input type="text" class="form-control" id="nilaisko" name="nilaisko" value="<?= $n['total_nilai_sk']; ?>" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <label for="nilaisk" class="col-sm-2 col-form-label">Nilai Akhir</label>
              <div class="col-2">
                <input type="text" class="form-control" id="nilaisko" name="nilaisko" value="<?= $n['nilai_akhir']; ?>" disabled>
              </div>
            </div>
            <div class="row mb-3">
              <label for="nilaisk" class="col-sm-2 col-form-label">Predikat</label>
              <div class="col-2">
                <input type="text" class="form-control" id="nilaisko" name="nilaisko" value="<?= $n['predikat']; ?>" disabled>
              </div>
            </div>
          </div>
          <hr class="border-primary">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Catatan</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" value="<?= $n['catatan']; ?>"></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include '../template/footer.php'; ?>