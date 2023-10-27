<?php
session_start();
include('../admin/config/dbconfig.php');
require('../mail/sendmail.php');
require('../carbon/autoload.php');
use Carbon\Carbon;
use Carbon\CarbonInterval;

$now = Carbon::now('Asia/Ho_Chi_Minh');
$id_khachhang = $_SESSION['id_khachhang'];
$code_order = rand(0,9999);
$insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,cart_date) VALUE('".$id_khachhang."','".$code_order."',1,'".$now."')";
$cart_query = mysqli_query($con,$insert_cart);
if($cart_query){
    //them gio hang chi tiet
    foreach($_SESSION['cart'] as $key => $value){
        $id_sanpham = $value['id'];
        $soluong = $value['soluong'];
        $insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham,code_cart,soluongmua) VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
        mysqli_query($con,$insert_order_details);
    }
    $tieude = "Đặt hàng website shop pt thành công!";
    $noidung = "<p>Cảm ơn quý khách đã đặt hàng của chúng tôi với mã đơn hàng : ".$code_order."</p>";
    $noidung.="<h4>Đơn hàng đặt bao gồm :</h4p>";

    foreach($_SESSION['cart'] as $key => $val){
        $noidung.= "<ul style='border:1px solid blue;margin:10px;'>
				<li>".$val['name_sp']."</li>
//				<li>".$val['id']."</li>
				<li>".number_format($val['selling_price'],0,',','.')."đ</li>
				<li>".$val['soluong']."</li>
				</ul>";
    }
    $maildathang = $_SESSION['email'];
    $mail = new Mailer();
    $mail->dathangmail($tieude,$noidung,$maildathang);
}
unset($_SESSION['cart']);
header('Location:../USERS/camon.php');


?>