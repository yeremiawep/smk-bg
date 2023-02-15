<?php
include '../config/database.php';

$nilai = mysqli_query($conn, "SELECT * FROM nilai_akhir JOIN users ON nilai_akhir.id_user=users.id_user");

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
<!-- </section> -->

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
                  <th width="10%">Pelanggaran Disiplin</th>
                  <th width="10%">Nilai Akhir</th>
                  <th width="10%">Predikat</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($nilai as $nilai) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $nilai['id_pegawai']; ?></td>
                    <td><?= $nilai['name']; ?></td>
                    <td><?= $nilai['divisi']; ?></td>
                    <td><?= $nilai['jabatan']; ?></td>
                    <td><?= $nilai['nilai_sko']; ?></td>
                    <td><?= $nilai['nilai_sk']; ?></td>
                    <td><?= $nilai['hukuman']; ?></td>
                    <td><?= $nilai['nilai_akhir']; ?></td>
                    <td>
                    </td>
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