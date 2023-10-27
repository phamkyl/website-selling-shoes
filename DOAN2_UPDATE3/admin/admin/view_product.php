<?php
//include ('authentication.php');
include('includes/header.php');
include('includes/navbar.php');
include ('../admin/config/dbconfig.php');
include ('../function/myfunction.php');

$result = mysqli_query($con, 'select count(id) as total from products');
$row = mysqli_fetch_assoc($result);
$total_records = $row['total'];
// TÌM LIMIT VÀ CURRENT_PAGE
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 10;
//TÍNH TOÁN TOTAL_PAGE VÀ START
// tổng số trang
$total_page = ceil($total_records / $limit);

// Giới hạn current_page trong khoảng 1 đến total_page
if ($current_page > $total_page){
    $current_page = $total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}

// Tìm Start
$start = ($current_page - 1) * $limit;

?>



    <div class="container-fluid">

    <!-- DataTales Example -->

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active" > Dashboard</li>
        <li class="breadcrumb-item"> view</li>
    </ol>
    <div class="row">

        <div class="col-md-12">
            <?php include ('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4> view Products
                        <a href="product_add.php" class="btn btn-primary float-right"> categories</a>
                    </h4>

                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>IMAGE</th>
                            <th>STATUS </th>
                            <th>EDIT </th>
                            <th>DELETE </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=0;
                        $products = getAll("products","$start"," $limit");
                        if (mysqli_num_rows($products)>0)
                        {

                            foreach ($products as $item)
                            {
                                $i++;
                                ?>
                                <tr>
                                    <th><?=$i ?></th>
                                    <th><?=$item['id'] ?></th>
                                    <th><?=$item['name_sp'] ?></th>
                                    <th>
                                        <img src="../admin/uploads/<?=$item['image'] ;?>" width="70px" height="70px" alt="<?=$item['meta_keywords'] ?>">

                                    </th>

                                    <th><?=$item['status']=='0'?"visible":"hidden" ?></th>

                                    </td>
                                    <th><a href="product_editing.php?id=<?= $item['id']; ?>" class="btn btn-success"> edit</a>
                                    <th>

                                        <form action="code_product.php" method="post">
                                            <input type="hidden" name="product_id" value="<?=$item['id']?>">
                                            <button type="button" name="delete_products"  class="btn btn-danger">delete</button>
                                        </form>
                                    </th>




                                </tr>
                                <?php

                            }
                        }else
                        {
                            ?>
                            <tr>
                                <td colspan="6">
                                    No record found
                                </td>
                            </tr>
                            <?php
                        }
                        ?>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
<!--   phân trang-->

    <div class="col-lg-12">
        <div class="pageination">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <?php
                    // PHẦN HIỂN THỊ PHÂN TRANG
                    // BƯỚC 7: HIỂN THỊ PHÂN TRANG

                    // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                    if ($current_page > 1 && $total_page > 1){
                        echo '<a href="view_product.php?page='.($current_page-1).'">Prev</a> | ';
                    }

                    // Lặp khoảng giữa
                    for ($i = 1; $i <= $total_page; $i++){
                        // Nếu là trang hiện tại thì hiển thị thẻ span
                        // ngược lại hiển thị thẻ a
                        if ($i == $current_page){
                            echo '<span>'.$i.'</span> | ';
                        }
                        else{
                            echo '<a href="view_product.php?page='.$i.'">'.$i.'</a> | ';
                        }
                    }

                    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                    if ($current_page < $total_page && $total_page > 1){
                        echo '<a href="view_product.php?page='.($current_page+1).'">Next</a> | ';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>

<?php
//include('includes/scripts.php');
include('includes/footer.php');
?>
<?php
