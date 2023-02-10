<?php

$id = $_GET['id'];
$jab = $_GET['jab'];
$cro = mysqli_query($conn, "SELECT * FROM kriteria_penilaian JOIN jabatans ON kriteria_penilaian.jabatan=jabatans.id JOIN divisions ON kriteria_penilaian.divisi=divisions.id WHERE id_isi = '$id'");

?>

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h4 class="card-title">Edit Data Kriteria</h4>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form method="POST" action="../views/update/update_data_kriteria.php">
          <?php foreach ($cro as $cro) : ?>
            <div class="row">
              <input type="text" name="id_isi" value="<?= $cro['id_isi']; ?>" hidden>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="divisi">Divisi</label>
                  <input type="text" class="form-control" name="divisi" value="<?= $cro['name_div']; ?>" readonly>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <input type="text" class="form-control" name="jabatan" value="<?= $cro['name_jab']; ?>" readonly>
                </div>
              </div>
            </div>
            <div class=" row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Aspek</label>
                  <input type="text" class="form-control" name="aspek" value="<?= $cro['aspek']; ?>">
                </div>
              </div>
            </div>
            <div class=" row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Kriteria</label>
                  <input type="text" class="form-control" name="kriteria" value="<?= $cro['kriteria']; ?>">
                </div>
              </div>
            </div>
            <div class=" row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Target</label>
                  <input type="text" class="form-control" name="target" value="<?= $cro['target']; ?>">
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <a href="index.php?page=data-kinerja-objektif" class="btn btn-sm btn-warning">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</section>