<?php 
include_once("cek_user.php");
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard | SPK Nani </title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    @media print {
      .btn-primary{
        display: none;
      }
      .analisa{
        padding-top: 150px;
      }

    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center" style="width: 600px;">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span class="d-none d-lg-block">SPK Pemilihan Guru Terbaik</span>
      </a>
      <!-- <i class="bi bi-list toggle-sidebar-btn"></i> -->
    </div>


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/background.png" alt="Profile">
            <span class="d-none d-md-block dropdown-toggle ps-2">
            <?php 
              if(isset($_SESSION['username'])){
                echo $_SESSION['username'];
              }else{
                exit();
              }

            ?>
            </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $_SESSION['username']; ?></h6>
              <!-- <span><?= $_SESSION['username']; ?></span> -->
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav>
    <!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <div class="search-bar mb-3">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
              <input type="text" name="query" placeholder="Search" title="Enter search keyword">
              <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
          </div><!-- End Search Bar -->
          <hr>
          
      <li class="nav-item mb-3">
        <a class="nav-link <?php if($page == 'Dashboard'){
          echo '';
        }else{
          echo 'collapsed';
        }
         ?>" href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <hr>
      <li class="nav-item mb-3">
        <a class="nav-link <?php if($page == 'Data Guru'){
          echo '';
        }else{
          echo 'collapsed';
        }
         ?>" href="data_guru.php">
          <i class="bi bi-calendar"></i>
          <span>Data Guru</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <hr>
      <li class="nav-item mb-3">
        <a class="nav-link <?php if($page == 'Data Kriteria'){
          echo '';
        }else{
          echo 'collapsed';
        }
         ?>" href="data_kriteria.php">
          <i class="bi bi-list"></i>
          <span>Data Kriteria</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <hr>
      <li class="nav-item mb-3">
        <a class="nav-link <?php if($page == 'Sub Kriteria'){
          echo '';
        }else{
          echo 'collapsed';
        }
         ?>" href="data_sub_kriteria.php">
          <i class="bi bi-body-text"></i>
          <span>Data Sub Kriteria</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <hr>
      <li class="nav-item mb-3">
        <a class="nav-link <?php if($page == 'Nilai Guru'){
          echo '';
        }else{
          echo 'collapsed';
        }
         ?>" href="nilai_guru.php">
          <i class="bi bi-pencil-square"></i>
          <span>Input Nilai Guru</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <hr>
      <li class="nav-item mb-3">
        <a class="nav-link <?php if($page == 'Hasil Analisa'){
          echo '';
        }else{
          echo 'collapsed';
        }
         ?>" href="hasil.php">
          <i class="bi bi-pie-chart-fill"></i>
          <span>Hasil Analisa</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <hr>
      <li class="nav-item mb-3">
        <a class="nav-link <?php if($page == 'Laporan'){
          echo '';
        }else{
          echo 'collapsed';
        }
         ?>" href="laporan.php" target="_blank">
          <i class="bi bi-journal-medical"></i>
          <span>Laporan</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <hr>
      <li class="nav-item mb-3">
        <a class="nav-link <?php if($page == 'User'){
          echo '';
        }else{
          echo 'collapsed';
        }
         ?>" href="user.php">
          <i class="bi bi-gear-fill"></i>
          <span>Manajemen User</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <hr>
    </ul>


  </aside><!-- End Sidebar-->