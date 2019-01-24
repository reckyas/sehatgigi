  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Poliklinik</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('resources/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('resources/') ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('resources/') ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('resources/') ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('resources/') ?>dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url('resources/') ?>css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('resources/') ?>plugins/iCheck/all.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('resources/') ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Sweet Alert -->
  <link rel="stylesheet" href="<?php echo base_url('resources/plugins/sweetalert2/dist/sweetalert2.min.css') ?>">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url('resources/') ?>bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url('resources/') ?>plugins/pace/pace.min.css">
  <link rel="stylesheet" href="<?php echo base_url('resources/') ?>plugins/Buttons-1.5.2/css/buttons.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('resources/') ?>plugins/Buttons-1.5.2/css/buttons.dataTables.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="<?php echo base_url('resources/') ?>bower_components/jquery/dist/jquery.min.js"></script>
  <script>
    var csfrData = {};
    csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo
    $this->security->get_csrf_hash(); ?>';
    $.ajaxSetup({
    data: csfrData
    });
  </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('resources/') ?>index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>G</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sehat</b>Gigi</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('resources/') ?>img/profil/<?php echo $this->session->userdata('photo'); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= $this->session->userdata('username'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('resources/') ?>img/profil/<?php echo $this->session->userdata('photo'); ?>" class="img-circle" alt="User Image">

                <p>
                  <?= $this->session->userdata('username'); ?>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('login/logout') ?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>