  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4" style="background-color: #fcb6cb">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link mt-2">
      <img src="img/av2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; width:30px;">
      <span class="brand-text ikon">PERPUSTAKAAN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-2 d-flex">
        <div class="image">
          <img src="img/av1.png" class="img-circle elevation-2" style="height: 35px;" alt="Avatar">
        </div>
        <div class="info">
          <a href="../perpusku/input_admin.php?username=<?php echo $_SESSION['username']?>" class="d-block user">
            <?php
            echo $_SESSION['username'];
            ?>
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline ">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="index.php" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path fill="#fc034e" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
                <p style="color: black; font-weight: 800;">
                    Dashboard
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fa fa-book" style="color: #fc034e;"></i>
                <p style="color: black; font-weight: 800;">
                    Buku
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="input_buku.php" class="nav-link">
                  <i class="fas fa-plus-circle fa-fw nav-icon"></i>
                  <p style="color: #ff7300; font-weight: 600; font-family: cursive;">Tambah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_buku.php" class="nav-link">
                  <i class="fas fa-eye fa-fw nav-icon"></i>
                  <p style="color: #ff7300; font-weight: 600; font-family: cursive;">Lihat</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><path fill="#fc034e" d="M7.8 207.7c-13.1-17.8-9.3-42.8 8.5-55.9L142.9 58.5C166.2 41.3 194.5 32 223.5 32H384 544c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H507.2l-44.9 36c-22.7 18.2-50.9 28-80 28H304 288 224c-17.7 0-32-14.3-32-32s14.3-32 32-32h64 16c8.8 0 16-7.2 16-16s-7.2-16-16-16H183.4L63.7 216.2c-17.8 13.1-42.8 9.3-55.9-8.5zM382.4 160l0 0 .9 0c-.3 0-.6 0-.9 0zM568.2 304.3c13.1 17.8 9.3 42.8-8.5 55.9L433.1 453.5c-23.4 17.2-51.6 26.5-80.7 26.5H192 32c-17.7 0-32-14.3-32-32V384c0-17.7 14.3-32 32-32H68.8l44.9-36c22.7-18.2 50.9-28 80-28H272h16 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H288 272c-8.8 0-16 7.2-16 16s7.2 16 16 16H392.6l119.7-88.2c17.8-13.1 42.8-9.3 55.9 8.5zM193.6 352l0 0-.9 0c.3 0 .6 0 .9 0z"/></svg>
              <p style="color: black; font-weight: 800;">
                Peminjaman
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="input_peminjaman.php" class="nav-link">
                  <i class="fas fa-plus-circle fa-fw nav-icon"></i>
                  <p style="color: #da085f; font-weight: 600; font-family: cursive;">Pinjam Buku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_peminjaman.php" class="nav-link">
                  <i class="fas fa-eye fa-fw nav-icon"></i>
                  <p style="color: #da085f; font-weight: 600; font-family: cursive;">Lihat Pinjam</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
            <i class="fa fa-users" style="color: #fc034e;"></i>
              <p style="color: black; font-weight: 800;">
                Customer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="input_cus.php" class="nav-link">
                  <i class="fas fa-plus-circle fa-fw nav-icon"></i>
                  <p style="color: #009dff; font-weight: 600; font-family: cursive;">Tambah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_cus.php" class="nav-link">
                  <i class="fas fa-eye fa-fw nav-icon"></i>
                  <p style="color: #009dff; font-weight: 600; font-family: cursive;">Lihat</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
            <i class="fa fa-user-tie" style="color: #fc034e;"></i>
              <p style="color: black; font-weight: 800;">
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="input_admin.php" class="nav-link">
                  <i class="fas fa-plus-circle fa-fw nav-icon"></i>
                  <p style="color: #7700ff; font-weight: 600; font-family: cursive;">Tambah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_admin.php" class="nav-link">
                  <i class="fas fa-eye fa-fw nav-icon"></i>
                  <p style="color: #7700ff; font-weight: 600; font-family: cursive;">Lihat</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>