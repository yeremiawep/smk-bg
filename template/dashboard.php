<?php
include '../config/database.php';

$query = mysqli_query($conn, "SELECT count(id_user) AS jml FROM users");
$query2 = mysqli_query($conn, "SELECT count(id) AS jml FROM divisions");
$query3 = mysqli_query($conn, "SELECT count(id) AS jml FROM jabatans");
$view = mysqli_fetch_array($query);
$view2 = mysqli_fetch_array($query2);
$view3 = mysqli_fetch_array($query3);
?>

<section class="content" style="font-family: Poppins;">
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