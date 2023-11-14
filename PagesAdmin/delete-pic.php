<?php
    require_once("db.php") ;
    if (isset($_GET['idIm'])) {
        $pic = $db->prepare("SELECT dataIm FROM images WHERE idIm =:id");
        $pic->execute([":id"=>$_GET['idIm']]);
        $fg = $pic->fetch(PDO::FETCH_OBJ);
        if ($fg){
            $query = "DELETE FROM images where idIm=?";
            $result = $db->prepare($query);
            $flag = $result->execute([$_GET["idIm"]]);
            if ($flag) {
                unlink($fg->dataIm);
                header("location:tables-general.php");
                exit;
            } else{
                echo "<script>alert('This Image doesn't delete')</script>";
            }
        }
        
    }