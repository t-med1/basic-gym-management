<?php
require_once('db.php');
    if( isset($_POST['creatAcc'])){
        $name = $_POST["name"];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cvv = $_POST["cvv"];
        $cardNum = $_POST["cardNumber"];
        $dateJoin = $_POST["dateJoin"];
        if (!empty($name) && !empty($email) && !empty($password) && !empty($cvv) && !empty($cardNum) && !empty($dateJoin)){
            $stm = $db->prepare('INSERT INTO member VALUES(DEFAULT,:nam,:em,:pass,:cvv,:cardn,:dt)');
            $acc = $stm->execute([':nam'=>$name ,':em'=>$email , ':pass'=>$password , ':cvv'=>$cvv , ':cardn'=>$cardNum , ':dt'=>$dateJoin ]);
            if ( $acc ){
                // echo "<script>alert('you Added Successfully ')</script>";
                header('location:../index.php');
            }else{
                echo "<script>alert('you not Added')</script>";
            }
        }
        else{
          echo "<script>alert('fill all the blanks Please')</script>";
        }
    }
?>