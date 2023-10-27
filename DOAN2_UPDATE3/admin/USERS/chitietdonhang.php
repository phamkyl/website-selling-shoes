<?php
include ('../admin/config/dbconfig.php');
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php

include ('../USERS/include_User/header.php');
include ('../USERS/include_User/navbar.php');
?>

<?php

$code = $_GET['code'];
$sql_lietke_dh = "SELECT * FROM tbl_cart_details,products WHERE tbl_cart_details.id_sanpham=products.id AND tbl_cart_details.code_cart='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
$query_lietke_dh = mysqli_query($con,$sql_lietke_dh);
?>


<body style="background-color: #f5f5f5 !important;">
<style>
    .image_banner
    {
        background-image:url(img/anh-giay.jpg) ;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

        <section class="breadcrumb image_banner" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="breadcrumb_iner">

                            <div class="breadcrumb_iner_item">
                                <h2> PROFILE</h2>
                                <p>Home <span>-</span> my profile <span>-</span>

                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
<style>
    .chitiet
    {
        display: flex;
        height: 5%;
        justify-content: end;
        /*border-bottom:#f5f5f5 2px solid;*/
        /*margin-left: 55%;*/
    }
    .img
    { width: 10%;
        border-left: 20px #ffffff solid ;
    }

    .ct_item
    {
        width: 70%;
        border-left: 20px #ffffff solid ;
    }
    .selling_price
    {
        width: 10%;
        /*background-color: #0b4ddc;*/

    }
    .price
    {
        margin-top: 20px;
        text-align: center;
        font-size: 20px;
        color: #0b4ddc;

    }
    .cont-item {
        width: 100%;
        height: 30%;
    }
    /*table,tr,td,th*/
    /*{*/
    /*    border: #f5f5f5 solid 2px;*/
    /*}*/

    .table-title
    {
        width: 100%;
        height: auto;
        display: flex;
        border-bottom: 2px solid #f5f5f5;
    }
    .table-content
    {
        width: 100%;
        height: auto;
        display: flex;
    }
    .item-title
    {
        width: 15%;
        height: 50px;
        /*border: 1px silver solid;*/
    }
    .item-title-1
    {
        margin-left: 2px;
        width: 10%;
        height: 50px;
        /*border: 1px silver solid;*/
    }
    .item-title-date ,.item-title-name
    {
        width: 30%;
        height: 50px;
        /*border: 1px silver solid;*/
    }
    .danhsach_title
    {
        text-align: center;
    }
    .chitiet_vanchuyen
    {
        width: 80%;
        height: 50%;
        background-color: #fffdfd;
        border-radius: 10px;
        margin-top: 10%;
        margin-left: 10%;
        border-top: 20px ;
    }
    .nav_dommua
    {
        width: 100%;
        height: 40%;
        background-color: #fffdfd;
        border-radius: 10px;
        /*margin-top: 10%;*/
        /*margin-left: 10%;*/
    }
    .status
    {
        height: 5%;
        border-bottom: #f5f5f5 2px solid;
        justify-items: end;
    }
    .item
    {
        display: flex;
        height: 60%;
        border-bottom:#f5f5f5 2px solid;
        border-top:#f5f5f5 2px solid ;
        margin-top: 100px;

    }
    .tong_don
    {
        height: 10%;
        /*border-bottom:#f5f5f5 2px solid;*/
        justify-content: end;
    }

    .img
    { width: 20%;
        border-left: 20px #ffffff solid ;
    }
    .ct_item
    {
        width: 70%;
        border-left: 20px #ffffff solid ;
    }
    .selling_price
    {
        width: 10%;
        /*background-color: #0b4ddc;*/

    }
    .table-title
    {
        width: 100%;
        height: auto;
        display: flex;
        border-bottom: 2px solid #f5f5f5;
    }
    .table-content
    {
        width: 100%;
        height: auto;
        display: flex;
    }
    .price
    {
        margin-top: 20px;
        text-align: center;
        font-size: 20px;
        color: #0b4ddc;

    }


</style>
<div class="l_w_title">

    <h3 class="danhsach_title" style="font-size: 30px"> <strong><i>DANH SÁCH CHI TIẾT ĐƠN MUA</i></strong></h3>
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
    </style>
</div>
<?php
$i = 0;
$tongtien = 0;
while($row = mysqli_fetch_array($query_lietke_dh)){
    $i++;
    $thanhtien = $row['selling_price']*$row['soluongmua'];
    $tongtien += $thanhtien ;
    ?>
        <div class="col-lg-12 " style="margin-top: 100px!important;">
            <div class="nav_dommua">
                 <div class="item">
            <div class="img">
                <img src="../admin/uploads/<?=$row['image'];?>" alt="anh_don_da_mua" style="margin-top: 30px" width="100px">
            </div>
            <div class="img" style="margin-top: 30px">
               <p style="margin: 20px auto">
                   <?php echo $row['code_cart'] ?>
               </p>
            </div>
        <div class="ct_item" style="margin-top: 30px">
            <div class="title" style="margin-top: 10px">
                <h5 style="color: #0b4ddc "> <strong> <?=$row['name_sp'];?></strong></h5>
            </div>
<!--            <div class="title_item" style="margin-top: 10px">-->
<!--                <h6 style="color: #2c2525 "> phân loại hàng <span>:</span> --><?//=$row['tendanhmuc'];?><!--</h6>-->
<!--            </div>-->
            <div class="title_item" style="margin-top: 10px">
                <h6 style="color: #100003 "> số lượng <span>:</span> <?php echo $row['soluongmua'] ?></h6>
            </div>

        </div>
        <div class="selling_price" style="margin-top: 30px">
            <p class=" price text-sm-center">         <?php echo number_format($row['selling_price'],0,',','.').'vnđ' ?>
            </p>
        </div>
            </div>
                <div class="tong_don">
                    <div class="tong_price">
                        <h4 style="color: red"> Tổng số tiền <span>:</span><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></h4>
                    </div>
                </div>
   </div>
            <button type="submit" class="btn btn-success " style="margin-left: 90%" ><a href="../USERS/lichsudonhang.php">BACK</a> </button>

</div>

<?php
}
?>


        </body>
<?php
include ('../USERS/include_User/footer.php');
?>

