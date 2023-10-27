<style>

    .danhsach_title
    {
        text-align: center;
    }

    .nav_dommua
    {
        width: 80%;
        height: 50%;
        background-color: #fffdfd;
        border-radius: 10px;
        margin-top: 10%;
        margin-left: 10%;
    }

    .item-title
    {
        width: 5%;
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

</style>
<?php
include ('../admin/config/dbconfig.php');
include ('../USERS/include_User/header.php');
include ('../USERS/include_User/navbar.php');
?>
<?php
$code = $_GET['code'];
$sql_lietke = "SELECT * FROM tbl_shipping,tbl_cart WHERE  tbl_shipping.id_shipping = tbl_cart.cart_shipping AND tbl_shipping.id_shipping = '".$code."' ";
$query_lietke = mysqli_query($con,$sql_lietke);
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
<div class="l_w_title">
    <h3 class="danhsach_title" style="font-size: 30px"> <strong><i>DANH SÁCH DƠN MUA</i></strong></h3>
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

    <div class="col-lg-12 " style="margin-top: -100px!important;">
        <div class="nav_dommua">
            <div class="tab_item">
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
<table>
                        <tr>
                        <th class="item-title-1">Id</th>
                        <th class="item-title-1">mã đơn</th>
                        <th class="item-title-name">Tên khách hàng</th>
                        <th class="item-title">số điện thoại </th>
                        <th class="item-title-date">Địa chỉ</th>
                        <th class="item-title">Ghi chú</th>
                        </tr>

                    <?php
                    $i = 0;
                    while($row = mysqli_fetch_array($query_lietke)){
                    $i++;
                    ?>

                        <tr>
                        <td  class="item-title-1"><?php echo $i?></td>
                        <td class="item-title" ><?php echo $row['code_cart'] ?></td>
                        <td class="item-title-name" ><?php echo $row['name'] ?></td>
                        <td  class="item-title" ><?php echo $row['phone'] ?></td>
                        <td  class="item-title-date" ><?php echo $row['address'] ?></td>
                        <td  class="item-title-name" ><?php echo $row['note'] ?></td>
                        </tr>

                </table>
                        <?php
                    }
                    ?>

                <button type="submit" class="btn btn-success " style="margin-left: 90%" ><a href="../USERS/lichsudonhang.php">BACK</a> </button>

            </div>
        </div>


    </div>
</body>

<?php
include ('../USERS/include_User/footer.php');
?>



