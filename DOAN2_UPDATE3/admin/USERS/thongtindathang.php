<?php
session_start();
if(isset($_SESSION['cart'])) {
    //echo var_dump($_SESSION['cart']);

}
?>
<?php
include ('../admin/config/dbconfig.php');

?>

<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>aranaz</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/price_rangs.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/step_current.css">
</head>

<body>
<?php
include ('../USERS/include_User/navbar.php');
?>

<style>
    .image_banner
    {
        background-image:url(img/anh-giay.jpg) ;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .shop-cart
    {
        margin-top: 10px;
    }
</style>
<!-- breadcrumb start-->
<section class="breadcrumb image_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Shop Category</h2>
                        <p>Home <span>-</span> Shop Category<span>-</span> HÌNH THỨC THANH TOÁN - ĐẶT HÀNG</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <!-- Responsive Arrow Progress Bar -->
    <?php
    if(isset($_SESSION['id_khachhang'])){
        ?>
        <div class="arrow-steps clearfix">
            <div class="step done"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
            <div class="step done"> <span><a href="index.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
            <div class="step current"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
            <div class="step"> <span><a href="lichsudonhang.php" >Lịch sử đơn hàng</a><span> </div>
        </div>
        <?php
    }
    ?>
    <form action="../USERS/xulythanhtoan.php" method="POST">
        <div class="row">
            <?php
            $id_dangky = $_SESSION['id_khachhang'];
            $sql_get_vanchuyen = mysqli_query($con,"SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
            $count = mysqli_num_rows($sql_get_vanchuyen);
            if($count>0){
                $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
                $name = $row_get_vanchuyen['name'];
                $phone = $row_get_vanchuyen['phone'];
                $address = $row_get_vanchuyen['address'];
                $note = $row_get_vanchuyen['note'];
            }else{

                $name = '';
                $phone = '';
                $address = '';
                $note = '';
            }


            ?>
            <div class="col-md-8" style="margin-top: 10px">

                <strong><i> <h2 style="text-align: center; margin-top: 10px">THÔNG TIN VẬN CHUYỂN</h2></i></strong>
                <div class="astrodivider"><div class="astrodividermask"></div><span><i>&#10038;</i></span></div>

                <ul>
                    <li>Họ và tên vận chuyển : <b><?php echo $name ?></b></li>
                    <br>
                    <li>Số điện thoại : <b><?php echo $phone ?></b></li>
                    <br>
                    <li>Địa chỉ : <b><?php echo $address ?></b></li>
                    <br>
                    <li>Ghi chú : <b><?php echo $note ?></b></li>
                    <br>
                </ul>


                <strong><i> <h2 style="text-align: center; margin-top: 10px">ĐƠN HÀNG CỦA BẠN</h2></i></strong>
                <div class="astrodivider"><div class="astrodividermask"></div><span><i>&#10038;</i></span></div>

                <style>
                    .astrodivider {
                        margin:64px auto;
                        width:400px;
                        max-width: 100%;
                        position:relative;
                    }

                    .astrodividermask {
                        overflow:hidden; height:20px;
                    }

                    .astrodividermask:after {
                        content:'';
                        display:block; margin:-25px auto 0;
                        width:100%; height:25px;
                        border-radius:125px / 12px;
                        box-shadow:0 0 8px #049372;
                    }
                    .astrodivider span {
                        width:50px; height:50px;
                        position:absolute;
                        bottom:100%; margin-bottom:-25px;
                        left:50%; margin-left:-25px;
                        border-radius:100%;
                        box-shadow:0 2px 4px #4fb39c;
                        background:#fff;
                    }
                    .astrodivider i {
                        position:absolute;
                        top:4px; bottom:4px;
                        left:4px; right:4px;
                        border-radius:100%;
                        border:1px dashed #68beaa;
                        text-align:center;
                        line-height:40px;
                        font-style:normal;
                        color:#049372;
                    }
                    table {
                        border-collapse: collapse;
                        width: 100%;
                    }

                    th, td {
                        text-align: left;
                        padding: 8px;
                    }

                    tr:nth-child(even) {
                        background-color: #D6EEEE;
                    }
                </style>
                <table >
                    <tr>
                        <th>Id</th>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá sản phẩm</th>
                        <th>Thành tiền</th>


                    </tr>
                    <?php
                    if(isset($_SESSION['cart'])){
                        $i = 0;
                        $tongtien = 0;
                        foreach($_SESSION['cart'] as $cart_item){
                            $thanhtien = $cart_item['soluong']*$cart_item['selling_price'];
                            $tongtien+=$thanhtien;
                            $i++;
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
<!--                                <td>--><?php //echo $cart_item['masp']; ?><!--</td>-->
                                <td><img src="../admin/uploads/<?php echo $cart_item['image']; ?>" width="150px"></td>
                                <td><?php echo $cart_item['name']; ?></td>

                                <td>
                                    <a href="../USERS/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="ti-minus" aria-hidden="true"></i></a>
                                    <?php echo $cart_item['soluong']; ?>
                                    <a href="p../USERS/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="ti-plus" aria-hidden="true"></i></a>

                                </td>
                                <td><?php echo number_format($cart_item['selling_price'],0,',','.').'vnđ'; ?></td>
                                <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>

                            </tr>
                            <?php
                        }
                        ?>
                        <tr>
                            <td colspan="8">
                                <p style="float: left;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p><br/>

                                <div style="clear: both;"></div>





                            </td>


                        </tr>
                        <?php
                    }else{
                        ?>
                        <tr>
                            <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>

                        </tr>
                        <?php
                    }
                    ?>

                </table>
            </div>
            <style type="text/css">
                .col-md-4.hinhthucthanhtoan .form-check {
                    margin: 11px;
                }
            </style>


            <div class="col-md-4 hinhthucthanhtoan">
                <h4>Phương thức thanh toán</h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="tienmat" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Tiền mặt
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="chuyenkhoan">
                    <label class="form-check-label" for="exampleRadios2">
                        Chuyển khoản
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios4" value="vnpay">
                    <img src="images/vnpay.png" height="20" width="64">
                    <label class="form-check-label" for="exampleRadios4">
                        Vnpay
                    </label>
                </div>
                <input type="submit" value="Thanh toán ngay" name="redirect" class="btn btn-danger">

    </form>

    <p></p>

    <?php
    $tongtien = 0;
    foreach($_SESSION['cart'] as $key => $value){
        $thanhtien = $value['soluong']*$value['selling_price'];
        $tongtien+=$thanhtien;

    }
    $tongtien_vnd = $tongtien;
    $tongtien_usd = round($tongtien/22667);
    ?>
    <input type="hidden" name="" value="<?php echo $tongtien_usd ?>" id="tongtien">
    <div id="paypal-button"></div>

    <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
          action="../USERS/xulythanhtoanmomo.php">
        <input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">
        <input type="submit" name="momo" value="Thanh toán MOMO QRcode" class="btn btn-danger">

    </form>

    <p></p>

    <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
          action="../USERS/xulythanhtoanmomo_atm.php">
        <input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">
        <input type="submit" name="momo" value="Thanh toán MOMO ATM" class="btn btn-danger">

    </form>
    <p></p>
    <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
          action="../USERS/onepay.php">
        <input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">
        <input type="submit" name="momo" value="Thanh toán ONEPAY" class="btn btn-danger">

    </form>

</div>

<footer class="footer_part">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-sm-6 col-lg-2">
                <div class="single_footer_part">
                    <h4>Top Products</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Managed Website</a></li>
                        <li><a href="">Manage Reputation</a></li>
                        <li><a href="">Power Tools</a></li>
                        <li><a href="">Marketing Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="single_footer_part">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Jobs</a></li>
                        <li><a href="">Brand Assets</a></li>
                        <li><a href="">Investor Relations</a></li>
                        <li><a href="">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="single_footer_part">
                    <h4>Features</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Jobs</a></li>
                        <li><a href="">Brand Assets</a></li>
                        <li><a href="">Investor Relations</a></li>
                        <li><a href="">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="single_footer_part">
                    <h4>Resources</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Guides</a></li>
                        <li><a href="">Research</a></li>
                        <li><a href="">Experts</a></li>
                        <li><a href="">Agencies</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="single_footer_part">
                    <h4>Newsletter</h4>
                    <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                    </p>
                    <div id="mc_embed_signup">
                        <form target="_blank"
                              action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                              method="get" class="subscribe_form relative mail_part">
                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                   class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = ' Email Address '">
                            <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm">subscribe</button>
                            <div class="mt-10 info"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="copyright_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer_icon social_icon">
                        <ul class="list-unstyled">
                            <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--::footer_part end::-->

<!-- jquery plugins here-->
<script src="js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- easing js -->
<script src="js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="js/swiper.min.js"></script>
<!-- swiper js -->
<script src="js/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<!-- slick js -->
<script src="js/slick.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
    alertify.set('notifier','position','top-right');
    <?php
    if (isset($_SESSION['message']))
    {
    ?>
    alertify.success('<?=$_SESSION['message']?>);
    <?php
    unset($_SESSION['message']);
    }
    ?>
</script>

</body>

</html>


