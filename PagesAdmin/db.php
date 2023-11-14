<?php
$dsn = "mysql:host=localhost;dbname=gestion_gym";
$user = "root";
$pass = "";
try {
    $db = new PDO($dsn, $user, $pass);
} catch (PDOException $th) {
    "Veuillez essayez : " . $th->getMessage();
    die();
}
