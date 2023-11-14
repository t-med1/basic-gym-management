<?php
    require_once("db.php") ;
    if (isset($_GET['numCom'])) {
        $query = "DELETE FROM commentaire where numCom=?";
        $result = $db->prepare($query);
        $flag = $result->execute([$_GET["numCom"]]);
        if ($flag) {
            header("location:tables-general.php");
        } else {
            echo "<script>alert('This comment doesn't delete')</script>";
        }
    }