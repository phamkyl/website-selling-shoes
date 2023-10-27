<?php
session_start();
if(isset($_SESSION['cart'])) {
    //echo var_dump($_SESSION['cart']);

}
    ?>
<?php
include ('../USERS/include_User/navbar.php');
include ('../admin/config/dbconfig.php');
include ('../function/userfunction.php');
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
  <!--::header part start::-->

  <!-- Header part end-->



  <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->


  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Cart Products</h2>
              <p>Home <span>-</span>Cart Products</p>
                <?php
                if (isset($_SESSION['dangky']))

                {

                    echo 'HELLO: ' .'<span style="color: red">'.$_SESSION['dangky'].'</span>';
                    echo $_SESSION['id_khachhang'];
                }
                ?>



            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->
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
  </style>
<strong><i> <h2 style="text-align: center; margin-top: 10px">ĐƠN HÀNG CỦA BẠN</h2></i></strong>
  <div class="astrodivider"><div class="astrodividermask"></div><span><i>&#10038;</i></span></div>
  <div class="arrow-steps clearfix" style="margin-left: 350px ; margin-top: 10px">
      <div class="step current"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
      <div class="step"> <span><a href="index.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
      <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
      <div class="step"> <span><a href="donhangdadat.php" >Lịch sử đơn hàng</a><span> </div>

  </div>
  <!--================Cart Area =================-->
  <style>
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
      <div class="boxcenter">

          <table >
              <tr>
                  <th>STT</th>
                  <th>Hình</th>
                  <th>Tên sản phẩm</th>
                  <th>Đơn giá</th>
                  <th>Số lượng</th>
                  <th>Thành tiền</th>
                  <th>Xóa</th>
              </tr>
    <?php
    if(isset($_SESSION['cart'])){
        $i = 0;
        $tongtien = 0;
        foreach($_SESSION['cart'] as $item ){
            $thanhtien = $item['soluong']*$item['selling_price'];
            $tongtien+=$thanhtien;
            $i++;

            ?>

            <td><?php echo $i; ?></td>

            <td>
                <img src="../admin/uploads/<?=$item['image']; ?>" width="70px" height="70px">

            </td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo number_format($item['selling_price'],0,',','.').'vnđ'; ?></td>
            <td>
                <a href="../USERS/cart_tt.php?tru=<?php echo $item['id'] ?>"><i class="ti-minus" aria-hidden="true"></i></a>
                <?php echo $item['soluong']; ?>
                <a href="../USERS/cart_tt.php?cong=<?php echo $item['id'] ?>"><i class="ti-plus" aria-hidden="true"></i></a>

            </td>

            <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
            <td><a href="../USERS/cart_tt.php?xoa=<?php echo $item['id'] ?>">Xoá</a></td>
            </tr>



            <?php
        }
        ?>
        <tr>
            <td colspan="8">
                <p style="float: left;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p><br/>

                <p style="float: right;"><a href="../USERS/cart_tt.php?xoatatca=1">Xoá tất cả</a></p>
                <div style="clear: both;"></div>
                <?php
                if(isset($_SESSION['dangky'])){
                    ?>
                    <p><a href="vanchuyen.php">Thông tin vận chuyển</a></p>
                    <?php
                }else{
                    ?>
                    <p><a href="../USERS/register_user.php">Đăng kí đặt hàng</a></p>
                    <?php
                }
                ?>
            </td>


        </tr>
          <?php
          }else{
              ?>
              <tr>
<!--                  <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>-->

              </tr>
              <?php
          }
          ?>

          </table>


      </div>

      </body>

      </html>
  <!--================End Cart Area =================-->

    <?php
    include ('../USERS/include_User/footer.php');

    ?>

