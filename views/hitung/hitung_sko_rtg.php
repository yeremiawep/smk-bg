<?php

// $id = $_GET['id'];

$query = mysqli_query($conn,"SELECT * FROM hitung_nilai");

?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h3>Sasaran Kinerja Objektif</h3>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Sasaran Kinerja Objektif</h4><br>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Id Nilai</th>
                  <th>Id User</th>
                  <th>Divisi</th>
                  <th>Jabatan</th>
                  <th>ID Isi SKO</th>
                  <th>Nilai SKO</th>
                  <th>Periode</th>
                  <th>Options</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($query as $q) : ?>
                <tr>
                  <td><?= $q['id_nilai']; ?></td>
                  <td><?= $q['id_user']; ?></td>
                  <td><?= $q['divisi']; ?></td>
                  <td><?= $q['jabatan']; ?></td>
                  <td><?= $q['id_isi_sko']; ?></td>
                  <td><?= $q['nilai_sko']; ?></td>
                  <td><?= $q['periode']; ?></td>
                  <td>
                    <a href="index.php?page=isi-nilai&&id=<?= $q['id_user']; ?>" class="btn btn-sm btn-success">Isi Nilai</a>
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

