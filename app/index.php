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

<body class="hold-transition sidebar-mini layout-fixed" style="font-family: Poppins; font-size: 14.5px;">
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
        $hal = $_GET['page'];

        switch ($hal) {

            // Halaman Dashboard
          case 'dashboard':
            include '../template/dashboard.php';
            break;

            // Halaman ASS. SPV. RTG
            // dataPegawai
          case 'data-pegawai':
            include '../views/data_pegawai.php';
            break;
          case 'edit-data-pegawai':
            include '../views/edit/edit_data_pegawai.php';
            break;
          case 'detail-pegawai':
            include '../views/detail_pegawai.php';
            break;
            // dataJabatan
          case 'data-jabatan':
            include '../views/data_jabatan.php';
            break;
          case 'edit-data-jabatan':
            include '../views/edit/edit_data_jabatan.php';
            break;
            // dataDivisi
          case 'data-divisi':
            include '../views/data_divisi.php';
            break;
          case 'edit-data-divisi':
            include '../views/edit/edit_data_divisi.php';
            break;
            // sasaranKinerjaObjektif
          case 'data-kinerja-objektif':
            include '../views/data_kriteria.php';
            break;
          case 'edit-kriteria':
            include '../views/edit/edit_kriteria.php';
            break;
            // sasaranKompetensi
          case 'data-kompetensi':
            include '../views/data_kompetensi.php';
            break;
            // penilaian
          case 'data-penilaian-rtg':
            include '../views/data_penilaian_rtg.php';
            break;
          case 'input-nilai-rtg':
            include '../views/form/hitung_sko_rtg.php';
            break;
          case 'rekap-nilai':
            include '../views/rekap_nilai.php';
            break;
          case 'detail-nilai-pegawai':
            include '../views/detail_nilai_pegawai.php';
            break;

            // Halaman ASS. SPV. CRO
          case 'data-penilaian-cro':
            include '../views/data_penilaian_cro.php';
            break;
          case 'input-nilai-cro':
            include '../views/form/hitung_sko_cro.php';
            break;

            // Halaman ASS. SPV. CIT
          case 'data-penilaian-cit':
            include '../views/data_penilaian_cit.php';
            break;
          case 'input-nilai-cit':
            include '../views/form/hitung_sko_cit.php';
            break;

            // Halaman ATASAN (Pemimpin Cabang)
          case 'data-penilaian-atasan':
            include '../views/data_penilaian_atasan.php';
            break;
          case 'input-nilai-atasan':
            include '../views/form/hitung_sko_atasan.php';
            break;

            // Halaman PEGAWAI
          case 'rekap-nilai-pegawai':
            include '../views/pegawai/rekap_nilai_pegawai.php';
            break;

          case 'detail-penilaian':
            include '../views/pegawai/detail_penilaian.php';
            break;

          default:
            include "../template/dashboard.php";
            break;
        }
      } else {
        include "../template/dashboard.php";
      }
      ?>

      <!-- /.content -->

    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer" style="font-family: Poppins;">
      <strong>Bringin Gigantara Copyright &copy; 2022 </strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block"><b>Version</b> 1.1.0</div>
    </footer>

</body>

</html>