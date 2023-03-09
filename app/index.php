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

<body class="hold-transition sidebar-mini layout-fixed" style="font-family: Nunito; font-size: 14.5px;">
  <div class="wrapper">
    <!-- Preloader -->
    <?php include "../template/preloader.php"; ?>

    <!-- Navbar -->
    <?php include "../template/navbar.php"; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-5">

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
          case 'tambah-kriteria':
            include '../views/form/input_kriteria.php';
            break;
            // sasaranKompetensi
          case 'data-kompetensi':
            include '../views/data_kompetensi.php';
            break;
            // periode
          case 'data-periode':
            include '../views/periode/tampil_periode.php';
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
          case 'rekap-nilai-rtg':
            include '../views/rekap_nilai_rtg.php';
            break;
          case 'edit-nilai-rtg':
            include '../views/edit/edit_nilai_rtg.php';
            break;

            // Halaman ASS. SPV. CRO
          case 'data-penilaian-cro':
            include '../views/data_penilaian_cro.php';
            break;
          case 'input-nilai-cro':
            include '../views/form/hitung_sko_cro.php';
            break;
          case 'rekap-nilai-cro':
            include '../views/rekap_nilai_cro.php';
            break;
          case 'edit-nilai-cro':
            include '../views/edit/edit_nilai_cro.php';
            break;

            // Halaman ASS. SPV. CIT
          case 'data-penilaian-cit':
            include '../views/data_penilaian_cit.php';
            break;
          case 'input-nilai-cit':
            include '../views/form/hitung_sko_cit.php';
            break;
          case 'rekap-nilai-cit':
            include '../views/rekap_nilai_cit.php';
            break;
          case 'edit-nilai-cit':
            include '../views/edit/edit_nilai_cit.php';
            break;

            // Halaman ATASAN (Pemimpin Cabang)
          case 'data-penilaian-atasan':
            include '../views/data_penilaian_atasan.php';
            break;
          case 'input-nilai-atasan':
            include '../views/form/hitung_sko_atasan.php';
            break;
          case 'rekap-nilai-atasan':
            include '../views/rekap_nilai_atasan.php';
            break;
          case 'edit-nilai-atasan':
            include '../views/edit/edit_nilai_atasan.php';
            break;
          case 'tambah-pemberitahuan':
            include '../views/tambah_pemberitahuan.php';
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
    <footer class="main-footer" style="font-family: Inter;">
      <strong>Copyright &copy; 2023 </strong>
      PT. Bringin Gigantara cabang Cempaka Putih .
      <div class="float-right d-none d-sm-inline-block"><b>Version</b> 1.1.0</div>
    </footer>
  </div>
</body>

</html>