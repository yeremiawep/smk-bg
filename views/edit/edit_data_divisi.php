<?php

$id = $_GET['id'];
$divisi = mysqli_query($conn, "SELECT * FROM divisions WHERE id='$id'");
?>

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Divisi</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form method="POST" action="../views/update/update_data_divisi.php">
          <?php foreach ($divisi as $d) : ?>
            <div class="row">
              <input type="text" name="id" value="<?= $d['id']; ?>" hidden>
            </div>
            <div class=" row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Divisi</label>
                  <input type="text" class="form-control" name="name_div" value="<?= $d['name_div']; ?>" required>
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