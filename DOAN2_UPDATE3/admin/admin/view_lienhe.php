<?php
//include ('authentication.php');
include('includes/header.php');
include('includes/navbar.php');
include ('../admin/config/dbconfig.php');

//$result = mysqli_query($con, 'select count(id) as total from products');
//$row = mysqli_fetch_assoc($result);
//$total_records = $row['total'];
//// TÌM LIMIT VÀ CURRENT_PAGE
//$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
//$limit = 10;
////TÍNH TOÁN TOTAL_PAGE VÀ START
//// tổng số trang
//$total_page = ceil($total_records / $limit);
//
//// Giới hạn current_page trong khoảng 1 đến total_page
//if ($current_page > $total_page){
//    $current_page = $total_page;
//}
//else if ($current_page < 1){
//    $current_page = 1;
//}
//
//// Tìm Start
//$start = ($current_page - 1) * $limit;
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
                    <h4> view liên hệ
                        <a href="register-add.php" class="btn btn-primary float-right"> BACK</a>
                    </h4>

                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th> ID </th>
                            <th>  name</th>
                            <th>Email </th>
                            <th>số điện thoại</th>
                            <th>message</th>
                            <th>TƯ VẤN </th>
                            <th>DELETE </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th> 1 </th>
                            <th>  Phạm Thị Phúc</th>
                            <th>phamthiphuc111@gmail.com </th>
                            <th>0968269807</th>
                            <th> Gói hàng chưa kĩ
                                ,mong shop lần sau sẽ chú ý hơn
                            </th>
                            <th><a href="#" class="form-control btn-success">TƯ VẤN</a> </th>
                            <th><a href="#" class="form-control btn-danger">DELETE</a> </th>
                        </tr>
                        <tr>
                            <th> 2 </th>
                            <th>  Trần ngọc trâm</th>
                            <th>Ngoctram2003@gmail.com </th>
                            <th>0345678793</th>
                            <th>
                                xin chào shop!
                                qui trình vận chuyển của shop như thế nào?
                                tôi có thể nhận được hàng bao lâu?
                                cảm ơn!
                            </th>
                            <th><a href="#" class="form-control btn-success">TƯ VẤN</a> </th>
                            <th><a href="#" class="form-control btn-danger">DELETE</a> </th>
                        </tr>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
<!--    <div class="col-lg-12">-->
<!--        <div class="pageination">-->
<!--            <nav aria-label="Page navigation example">-->
<!--                <ul class="pagination justify-content-center">-->
<!--                    --><?php
//                    // PHẦN HIỂN THỊ PHÂN TRANG
//                    // BƯỚC 7: HIỂN THỊ PHÂN TRANG
//
//                    // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
//                    if ($current_page > 1 && $total_page > 1){
//                        echo '<a href="view-users.php?page='.($current_page-1).'">Prev</a> | ';
//                    }
//
//                    // Lặp khoảng giữa
//                    for ($i = 1; $i <= $total_page; $i++){
//                        // Nếu là trang hiện tại thì hiển thị thẻ span
//                        // ngược lại hiển thị thẻ a
//                        if ($i == $current_page){
//                            echo '<span>'.$i.'</span> | ';
//                        }
//                        else{
//                            echo '<a href="view-users.php?page='.$i.'">'.$i.'</a> | ';
//                        }
//                    }
//
//                    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
//                    if ($current_page < $total_page && $total_page > 1){
//                        echo '<a href="view-users.php?page='.($current_page+1).'">Next</a> | ';
//                    }
//                    ?>
<!--                </ul>-->
<!--            </nav>-->
<!--        </div>-->
<!--    </div>-->
</div>
<?php
//include('includes/scripts.php');
include('includes/footer.php');
?>

