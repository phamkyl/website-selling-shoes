<?php
session_start();
ob_start();
if(isset($_SESSION['cart'])){
    if(isset($_GET['id'])==0){
//        array_splice($_SESSION['cart'],$_GET['id'],1);
        unset($_SESSION['cart']);
    }else{
        unset($_SESSION['cart'][$_GET['id']]);

    }
    //Nếu không còn sản phẩm trong giỏ hàng -> Xỏa giỏ hàng
    if(count($_SESSION['cart'])==0){
        unset($_SESSION['cart']);
    }
    header('location:cart.php');
}

?>
