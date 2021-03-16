<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>kwitansi</title>

  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
 
  <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    <!--   <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <!-- <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a> -->
        <div class="navbar-search-block">
         <!--  <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form> -->
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge" id="jml_inbox"></span>
        </a>
        <div id="inbox" class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
         
        </div>
      </li> -->
      <!-- Notifications Dropdown Menu -->



      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-bell"></i>
          <span class="badge badge-warning navbar-badge">0</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->



        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-sign-out-alt"></i>
          <!-- <span class="badge badge-warning navbar-badge">15</span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Logout</span>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url() ?>login/logout" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Logout
            <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
          </a>
          <div class="dropdown-divider"></div>
        
          <div class="dropdown-divider"></div>
          <!-- <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> -->
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
      <!--   <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a> -->
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?= base_url() ?>assets/logo/ebunga.png" alt="ebunga" class=" img-circle" style=" height: 60px;">

       <span>kwitansi</span><span class="brand-text font-weight-light" style="font-weight: bold;">  ebunga</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/logo/user2.png" class="img-circle" alt="User Image" style="height: 32px;">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('username'); ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="<?= base_url() ?>Dashboard/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                
                Dashboard
               
              </p>
            </a>
          </li>

         
          
            
        
       <!--    <li class="nav-header">EXAMPLES</li> -->
          <li class="nav-item">
            <a href="<?= base_url() ?>kwitansi/" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Cetak Kwitansi
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>


        <?php if ($this->session->userdata('rule') == 'Admin') {?>


          <style type="text/css">
            #opra{
              display: none;
            }
          </style>

          <li class="nav-item">
            <a href="<?= base_url() ?>kwitansi/data_kwitansi" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Data Kwitansi Anda
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

        <?php } else { ?>


          <li class="nav-item">
            <a href="<?= base_url() ?>kwitansi/data_kwitansi" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Data Kwitansi Anda
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url() ?>kwitansi/all_kwitansi" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                All kwitansi
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

        <?php } ?>

           <li id="opra" class="nav-item">
            <a href="<?= base_url() ?>operator/data_operator" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                
                Operator
               
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="<?= base_url() ?>galery/galery" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>video/video" class="nav-link">
              <i class="nav-icon fas fa-video"></i>
              <p>
                Video Review
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url() ?>Testimonials/testimonial" class="nav-link">
              <i class="nav-icon fas fa-microphone"></i>
              <p>
                Testimonial
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?= base_url() ?>message/message" class="nav-link">
              <i class="nav-icon fas fa-envelope-square"></i>
              <p>
                Message
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-atlas"></i>
              <p>
                Visitor
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>visitor/data_visitor" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Visitor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>visitor/pengunjunghariini" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visitor hari ini</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>visitor/data_online" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visitor Online</p>
                </a>
              </li>
            </ul>
          </li> -->
         
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

  <script>
   $(document).ready(function(){
    setInterval(function(){            

          jml_inbox()
         message();
    },6000 );
})
  
  </script>


  <script>
    function message(){

    $.get("<?= base_url() ?>message/get_message", function(data, success){
    $("#inbox").html(data);
  });
    }

    function jml_inbox(){

    $.get("<?= base_url() ?>message/get_row", function(data, success){
    $("#jml_inbox").html(data);
  });
    }

  </script>
