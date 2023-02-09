<?php
include '../config/database.php';

$nilai = mysqli_query($conn, "SELECT * FROM nilai_sk JOIN users ON nilai_sk.id_pegawai=users.id_pegawai JOIN jabatans ON users.jabatan=jabatans.id JOIN divisions ON users.divisi=divisions.id");

?>

<!-- Content Wrapper. Contains page content -->
<!-- <section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1>Rekap Nilai Penilaian</h1>
      </div>
    </div>
  </div>
  /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h1 class="card-title">Rekap Nilai</h1>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                  <th width="2%">No</th>
                  <th width="10%">ID Pegawai</th>
                  <th width="10%">Nama</th>
                  <th width="10%">Divisi</th>
                  <th width="10%">Jabatan</th>
                  <th width="10%">Nilai SKO</th>
                  <th width="10%">Nilai SK</th>
                  <th width="10%">Hukuman Disiplin</th>
                  <th width="10%">Nilai Akhir</th>
                  <th width="10%">Predikat</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($nilai as $n) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $n['id_pegawai']; ?></td>
                    <td><?= $n['name']; ?></td>
                    <td><?= $n['name_div']; ?></td>
                    <td><?= $n['name_jab']; ?></td>
                    <td><?= $n['nilai_sko']; ?></td>
                    <td><?= $n['nilai_sk']; ?></td>
                    <td><?= $n['hukuman']; ?></td>
                    <td><?= $n['nilai_akhir']; ?></td>
                    <td></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
<!-- ./wrapper -->
<!-- DataTables  & Plugins -->
<!-- <?php include '../template/footer.php' ?> -->
<script>
  $(function() {
    $("#example1")
      .DataTable({
        responsive: true,
        lengthChange: false,
        autoWidth: false,
        buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
      })
      .buttons()
      .container()
      .appendTo("#example1_wrapper .col-md-6:eq(0)");
    $("#example2").DataTable({
      paging: true,
      lengthChange: false,
      searching: false,
      ordering: true,
      info: true,
      autoWidth: false,
      responsive: true,
    });
  });
</script>
<script>
  function hapusData() {
    alert('Yakin Hapus ?');
  }
</script>
</body>

</html>