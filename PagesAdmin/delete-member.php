<?php
    require_once("db.php") ;
    if (isset($_GET['numM'])) {
            $query = "DELETE FROM member where numM=?";
            $result = $db->prepare($query);
            $flag = $result->execute([$_GET["numM"]]);
            if ($flag) {
                header("location:tables-data.php");
                exit;
            } else{
                echo "<script>alert('This member doesn't delete')</script>";
            }
    }