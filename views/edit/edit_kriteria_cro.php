<?php

$id = $_GET['id'];
$cro = mysqli_query($conn, "SELECT * FROM penilaian_spvcro WHERE id_isi = '$id'");

?>

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Kriteria Asisten Supervisor</h3> 
        <h6 class="card-title"> | <i>Cash Replenishment Outsource</i></h6>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form method="POST" action="../views/update/update_data_kriteria.php">
          <?php foreach ($cro as $cro) : ?>
            <div class="row">
              <input type="text" name="id_isi" value="<?= $cro['id_isi']; ?>" hidden>
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
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</section>