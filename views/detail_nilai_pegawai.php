<?php 

include '../config/database.php';

$id = $_GET['id'];
$idpeg = $_GET['idpeg'];

$nilai = mysqli_query($conn, "SELECT * FROM nilai_akhir JOIN users ON nilai_akhir.id_user=users.id_user");
$nilaisko = mysqli_query($conn, "SELECT * FROM hitung_nilai JOIN kriteria_penilaian ON hitung_nilai.id_isi_sko=kriteria_penilaian.id_isi_sko WHERE id_user='$id'");
$nilaisk = mysqli_query($conn, "SELECT * FROM hitung_nilai_sk JOIN kriteria_kompetensi ON hitung_nilai_sk.id_isi_sk=kriteria_kompetensi.id_isi_sk WHERE id_user='$id'");


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
              <label for="inputEmail3" class="col-sm-3 col-form-label">Total Nilai SKO</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="nilaisko" name="nilaisko" value="" disabled>
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
          </div>
          <hr class="border-primary">
          <div class="card-body">
            <div class="form-floating">
              <label for="floatingTextarea2">Comments</label>
              <textarea class="form-control" placeholder="Notes .." id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include '../template/footer.php'; ?>