<?php
include '../config/database.php';

$id = $_GET['id'];
$div = $_GET['div'];
$jab = $_GET['jab'];

$sk = mysqli_query($conn, "SELECT * FROM kriteria_kompetensi WHERE jenis_sk='1'");

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6">
      <h3>Input Nilai</h3>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Sasaran Kompetensi</h4>
          </div>
          <div class="card-body">
            <form action="../views/hitung/input/insert_nilai_sk.php" method="post">
              <?php foreach ($sk as $sk) : ?>
                <div class="form-group row">
                  <input type="text" name="id_pegawai[]" id="id_pegawai[]" value="<?= $id; ?>" hidden>
                  <input type="text" name="id_isi[]" id="id_isi[]" value="<?= $sk['id_isi']; ?>" hidden>
                </div>
                <div class="form-group row">
                  <label for="kriteria" class="col-sm-2 col-form-label">Kriteria</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="kriteria" value="<?= $sk['kriteria']; ?>">
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
              <button type="submit" class="btn btn-sm btn-primay">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include '../template/footer.php' ?>