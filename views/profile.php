<?php
include '../config/database.php';

$id = $_SESSION['id_user'];

$query = mysqli_query($conn, "SELECT * FROM users JOIN jabatans ON users.jabatan=jabatans.id JOIN divisions ON users.divisi=divisions.id WHERE id_user='$id'");
$q = $query->fetch_array();

?>


<section class="content">
  <div class="container">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <div class="card-title">
          <span style="font-weight: bold; font-size: 1.3rem;">Profile</span>
        </div>
      </div>
      <div class="card-body">
        <form method="POST" action="../views/update/update_profile.php">
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
                  <input type="text" class="form-control" name="divisi" id="divisi" value="<?= $q['divisi']; ?>" hidden>
                  <input type="text" class="form-control" name="divisions" id="divisions" value="<?= $q['name_div']; ?>" readonly>
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
                  <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $q['jabatan']; ?>" hidden>
                  <input type="text" class="form-control" name="jabatans" id="jabatans" value="<?= $q['name_jab']; ?>" readonly>
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
                  <input type="text" class="form-control" name="status" id="status" value="<?= $q['status']; ?>" readonly>
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
                  <input type="email" class="form-control" name="email" value="<?= $q['email']; ?>">
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <a href="index.php?page=data-pegawai" class="btn btn-sm btn-warning">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- start notif -->
<?php if (@$_SESSION['sukses']) { ?>
  <script>
    Swal.fire({
      text: "<?= $_SESSION['sukses']; ?>",
      icon: "success",
      customClass: {
        confirmButton: "btn fw-bold btn-primary",
        cancelButton: "btn fw-bold btn-active-light-primary"
      }
    })
  </script>
<?php unset($_SESSION['sukses']);
} else if (@$_SESSION['gagal']) { ?>
  <script>
    Swal.fire({
      text: "<?= $_SESSION['gagal']; ?>",
      icon: "error",
      customClass: {
        confirmButton: "btn fw-bold btn-primary",
        cancelButton: "btn fw-bold btn-active-light-primary"
      }
    })
  </script>
<?php unset($_SESSION['gagal']);
} ?>
<!-- end notif -->

<?php include '../template/footer.php'; ?>