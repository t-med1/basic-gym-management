<?php
    session_start();
    if (!isset($_SESSION['codeAd'])){
        header('Location:pages-login.php');
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / General </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/img/G.png" rel="icon">

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
    require_once("db.php");
    $stm = $db->prepare("SELECT nameAd FROM admins");
    $stm->execute();
    $nom = $stm->fetch(PDO::FETCH_OBJ);
  ?>
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

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="users-profile.php" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php if (isset($_SESSION['name']))echo $_SESSION['name'];?></span>
          </a><!-- End Profile Iamge Icon -->
        </li><!-- End profile nav -->
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
            <a href="#">
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
        <a class="nav-link collapsed" href="pages-contact.php">
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
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Images Table</h5>

              <!-- Image Table -->
              <table class="table">
                <caption>Table image</caption>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name Images</th>
                    <th scope="col">Data Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $stm = $db->prepare("SELECT * FROM images");
                  $stm->execute([]);
                  $flag = $stm->fetchAll(PDO::FETCH_OBJ);
                  if ($flag) {
                    foreach ($flag as $imgs) {
                  ?>
                  <tr>
                    <td><?= $imgs->idIm ?></td>
                    <td><?= $imgs->nomIm ?></td>
                    <td><img src="<?= $imgs->dataIm ?>" alt="<?= $imgs->nomIm ?>" width="100" height="100"></td>
                    <td>
                      <button class="btn btn-success" type="submit">
                        <a href="edit-pic.php?idIm=<?= $imgs->idIm?>" style="color: white;">Edit</a>
                      </button>
                      <button class="btn btn-danger" type="submit">
                        <a href="./delete-pic.php?idIm=<?=$imgs->idIm?>" style="color: white;">DELETE</a>
                      </button>
                    </td>
                  </tr>
                  <?php
                    }
                  }
                    ?>
                </tbody>
              </table>
              <button class="btn btn-success" type="submit">
                <a href="add-pic.php" style="color: white;">ADD Picture</a>
              </button>
              <!-- End Table image -->
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Comment Table</h5>
              <!-- comments Table -->
              <table class="table">
                <caption>Table image</caption>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                $stm = $db->prepare("SELECT * FROM commentaire");
                $stm->execute([]);
                $flag = $stm->fetchAll(PDO::FETCH_OBJ);
                if ($flag) {
                  foreach ($flag as $cmnt) {
                ?>
                  <tr>
                    <td><?= $cmnt->numCom ?></td>
                    <td><?= $cmnt->commentaireC ?></td>
                    <td>
                      <button class="btn btn-danger" type="submit">
                        <a href="delete-comment.php?numCom=<?= $cmnt->numCom?>" style="color: white;">Delete</a>
                      </button>
                    </td>
                  </tr>
                  <?php
                  }
                }
                    ?>
                </tbody>
              </table>
              <!-- End comments Table -->
            </div>
          </div>
    </section>

  </main><!-- End #main -->

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