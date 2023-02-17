<?php

include '../config/database.php';

$id = $_SESSION['id_user'];
$jab = $_SESSION['name_jab'];
$jab = $_SESSION['name_div'];
$nilai = mysqli_query($conn, "SELECT * FROM nilai_akhir JOIN users ON nilai_akhir.id_user=users.id_user WHERE nilai_akhir.id_user='$id'");

?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Detail Nilai</div>
          </div>
          <div class="card-body">
            <h3>Detail Nilai</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>