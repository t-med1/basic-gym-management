<?php
session_start();
if (!isset($_SESSION['codeAd'])) {
  header('Location:pages-login.php');
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/img/G.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
</head>

<body>
  <?php
  //require("db.php");
  //$stm = $db->prepare("SELECT nameAd FROM admins");
  //$stm->execute();
  //$nom = $stm->fetch(PDO::FETCH_OBJ);
  //?>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: rgb(96, 96, 96);">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="d-flex align-items-center">
        <img src="./assets/img/logoFor.png" alt="" width="230" height="230">
      </a>
      <em class="bi bi-list toggle-sidebar-btn"></em>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><em class="bi bi-search"></em></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <em class="bi bi-search"></em>
          </a>
        </li><!-- End Search Icon-->
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="users-profile.php"
            data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php if (isset($_SESSION['name']))echo $_SESSION['name'];?></span>
          </a><!-- End Profile Image Icon -->

        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <em class="bi bi-grid"></em>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <em class="bi bi-layout-text-window-reverse"></em><span>Tables</span><em class="bi bi-chevron-down ms-auto"></em>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.php">
              <em class="bi bi-circle"></em><span>Other Data Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.php">
              <em class="bi bi-circle"></em><span>Members Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <em class="bi bi-person"></em>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <em class="bi bi-envelope"></em>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.php">
          <em class="bi bi-card-list"></em>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="../index.php">
          <span>Log Out</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-box-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
            <path fill-rule="evenodd"
              d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
          </svg>
        </a>
      </li><!-- END log out  -->

    </ul>

  </aside><!-- End Sidebar-->


  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Contact</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Home</a>
          </li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </nav>
    </div>
    <section class="section contact">
      <div class="row gy-4">
        <div class="col-xl-6">
          <div class="row">
            <div class="col-lg-6">
              <div class="info-box card"> <em class="bi bi-geo-alt"></em>
                <h3>Address</h3>
                <p>Morocco <br>Ain Chqef 30 000</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card">
                <em class="bi bi-telephone"></em>
                <h3>Call Us</h3>
                <p>+(212) <?php if(isset($_SESSION['phone']))echo $_SESSION['phone'];?><br>+(212) 7 38 45 23 79</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card"> <em class="bi bi-envelope"></em>
                <h3>Email Us</h3>
                <p><?php if (isset($_SESSION['mailAd']))echo $_SESSION['mailAd'];?></p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="info-box card"> <em class="bi bi-clock"></em>
                <h3>Open Hours</h3>
                <p>Monday - Saturday<br>8:00AM - 05:00PM</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="card p-4">
            <form action="" method="post" class="php-email-form">
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 "> <input type="email" class="form-control" name="email" placeholder="Your Email"
                    required></div>
                <div class="col-md-12"> <input type="email" class="form-control" name="to" placeholder="TO" required>
                </div>
                <div class="col-md-12"><textarea class="form-control" name="message" rows="6" placeholder="Message"
                    required></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <button type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>