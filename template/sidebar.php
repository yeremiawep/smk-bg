<div class="sidebar" style="font-family: Poppins; font-size: 14px;">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-2 pb-4 mb-3 d-block">
    <div class="image">
      <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" /> -->
    </div>
    <div class="row justify-content-center text-white">
      <?= $_SESSION['user'] . '<br>' .  $_SESSION['name_jab']; ?>
    </div>
  </div>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" Arial-label="Search" />
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <?php

  if ($_SESSION['jabatan'] == '5') {
    include 'menu/menu_rtg.php';
  } else if ($_SESSION['jabatan'] == '1') {
    include 'menu/menu_pinca.php';
  } else if ($_SESSION['jabatan'] == '3') {
    include 'menu/menu_spv_cro.php';
  } else if ($_SESSION['jabatan'] == '4') {
    include 'menu/menu_spv_cit.php';
  } else {
    include 'menu/menu_pegawai.php';
  }
  ?>
  <!-- /.sidebar-menu -->
</div>