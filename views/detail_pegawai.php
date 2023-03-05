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
                    <input type="text" class="form-control" id="" value="<?= $q['name']; ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">ID Personal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" value="<?= $q['id_personal']; ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">ID Pegawai</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" value="<?= $q['id_pegawai']; ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" value="<?= $q['email']; ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Jabatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" value="<?= $q['name_jab']; ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Divisi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" value="<?= $q['name_div']; ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">No. KTP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" value="<?= $q['no_ktp']; ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Domisili</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" value="<?= $q['domisili']; ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Agama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" value="<?= $q['agama']; ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Pendidikan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" value="<?= $q['pendidikan']; ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Tgl. Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" value="<?= $q['tgl_lahir']; ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Usia</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" value="<?= $q['usia']; ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Status Pegawai</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" value="<?= $q['status']; ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">No. BPJS Ketenagakerjaan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" value="<?= $q['no_bpjs_ketenagakerjaan']; ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">No. BPJS Kesehatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" value="<?= $q['no_bpjs_kesehatan']; ?>" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Ijazah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="" value="<?= $q['ijazah']; ?>" disabled>
                  </div>
                </div>
              <?php endforeach; ?>
            </form>
            <a href="index.php?page=data-pegawai" class="btn btn-md btn-secondary">Back</a>
            <a href="index.php?page=edit-data-pegawai&&id=<?= $q['id_pegawai']; ?>" class="btn btn-md btn-warning">Edit</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include '../template/footer.php' ?>