<?php
include '../config/database.php';

// $nilai = mysqli_query($conn, "SELECT * FROM nilai_akhir JOIN users ON nilai_akhir.id_user=users.id_user JOIN jabatans ON nilai_akhir.jabatan=jabatans.id JOIN divisions ON nilai_akhir.divisi=divisions.id");
$nilai = mysqli_query($conn, "SELECT * FROM nilai_akhir JOIN divisions ON nilai_akhir.divisi=divisions.id JOIN jabatans ON nilai_akhir.jabatan=jabatans.id JOIN users ON nilai_akhir.id_user=users.id_user WHERE divisions.id='2' AND jabatans.id!='4'");


?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h1 class="card-title">Rekap Nilai Divisi CIT</h1>
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
                  <th width="10%">Options</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($nilai as $nilai) : ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $nilai['id_pegawai']; ?></td>
                    <td><?= $nilai['name']; ?></td>
                    <td><?= $nilai['name_div']; ?></td>
                    <td><?= $nilai['name_jab']; ?></td>
                    <td><?= $nilai['total_nilai_sko']; ?></td>
                    <td><?= $nilai['total_nilai_sk']; ?></td>
                    <td><?= $nilai['hukuman']; ?></td>
                    <td><?= $nilai['nilai_akhir']; ?></td>
                    <td><?= $nilai['predikat']; ?></td>
                    <td>
                      <a href="index.php?page=detail-nilai-pegawai&&idna=<?= $nilai['id_na']; ?>&&id=<?= $nilai['id_user']; ?>&&idpeg=<?= $nilai['id_pegawai']; ?>" class="btn btn-sm btn-primary"><i class="nav-icon fas fa-eye"></i></a>
                      <a href="index.php?page=edit-nilai-cit&&idna=<?= $nilai['id_na']; ?>&&id=<?= $nilai['id_user']; ?>&&idpeg=<?= $nilai['id_pegawai']; ?>" class="btn btn-sm btn-warning"><i class="nav-icon fas fa-edit"></i></a>
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
<?php include '../template/footer.php' ?>
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