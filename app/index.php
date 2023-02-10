<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!$_SESSION['jabatan']) {
  header('Location:../');
}
include "../template/header.php";
?>

<?php
include '../config/database.php'
?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <?php include "../template/preloader.php"; ?>

    <!-- Navbar -->
    <?php include "../template/navbar.php"; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <!-- Brand Logo -->
      <?php include "../template/logo.php"; ?>

      <!-- Sidebar -->
      <?php include "../template/sidebar.php"; ?>
      <!-- /.sidebar -->

    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <?php include "../template/content_header.php"; ?>
      <!-- /.content-header -->

      <!-- Main content -->
      <?php
      if (isset($_GET['page'])) {
        if ($_GET['page'] == 'dashboard') {
          include "../template/dashboard.php";
        } else if ($_GET['page'] == 'data-pegawai') {
          include "../views/data_pegawai.php";
        } else if ($_GET['page'] == 'data-penilaian-cro') {
          include "../views/data_penilaian_cro.php";
        } else if ($_GET['page'] == 'data-penilaian-cit') {
          include "../views/data_penilaian_cit.php";
        } else if ($_GET['page'] == 'data-penilaian-rtg') {
          include "../views/data_penilaian_rtg.php";
        } else if ($_GET['page'] == 'data-penilaian-atasan') {
          include "../views/data_penilaian_atasan.php";
        } else if ($_GET['page'] == 'edit-data-pegawai') {
          include "../views/edit/edit_data_pegawai.php";
        } else if ($_GET['page'] == 'data-jabatan') {
          include "../views/data_jabatan.php";
        } else if ($_GET['page'] == 'edit-data-jabatan') {
          include "../views/edit/edit_data_jabatan.php";
        } else if ($_GET['page'] == 'data-divisi') {
          include "../views/data_divisi.php";
        } else if ($_GET['page'] == 'edit-data-divisi') {
          include "../views/edit/edit_data_divisi.php";
        } else if ($_GET['page'] == 'detail-pegawai') {
          include "../views/detail_pegawai.php";
        } else if ($_GET['page'] == 'data-kinerja-objektif') {
          include "../views/data_kriteria.php";
        } else if ($_GET['page'] == 'data-kompetensi') {
          include "../views/data_kompetensi.php";
        } else if ($_GET['page'] == 'edit-kriteria') {
          include "../views/edit/edit_kriteria.php";
        } else if ($_GET['page'] == 'input-nilai') {
          include "../views/hitung/hitung_sko_rtg.php";
        } else if ($_GET['page'] == 'isi-nilai') {
          include "../views/hitung/input/input_nilai.php";
        } else if ($_GET['page'] == 'rekap-nilai') {
          include "../views/rekap_nilai.php";
        } else {
          include "../template/dashboard.php";
        }
      }
      ?>
      <!-- /.content -->

    </div>

    <!-- /.content-wrapper -->
    <?php include "../template/footer.php"; ?>
</body>

</html>