<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" /> -->
    </div>
    <div class="info">
      <a href="#" class="justify-content-center">
        <?= $_SESSION['user'] . '<hr>' . $_SESSION['name_jab']; ?>
      </a>
    </div>
  </div>

  <!-- SidebarSearch Form -->
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
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
  }
  ?>
  <!-- /.sidebar-menu -->
</div>