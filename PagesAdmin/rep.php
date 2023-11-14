<?php
session_start();
require_once("db.php");
    $email = $_POST['email'];
    $password = $_POST["password"];
    if (!empty($email) && !empty($password)) {
        try {
            $stmt = $db->prepare("SELECT * FROM admins WHERE emailAd=:email AND passAd=:pass");
            $stmt->execute([":email"=>$email , ":pass"=>$password]);
            $acc = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($acc) {
                $_SESSION['codeAd'] = $acc["numAd"];
                $_SESSION['name'] = $acc["nameAd"];
                $_SESSION['mailAd'] = $acc["emailAd"];
                $_SESSION['passwordAd'] = $acc["passAd"];
                $_SESSION['ville'] = $acc["ville"];
                $_SESSION['phone'] = $acc["phone"];
                header('Location:index.php');
            } else {
                echo "<script>alert('Ur information is Incorrect')</script>";
            }
        }catch (PDOException $th) {
            echo "Erreur : ". $th->getMessage();
             die();
        }
    } else {
        echo "<script>alert('fill all the blanks Please')</script>";
    }