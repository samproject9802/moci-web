<?php
session_start();

if (!isset($_SESSION['status'])) {
  header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/favicon.png" type="image/png">
  <title>Moci Website</title>

  <!-- Sweet Alert JS -->
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
  <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Bootstrap 5 Themes -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Custom style -->
  <link rel="stylesheet" href="dist/css/navbar.css">
  <!-- jsGrid -->
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid-theme.min.css">
  <!-- AJAX Jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <!-- Accounting JS -->
  <script src="dist/js/accounting.js"></script>
  <!-- JS Jquery -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <!-- JS Formatter -->
  <script src="plugins/jformatter/simple.money.format.js"></script>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="dist/css/body-kasir.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>


</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <?php include_once 'tools/user/navbar.php'; ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text" style="font-weight: bolder; color: #005380">Moci Website</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 mb-3 d-flex">
          <div class="image mt-3">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">
              <h5 style="font-weight: bolder; color: #005380">
                <?php
                echo $_SESSION['nama'];
                ?>
              </h5>
            </a>
            <p class="d-block" style="color: #005380;"><?php echo $_SESSION['level']; ?></p>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <?php include_once 'tools/user/sidebar.php'; ?>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page == "kasir") {
          include_once 'pages/user/cashier/breadcrumbcashier.php';
        } elseif ($page == "myprofile") {
          if (isset($_GET['tab'])) {
            $tab = $_GET['tab'];
            if ($tab == "profile") {
              include_once 'pages/user/myprofile/breadcrumbprofile.php';
            } elseif ($tab == "help") {
              include_once 'pages/user/myprofile/breadcrumbhelp.php';
            }
          }
        } elseif ($page == "inventory") {
          if (isset($_GET['tab'])) {
            $tab = $_GET['tab'];
            if ($tab == "productlist") {
              include_once 'pages/user/inventory/breadcrumbproductlist.php';
            } elseif ($tab == "help") {
              include_once 'pages/user/inventory/breadcrumbhelp.php';
            }
          }
        } elseif ($page == "cash-flow") {
          if (isset($_GET['tab'])) {
            $tab = $_GET['tab'];
            if ($tab == "cashin") {
              include_once 'pages/user/cashflow/breadcrumbcashin.php';
            } elseif ($tab == "help") {
              include_once 'pages/user/cashflow/breadcrumbhelp.php';
            }
          }
        }
      } else {
        include_once 'pages/user/cashier/breadcrumbcashier.php';
      }
      ?>

      <!-- Main content -->
      <?php
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page == "kasir") {
          include_once 'pages/user/cashier/cashier.php';
        } elseif ($page == "myprofile") {
          if (isset($_GET['tab'])) {
            $tab = $_GET['tab'];
            if ($tab == "profile") {
              include_once 'pages/user/myprofile/profile.php';
            } elseif ($tab == "help") {
              include_once 'pages/user/myprofile/cashier.php';
            }
          }
        } elseif ($page == "inventory") {
          if (isset($_GET['tab'])) {
            $tab = $_GET['tab'];
            if ($tab == "productlist") {
              include_once 'pages/user/inventory/productlist.php';
            } elseif ($tab == "help") {
              include_once 'pages/user/inventory/cashier.php';
            }
          }
        } elseif ($page == "cash-flow") {
          if (isset($_GET['tab'])) {
            $tab = $_GET['tab'];
            if ($tab == "cashin") {
              include_once 'pages/user/cashflow/cashin.php';
            } elseif ($tab == "help") {
              include_once 'pages/user/cashflow/cashin.php';
            }
          }
        }
      } else {
        include_once 'pages/user/cashier/cashier.php';
      }
      ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer" align="center">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jsGrid -->
  <script src="plugins/jsgrid/demos/db.js"></script>
  <script src="plugins/jsgrid/jsgrid.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script src="dist/js/script.js"></script>
  <script src="dist/js/cashincashout.js"></script>
</body>

</html>