<?php
include ('../admin/config/dbconfig.php');
if(isset($_POST['timkiem'])){
    $tukhoa = $_POST['tukhoa'];
}
$sql_pro = "SELECT * FROM products,tbl_danhmuc WHERE products.id=tbl_danhmuc.id_danhmuc AND products.name  LIKE '%".$tukhoa."%'";
$query_pro = mysqli_query($con,$sql_pro);

?>
<h3>Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']; ?></h3>
<ul class="product_list">
    <?php
    while($row = mysqli_fetch_array($query_pro)){
        ?>
        <li>
            <a href="ptoducts&id=<?php echo $row['id'] ?>">
                <img src="../admin/uploads/<?php echo $row['image'] ?>">
                <p class="title_product">Tên sản phẩm : <?php echo $row['name'] ?></p>
                <p class="price_product">Giá : <?php echo number_format($row['sellinh_price'],0,',','.').'vnđ' ?></p>
                <p style="text-align: center;color:#d1d1d1"><?php echo $row['category'] ?></p>
            </a>
        </li>
        <?php
    }
    ?>
</ul>