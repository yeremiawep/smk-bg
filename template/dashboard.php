<?php
include '../config/database.php';

$query = mysqli_query($conn, "SELECT count(id_user) AS jml FROM users");
$query2 = mysqli_query($conn, "SELECT count(id) AS jml FROM divisions");
$query3 = mysqli_query($conn, "SELECT count(id) AS jml FROM jabatans");
$view = mysqli_fetch_array($query);
$view2 = mysqli_fetch_array($query2);
$view3 = mysqli_fetch_array($query3);
?>

<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?= $view['jml']; ?></h3>
            <p>Pegawai</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $view2['jml']; ?></h3>
            <p>Divisi</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?= $view3['jml']; ?></h3>
            <p>Jabatan</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- <div class="row">
      <div class="col-lg-3 col-3">
        <div class="small-box bg-white">
          <div class="inner">
            <h4>Bobot Sasaran Kinerja Objektif</h4>
            <p>Asisten Supervisor = 70%</p>
            <p>Pelaksana = 60%</p>
          </div>
          <div class="icon">
            <i class="ion ion-checkmark-round"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-3">
        <div class="small-box bg-white">
          <div class="inner">
            <h4>Bobot Sasaran Kompetensi</h4>
            <p>Asisten Supervisor = 30%</p>
            <p>Pelaksana = 40%</p>
          </div>
          <div class="icon">
            <i class="ion ion-checkmark-round"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-3">
        <div class="small-box bg-danger">
          <div class="inner">
            <h4>Pelanggaran Disiplin</h4>
            <p>SP-1 = 0.25 |
              SP-2 = 0.35 |
              SP-3 = 0.50</p>
            <p>Sistem dan Prosedur = 1.00</p>
            <p>Pelanggaran Fundamental = 1.50</p>
          </div>
          <div class="icon">
            <i class="ion ion-alert"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-6">
        <div class="small-box bg-primary">
          <div class="inner">
            <h3>Total Nilai</h3>
            <p>Sasaran Kinerja Objektif + Sasaran Kompetensi - Pelanggaran Disiplin </p>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-7 connectedSortable">
      </section>
      <section class="col-lg-5 connectedSortable">
    </div>
</section>
</div>
</div>
</section>

<?php include '../template/footer.php' ?>