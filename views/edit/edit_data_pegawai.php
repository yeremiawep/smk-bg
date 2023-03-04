<?php

$id_pegawai = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM users JOIN jabatans ON users.jabatan=jabatans.id JOIN divisions ON users.divisi=divisions.id WHERE id_pegawai='$id_pegawai'");
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
              <input type="text" name="id_user" id="id_user" value="<?= $q['id_user']; ?>" hidden>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>ID Pegawai</label>
                  <input type="text" class="form-control" name="id_pegawai" id="id_pegawai" value="<?= $q['id_pegawai']; ?>" readonly>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>ID Personal</label>
                  <input type="text" class="form-control" name="id_personal" id="id_personal" value="<?= $q['id_personal']; ?>" readonly>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <Label>No. KTP</Label>
                  <input type="text" class="form-control" name="no_ktp" id="no_ktp" value="<?= $q['no_ktp']; ?>">
                </div>
              </div>
              <div class=" col-sm-6">
                <div class="form-group">
                  <label>Divisi</label>
                  <select class="custom-select" name="divisi" id="divisi" value="<?= $q['divisi']; ?>">
                    <option value="<?= $q['divisi']; ?>" selected><?= $q['name_div']; ?></option>
                    <option value="1">CRO</option>
                    <option value="2">CIT</option>
                    <option value="3">RTG</option>
                  </select>
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
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="">Tgl. Lahir</label>
                  <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?= $q['tgl_lahir']; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="custom-select" name="jabatan" id="jabatan" value="<?= $q['jabatan']; ?>">
                    <option value="<?= $q['jabatan']; ?>"><?= $q['name_jab']; ?></option>
                    <option value="1">Pemimpin Cabang</option>
                    <option value="2">Wakil Pemimpin Cabang</option>
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
              <div class="col-sm-6">
                <div class="form-group">
                  <label>No. BPJS Kesehatan</label>
                  <input type="text" class="form-control" name="no_bpjs_kesehatan" value="<?= $q['no_bpjs_kesehatan']; ?>">
                </div>
              </div>
            </div>
            <div class=" row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Domisili</label>
                  <input type="text" class="form-control" name="domisili" value="<?= $q['domisili']; ?>">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Usia</label>
                  <input type="text" class="form-control" name="usia" value="<?= $q['usia']; ?>">
                </div>
              </div>
            </div>
            <div class=" row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Agama</label>
                  <input type="text" class="form-control" name="agama" value="<?= $q['agama']; ?>">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Pendidikan</label>
                  <input type="text" class="form-control" name="pendidikan" value="<?= $q['pendidikan']; ?>">
                </div>
              </div>
            </div>
            <div class=" row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Status Pegawai</label>
                  <select class="custom-select" name="status" id="status" value="<?= $q['status']; ?>">
                    <option value="<?= $q['status']; ?>" selected><?= $q['status']; ?></option>
                    <option value="tetap">Tetap</option>
                    <option value="kontrak">Kontrak</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Ijazah</label>
                  <input type="text" class="form-control" name="ijazah" value="<?= $q['ijazah']; ?>">
                </div>
              </div>
            </div>
            <div class=" row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>No. BPJS Ketenagakerjaan</label>
                  <input type="text" class="form-control" name="no_bpjs_ketenagakerjaan" value="<?= $q['no_bpjs_ketenagakerjaan']; ?>">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email" value="<?= $q['email']; ?>">
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <a href="index.php?page=data-pegawai" class="btn btn-sm btn-warning">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</section>


<?php include '../template/footer.php' ?>