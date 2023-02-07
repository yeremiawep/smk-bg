<?php
include '../config/database.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM users JOIN jabatans ON users.jabatan=jabatans.id JOIN divisions ON users.divisi=divisions.id WHERE id_pegawai='$id'");

?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title">Detail Pegawai</h2>
          </div>
          <div class="card-body">
          <form>
            <?php foreach ($query as $q) : ?>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="" value="<?= $q['name']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">ID Personal</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="" value="<?= $q['id_personal']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">ID Pegawai</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="" value="<?= $q['id_pegawai']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Jabatan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="" value="<?= $q['name_jab']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Divisi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="" value="<?= $q['name_div']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">No. KTP</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="" value="<?= $q['no_ktp']; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Domisili</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="" value="<?= $q['domisili']; ?>">
              </div>
            </div>
            <?php endforeach; ?>
          </form>
          <a href="index.php?page=data-pegawai" class="btn btn-md btn-warning">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>