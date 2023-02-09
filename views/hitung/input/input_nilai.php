<?php

$id = $_GET['id'];
$nilai = mysqli_query($conn, "SELECT * FROM hitung_nilai WHERE id_user='$id'");
?>

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Input Nilai</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form method="POST" action="isi_nilai.php">
          <?php foreach ($nilai as $n) : ?>
            <div class="row">
              <input type="text" name="id" value="<?= $n['id_nilai']; ?>" hidden>
            </div>
            <div class=" row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Nilai</label>
                  <input type="text" class="form-control" name="nilai_sko" value="<?= $n['nilai_sko']; ?>">
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