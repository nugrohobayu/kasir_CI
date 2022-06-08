
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar"  style="background-color: #EDE7F6;" > 

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar kasir panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $this->user_photo;?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->username;?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
       <!-- <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div> -->
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->

      <?php
        if ($this->username == "admin") {
          echo '
            <ul class="sidebar-menu">

            <li class="' . is_menu("home","dashboard") . '"><a href="' . site_url() . '"><i class="fa fa-home" aria-hidden="true"></i> <span>Beranda</span></a></li>
              <li class="treeview ' . is_menu('pelanggan') . '">
                <a href="#"><i class="fa fa-user"></i> <span>Pelanggan</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li class="' . is_menu('pelanggan') . '"><a href="' . site_url('pelanggan') . '"><i class="fa fa-kasir" aria-hidden="true"></i> <span>List</span></a></li>
                  <li class="' . is_menu('pelanggan','create') . '"><a href="' . site_url('pelanggan/create') . '"><i class="fa fa-plus-square-o" aria-hidden="true"></i> <span>Tambah</span></a></li>
                </ul>
              </li>
              
              
              <li class="treeview ' . is_menu('kategori') . '">
                <a href="#"><i class="fa fa-list"></i> <span>Kategori Menu</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li class="' . is_menu('kategori') . '"><a href="' . site_url('kategori') . '"><i class="fa fa-th-large" aria-hidden="true"></i> <span>List</span></a></li>
                  <li class="' . is_menu('kategori','create') . '"><a href="' . site_url('kategori/create') . '"><i class="fa fa-plus-square-o" aria-hidden="true"></i> <span>Tambah</span></a></li>
                </ul>
              </li>
              <li class="treeview ' . is_menu('produk') . '">
                <a href="#"><i class="fa fa-th"></i> <span>Menu</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li class="' . is_menu('produk') . '"><a href="' . site_url('produk') . '"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>List</span></a></li>
                  <li class="' . is_menu('produk','create') . '"><a href="' . site_url('produk/create') . '"><i class="fa fa-plus-square-o" aria-hidden="true"></i> <span>Tambah</span></a></li>
                </ul>
              </li>
             
              <li class="' . is_menu('penjualan'.'create') . '"><a href="' . site_url('penjualan/create') . '"><i class="fa fa-money" aria-hidden="true"></i> <span>Transaksi penjualan</span></a></li>

              <li class="' . is_menu('penjualan') . '"><a href="' . site_url('penjualan') . '"><i class="fa fa-calendar" aria-hidden="true"></i> <span>Laporan penjualan</span></a></li>
              
              <li> <a href=" ' . site_url('auth/logout') . ' " > <i class="fa fa-sign-out"></i> <span>Keluar </span> </a> </li>      
            </ul>
          ';
        } elseif ($this->username == "kasir") {
          echo '
            <ul class="sidebar-menu">
              <li class="' . is_menu("home","dashboard") . '"><a href="' . site_url() . '"><i class="fa fa-dashboard" aria-hidden="true"></i> <span>Dashboard</span></a></li>
              <li class="treeview ' . is_menu('pelanggan') . '">
                <a href="#"><i class="fa fa-user"></i> <span>Pelanggan</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li class="' . is_menu('pelanggan') . '"><a href="' . site_url('pelanggan') . '"><i class="fa fa-kasir" aria-hidden="true"></i> <span>List</span></a></li>
                  <li class="' . is_menu('pelanggan','create') . '"><a href="' . site_url('pelanggan/create') . '"><i class="fa fa-plus-square-o" aria-hidden="true"></i> <span>Tambah</span></a></li>
                </ul>
              </li>
              <li class="' . is_menu('penjualan'.'create') . '"><a href="' . site_url('penjualan/create') . '"><i class="fa fa-money" aria-hidden="true"></i> <span>Transaksi penjualan</span></a></li>

              <li class="' . is_menu('penjualan') . '"><a href="' . site_url('penjualan') . '"><i class="fa fa-calendar" aria-hidden="true"></i> <span>Laporan penjualan</span></a></li>
              
              <li> <a href=" ' . site_url('auth/logout') . ' " > <i class="fa fa-sign-out"></i> <span>Keluar </span> </a> </li>      
            </ul>
          ';
        }
      ?>

      
      <br />
      <br />
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
