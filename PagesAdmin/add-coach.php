<?php
session_start();
if (!isset($_SESSION['codeAd'])) {
    header("Location:pages-login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin - Page</title>
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
    <!-- CSS File -->
    <link rel="stylesheet" href="./assets/css/style.css">

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
            <a href="index.php class=" logo d-flex align-items-center">
                <img src="./assets/img/logoFor.png" alt="" width="230" height="230">
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="users-profile.php"
                        data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">
                            <?php if (isset($_SESSION['name']))
                                echo $_SESSION['name']; ?>
                        </span>
                    </a><!-- End Profile Iamge Icon -->

                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="index.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-general.php">
                            <i class="bi bi-circle"></i><span>Other Data Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-data.php">
                            <i class="bi bi-circle"></i><span>Members Table</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->
            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.php">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-contact.php">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-register.php">
                    <i class="bi bi-card-list"></i>
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

    <main id="main" class="main" class="row">
        <form method="post">
            <div class="form-group">
                <label for="num">Numero Coach :</label>
                <input type="number" class="form-control" id="num" name="num" placeholder="Enter Numero Coach">
            </div>
            <div class="form-group">
                <label for="nom">Nom Coach :</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter Nom Coach">
            </div>
            <div class="form-group">
                <label for="prenom">Prenom Coach</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder=" Enter Prenom Coach">
            </div>
            <div class="form-group">
                <label for="dateD">Date Debut :</label>
                <input type="date" class="form-control" id="dateD" name="dateD">
            </div>
            <div class="form-group">
                <label for="dateF">Date Fin :</label>
                <input type="date" class="form-control" id="dateF" name="dateF">
            </div>
            <div class="form-group">
                <label for="role">Role Coach :</label>
                <input type="text" class="form-control" id="role" name="role" placeholder=" Enter le Role Du Coach">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-success" name="added">ADD</button>
        </form>

    </main><!-- End #main -->
    <?php
    if (isset($_POST["added"])) {
        $stm = $db->prepare("INSERT INTO coach VALUES(?,?,?,?,?,?)");
        $stm->execute([$_POST["num"],$_POST["nom"],$_POST["prenom"],$_POST["dateD"],$_POST["dateF"],$_POST["role"]]);
        $yup = $stm->fetch(PDO::FETCH_OBJ);
        if ($yup) {
            header('location:tables-data.php');
        }
    }
    ?>
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