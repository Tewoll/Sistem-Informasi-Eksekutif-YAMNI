<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-info">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link text-black navbar-light">
    <img src="dist/img/sie.png" alt="SIE YAMNI Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><b>SIE YAMNI</b></span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar os-host os-host-resize-disabled os-host-transition os-theme-dark os-host-overflow os-host-overflow-y os-host-scrollbar-horizontal-hidden">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-collapse-hide-child nav-legacy text-sm" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <hr>
        <li class="nav-item">
          <a href="index.php?page=home" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <?php 
        if ($level == 'admin') {
        ?>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Master Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="#" class="nav-link">
                &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-user-graduate nav-icon"></i>
                <p>
                  Data Siswa
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="index.php?page=siswa_mi" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check-square nav-icon"></i>
                    <p>MI</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="index.php?page=siswa_mts" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check-square nav-icon"></i>
                    <p>MTs</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="index.php?page=siswa_ma" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check-square nav-icon"></i>
                    <p>MA</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="#" class="nav-link">
                &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-chalkboard-teacher nav-icon"></i>
                <p>
                  Data Guru
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="index.php?page=guru_mi" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check-square nav-icon"></i>
                    <p>MI</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="index.php?page=guru_mts" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check-square nav-icon"></i>
                    <p>MTs</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="index.php?page=guru_ma" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check-square nav-icon"></i>
                    <p>MA</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="#" class="nav-link">
                &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-school nav-icon"></i>
                <p>
                  Data Sarana & Prasarana
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="index.php?page=jenis_sarana" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check-square nav-icon"></i>
                    <p>Jenis Sarana</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="index.php?page=sarana" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check-square nav-icon"></i>
                    <p>Sarana</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="index.php?page=jenis_prasarana" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check-square nav-icon"></i>
                    <p>Jenis Prasarana</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="index.php?page=prasarana" class="nav-link">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-check-square nav-icon"></i>
                    <p>Prasarana</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <br>
        <?php  }else{ } ?>
        <!-- Grafik -->
        <li class="nav-item">
          <a href="index.php?page=grafik_siswa" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Grafik Siswa
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?page=grafik_guru" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Grafik Guru
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?page=grafik_sapras" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Grafik Sarana dan Prasarana
            </p>
          </a>
        </li>
        <!-- Grafik -->
        <hr>  
        <li class="nav-item">
          <a href="index.php?page=pengaturan" class="nav-link">
            <i class=" nav-icon fa fa-cog fa-spin fa-3x fa-fw"></i>
            <p>
              Pengaturan
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>