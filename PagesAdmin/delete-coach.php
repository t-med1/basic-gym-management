<?php
    require_once("db.php") ;
    if (isset($_GET['numC'])) {
            $query = "DELETE FROM coach where numCoa=?";
            $result = $db->prepare($query);
            $flag = $result->execute([$_GET["numC"]]);
            if ($flag) {
                header("location:tables-data.php");
                exit;
            } else{
                echo "<script>alert('This coach doesn't delete')</script>";
            }
    }