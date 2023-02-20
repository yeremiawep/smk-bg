<nav class="mt-2" style="font-family: Poppins; font-size: 14px;">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="index.php?page=dashboard" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="index.php?page=data-pegawai" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>
          Data Pegawai
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="index.php?page=data-jabatan" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Data Jabatan
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="index.php?page=data-divisi" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Data Divisi
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-chart-bar"></i>
        <p>
          Penilaian
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="index.php?page=detail-penilaian" class="nav-link">
            <i class="nav-icon fas fa-eye"></i>
            <p>
              Detail Nilai Saya
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?page=data-penilaian-rtg" class="nav-link">
            <i class="nav-icon fas fa-calculator"></i>
            <p>
              Input Penilaian
            </p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tasks"></i>
        <p>
          Sasaran Kinerja
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="index.php?page=data-kinerja-objektif" class="nav-link">
            <i class="far fa-copy nav-icon"></i>
            <p>Sasaran Kinerja Objektif</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?page=data-kompetensi" class="nav-link">
            <i class="far fa-copy nav-icon"></i>
            <p>Sasaran Kompetensi</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="index.php?page=rekap-nilai" class="nav-link">
        <i class="fas fa-database nav-icon"></i>
        <p>Rekap Nilai</p>
      </a>
    </li>
    <!-- <li class="nav-item">
      <a href="index.php?page=data-periode" class="nav-link">
        <i class="nav-icon fas fa-calendar"></i>
        <p>
          Periode
        </p>
      </a>
    </li> -->
    <hr>
    <li class="nav-item">
      <a href="../config/logout.php" class="nav-link text-red">
        <i class="nav-icon fas fa-power-off"></i>
        <p>
          Logout
        </p>
      </a>
    </li>
  </ul>
</nav>