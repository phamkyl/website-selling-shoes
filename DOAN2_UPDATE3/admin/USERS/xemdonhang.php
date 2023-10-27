<?php
include ('../admin/config/dbconfig.php');

?>


<?php

        include ('../USERS/include_User/header.php');
        include ('../USERS/include_User/navbar.php');
?>
<p>Xem đơn hàng</p>
<?php
	$code = $_GET['code'];
	$sql_lietke_dh = "SELECT * FROM tbl_cart_details,products WHERE tbl_cart_details.id_sanpham=products.id AND tbl_cart_details.code_cart='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
	$query_lietke_dh = mysqli_query($con,$sql_lietke_dh);
?>
<table style="width:100%" border="1" style="border-collapse: collapse;">
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
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['soluongmua'] ?></td>
    <td>
        <?php echo number_format($row['selling_price'],0,',','.').'vnđ' ?>
    </td>
    <td>
        <?php echo number_format($thanhtien,0,',','.').'vnđ' ?>
    </td>
   	
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