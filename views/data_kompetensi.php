<?php
include '../config/database.php';

$sk_manajerial = mysqli_query($conn, "SELECT * FROM kriteria_kompetensi WHERE jenis_sk=1");
$sk_pcro = mysqli_query($conn, "SELECT * FROM kriteria_kompetensi WHERE jenis_sk=2");

?>

<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1>Sasaran kompetensi</h1>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title">Sasaran Kompetensi Manajerial</h2>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Kriteria</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($sk_manajerial as $sm) : ?>
                  <tr>
                    <td><?= $sm['kriteria']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title">Sasaran Kompetensi Non Manajerial</h2>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered">
              <thead>
                <tr>
                  <th>Kriteria</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($sk_pcro as $sm) : ?>
                  <tr>
                    <td><?= $sm['kriteria']; ?></td>
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

<?php include '../template/footer.php' ?>