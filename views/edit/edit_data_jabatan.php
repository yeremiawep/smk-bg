<?php

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM jabatans WHERE id='$id'");
?>

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Jabatan</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form method="POST" action="../views/update/update_data_jabatan.php">
          <?php foreach ($query as $j) : ?>
            <div class="row">
              <input type="text" name="id" value="<?= $j['id']; ?>" hidden>
            </div>
            <div class=" row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Jabatan</label>
                  <input type="text" class="form-control" name="name_jab" value="<?= $j['name_jab']; ?>">
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