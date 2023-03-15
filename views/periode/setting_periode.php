<?php

$id = $_GET['id'];
$periode = mysqli_query($conn, "SELECT * FROM periode WHERE id_periode='$id'");
?>

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Periode</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form method="POST" action="../views/update/update_periode.php">
          <?php foreach ($periode as $p) : ?>
            <div class="row">
              <input type="text" name="id_periode" value="<?= $id; ?>" hidden>
            </div>
            <div class=" row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Periode</label>
                  <input type="text" class="form-control" name="tahun" value="<?= $p['tahun']; ?>" disabled>
                </div>
              </div>
            </div>
            <div class=" row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Tgl. Mulai</label>
                  <input type="date" class="form-control" name="tgl_mulai" value="<?= $p['tgl_mulai']; ?>">
                </div>
              </div>
            </div>
            <div class=" row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Tgl. Berakhir</label>
                  <input type="date" class="form-control" name="tgl_berakhir" value="<?= $p['tgl_berakhir']; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class=" col-sm-6">
                <div class="form-group">
                  <label>Status</label>
                  <select class="custom-select" name="status" id="status">
                    <option value="<?= $p['status']; ?>" selected><?= $p['status']; ?></option>
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                  </select>
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


<?php include '../template/footer.php' ?>