<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('resources/') ?>img/profil/<?php echo $this->session->userdata('photo'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $this->session->userdata('username'); ?></p>
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
      <ul class="sidebar-menu" data-widget="tree" id="menu-side">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?= base_url('app/antrian') ?>" data-title="Antrian" data-path="<?= base_url('app#antrian') ?>" linked="true">
            <i class="fa fa-th"></i> Antrian
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Pasien</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url('pasien/index') ?>" data-title="Pasien" data-path="<?= base_url('app#pasien') ?>" linked="true"><i class="fa fa-circle-o" ></i>Data pasien</a></li>
          </ul>
        </li>
        <?php if ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 3): ?>
          <li>
            <a href="<?= base_url('dokter/index') ?>" data-title="Dokter" data-path="<?= base_url('app#dokter') ?>" linked="true">
              <i class="fa fa-user"></i> Dokter
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Gigi</span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?= base_url('gigi/index') ?>" data-title="Gigi" data-path="<?= base_url('app#gigi') ?>" linked="true"><i class="fa fa-circle-o"></i>Kondisi gigi</a></li>
            </ul>
          </li>
          <?php if ($this->session->userdata('level')==1): ?>
            <li>
              <a href="<?= base_url('user/index') ?>" data-title="Pengguna" data-path="<?= base_url('app#user') ?>" linked="true">
                <i class="fa fa-user"></i> Pengguna
              </a>
            </li>
          <?php endif ?>
        <?php endif ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper" id="main">