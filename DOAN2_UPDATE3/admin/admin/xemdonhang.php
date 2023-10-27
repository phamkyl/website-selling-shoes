<?php
include ('../admin/config/dbconfig.php');

?>


<?php

        include ('../admin/includes/header.php');
        include ('../admin/includes/navbar.php');
?>
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
<strong><i> <h2 style="text-align: center; margin-top: 10px">VIEW ODER DETAILS</h2></i></strong>
<div class="astrodivider"><div class="astrodividermask"></div><span><i>&#10038;</i></span></div>
<?php
	$code = $_GET['code'];
	$sql_lietke_dh = "SELECT * FROM tbl_cart_details,products WHERE tbl_cart_details.id_sanpham=products.id AND tbl_cart_details.code_cart='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
	$query_lietke_dh = mysqli_query($con,$sql_lietke_dh);
?>
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
<table >
  <tr>
  	<th>Id</th>
    <th>Mã đơn hàng</th>
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
  
  
  </tr>
  <?php
  $i = 0;
  $tongtien = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
  	$thanhtien = $row['selling_price']*$row['soluongmua'];
  	$tongtien += $thanhtien ;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['name_sp'] ?></td>
    <td><?php echo $row['soluongmua'] ?></td>
    <td><?php echo number_format($row['selling_price'],0,',','.').'vnđ' ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
   	
  </tr>
  <?php
  } 
  ?>
  <tr>
  	<td colspan="6">
   		<p>Tổng tiền : <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p>
   	</td>
   
  </tr>
 
</table>