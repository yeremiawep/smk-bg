<?php

$id_pegawai = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM users WHERE id_pegawai='$id_pegawai'");
// $view = mysqli_fetch_array($query);
?>

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Pegawai</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form method="POST" action="../views/update/update_data_pegawai.php">
          <?php foreach ($query as $q) : ?>
          <div class="row">
            <input type="text" name="id" value="<?= $q['id']; ?>" hidden>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>ID Pegawai</label>
                <input type="text" class="form-control" name="id_pegawai" value="<?= $q['id_pegawai']; ?>" disabled>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>ID Personal</label>
                <input type="text" class="form-control" name="id_personal" value="<?= $q['id_personal']; ?>" disabled>
              </div>
            </div>
          </div>
          <div class=" row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="name" value="<?= $q['name']; ?>">
              </div>
            </div>
            <div class=" col-sm-6">
              <div class="form-group">
                <label>Divisi</label>
                <select class="custom-select" name="divisi" id="divisi" value="<?= $q['divisi']; ?>">
                  <option value="<?= $q['divisi']; ?>" selected><?= $q['divisi']; ?></option>
                  <option value="1">CRO</option>
                  <option value="2">CIT</option>
                  <option value="3">RTG</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Jabatan</label>
                <select class="custom-select" name="jabatan" id="jabatan" value="<?= $q['jabatan']; ?>">
                  <option value="<?= $q['jabatan']; ?>"><?= $q['jabatan']; ?></option>
                  <option value="1">Pimpinan Cabang</option>
                  <option value="2">Wakil Pimpinan Cabang</option>
                  <option value="3">Asisten Supervisor CRO</option>
                  <option value="4">Asisten Supervisor CIT</option>
                  <option value="5">Asisten Supervisor Rutang</option>
                  <option value="6">Internal Control</option>
                  <option value="7">Admin CRO</option>
                  <option value="8">Admin CIT</option>
                  <option value="9">Admin Rutang</option>
                  <option value="10">Pelaksana CIT</option>
                  <option value="11">Pelaksana CPC</option>
                  <option value="12">Supervisor CRO</option>
                  <option value="13">Pelaksana CRO</option>
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