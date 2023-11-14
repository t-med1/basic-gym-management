<?php 
require_once("./PagesAdmin/db.php");
if (isset($_POST["usercomment"]) && isset($_POST["emailcomment"]) && isset($_POST["commentaireC"])) {
    $usercomment = $_POST["usercomment"];
    $emailcomment = $_POST["emailcomment"];
    $commentaireC = $_POST["commentaireC"];
    try {
        $stm = $db->prepare("insert into commentaire(usercomment, emailcomment, commentaireC) values(:usercomment, :emailcomment, :commentaireC)");
        if ($stm->execute([":usercomment" => $usercomment, ":emailcomment" => $emailcomment, "commentaireC" => $commentaireC])) echo "";
    } catch (PDOException $e) {
        die("Erreur " . $e->getMessage());
    }
} ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Golden | GYM</title> <!-- Favicons -->
    <link href="./PagesAdmin/assets/img/G.png" rel="icon"> <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet"> <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body> <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div> <!-- Header Section -->
    <header class="header-section">
        <div class="container">
            <div class="logo"> <a href="./index.php"> <img src="img/logo.png" alt=""> </a> </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./about.php">About</a></li>
                        <li><a href="./classes.php">Classes</a></li>
                        <li><a href="./blog.php">Blog</a></li>
                        <li><a href="./gallery.php">Gallery</a></li>
                        <li class="active"><a href="./contact.php">Contacts</a></li>
                    </ul>
                </nav> <a href="./PagesAdmin/pages-register.php" class="primary-btn signup-btn">Sign Up Today</a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header> <!-- Header // --> <!-- button for Go Back to Home -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Contact</h2>
                        <div class="breadcrumb-option"> <a href="./index.php"><em class="fa fa-home"></em> Home</a> <span>Contact</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End --> <!-- Map Section  -->
    <div class="map"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24112.92132811736!2d-74.20651812810036!3d40.93514309648714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2fda38587e887%3A0xf03207815e338a0d!2sHaledon%2C%20NJ%2007508%2C%20USA!5e0!3m2!1sen!2sbd!4v1578120776078!5m2!1sen!2sbd" height="612" style="border:0;" allowfullscreen="" title="maps"></iframe> <img src="img/icon/location.png" alt=""> </div> <!-- Map Section // --> <!-- Contact Section -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h4>Contacts Us</h4>
                        <div class="contact-address">
                            <div class="ca-widget">
                                <div class="cw-icon"> <img src="img/icon/icon-1.png" alt=""> </div>
                                <div class="cw-text">
                                    <h5>Our Location</h5>
                                    <p>Morocco , fes - Ain Chqef 30 000</p>
                                </div>
                            </div>
                            <div class="ca-widget">
                                <div class="cw-icon"> <img src="img/icon/icon-2.png" alt=""> </div>
                                <div class="cw-text">
                                    <h5>Phone:</h5>
                                    <p>+(212) 6 19 31 82 48 </p>
                                </div>
                            </div>
                            <div class="ca-widget">
                                <div class="cw-icon"> <img src="img/icon/icon-3.png" alt=""> </div>
                                <div class="cw-text">
                                    <h5>Mail</h5>
                                    <p>Med.Telaj404@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form">
                        <h4>Leave A Comment</h4>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-lg-6"> <input type="text" placeholder="Your name" name="usercomment" id="usercomment"> </div>
                                <div class="col-lg-6"> <input type="text" placeholder="Your email" name="emailcomment" id="emailcomment"> </div>
                                <div class="col-lg-12"> <textarea placeholder="Your messages" name="commentaireC" id="commentaireC"></textarea> <button type="submit">Send Message</button> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Contact Section // --> <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-option"> <span>Phone</span>
                        <p>+(212) 6 19 31 82 48 - +(212) 7 38 45 23 79</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-option"> <span>Address</span>
                        <p>Morocco , fes - Ain Chqef 30 000</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-option"> <span>Email</span>
                        <p>Med.Telaj404@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer> <!-- Footer Section // --> <!-- Script -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script> 
</body> 

</html>