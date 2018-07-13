 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()."assets/" ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
       <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="<?php echo base_url('admin/masuk_admin') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        
             
          </a>
         
        </li>
        <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?php echo base_url('admin/daftar_pasien') ?>">
            <i class="fa fa-user-plus"></i> <span>Pendaftaran</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Rekam Medis</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('pasien/d_pasien'); ?>"><i class="fa fa-circle-o"></i> Riwayat Rekam Medis</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cube"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('master/m_dokter'); ?>"><i class="fa fa-circle-o"></i>Dokter</a></li>
            <li><a href="<?php echo base_url('master/m_spesialis'); ?>"><i class="fa fa-circle-o"></i>Spesialis</a></li>
            <li><a href="<?php echo base_url('master/d_poli'); ?>"><i class="fa fa-circle-o"></i>Poli</a></li>
           
            
          </ul>
        </li>
        <li>
        <li >
          <a href="<?php echo base_url('pegawaii/d_pegawai'); ?>">
            <i class="fa fa-users"></i> <span>Data Pegawai</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url('pembayaran/d_pembayaran'); ?>">
            <i class="fa fa-users"></i> <span>Pembayaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>



        

        
         
         <li class="sidebar-menu">
        <a href="<?php echo base_url('admin/data_admin') ?>">
          <i class="fa fa-users"></i> <span>User</span>
          <span class="pull-right-container">
           
          </span>
        </a>
        </li>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
