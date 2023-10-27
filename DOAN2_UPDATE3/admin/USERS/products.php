<?php
session_start();
include ('../function/userfunction.php');
include ('../admin/config/dbconfig.php');
//include ('../USERS/include_User/header.php');
include ('../USERS/include_User/navbar.php');

$category_slug =$_GET['category'];
$category_pr = getSlugActive("categories",$category_slug);
$category = mysqli_fetch_array($category_pr);
$cid = $category['id'];

$result = mysqli_query($con, 'select count(id) as total from products');
$row = mysqli_fetch_assoc($result);
$total_records = $row['total'];
// TÌM LIMIT VÀ CURRENT_PAGE
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 12;
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



<!doctype html>
<html lang="zxx" xmlns="http://www.w3.org/1999/html">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>aranoz</title>
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
</head>


<!--================Home Banner Area =================-->
<!-- breadcrumb start-->
<style>
    .image_banner
    {
        background-image:url(img/anh-giay.jpg) ;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<section class="breadcrumb image_banner ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Shop Category</h2>
                        <p>Home <span>-</span> Shop Category <span>-</span><?=$category['name']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================Category Product Area =================-->

<section class="cat_product_area " style="padding: 10px!important;">
    <div class="container" style="max-width: 95%">
        <div class="row">
            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Browse Categories</h3>
                        </div>
                        <div class="widgets_inner">
                            <?php
                            $danhmuc = getAllActive("tbl_danhmuc");
                            if (mysqli_num_rows($danhmuc)>0)
                            {
                                foreach ($danhmuc as $item)
                                {
                                    ?>
                                    <div class="widgets_inner">
                                        <ul class="list">
                                            <li>
                                                <a href="product_type.php?danhmuc=<?= $item['id_danhmuc']?>">
                                                    <?=$item['tendanhmuc']?>>
                                                </a>
                                            </li>

                                        </ul>

                                    </div>

                                    <?php
                                }
                            }
                            else
                            {
                                echo "No data available";
                                exit(0);
                            }
                            ?>

                        </div>
                    </aside>

                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Product filters</h3>
                        </div>
                        <div class="widgets_inner">
                            <?php
                            $categories = getAllActive("categories");
                            if (mysqli_num_rows($categories)>0)
                            {
                                foreach ($categories as $item)
                                {
                                    ?>
                                    <div class="widgets_inner">
                                        <ul class="list">
                                            <li>
                                                <a href="products.php?category=<?= $item['slug']?>">
                                                    <?=$item['name']?>>
                                                </a>
                                            </li>

                                        </ul>

                                    </div>

                                    <?php
                                }
                            }
                            else
                            {
                                echo "No data available";
                                exit(0);
                            }
                            ?>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">

                    <div class="row align-items-center latest_product_inner">
                        <?php
                        $products = getProdByCategory("$cid","$start","$limit");

                        if (mysqli_num_rows($products)>0)
                        {
                            foreach ($products as $data)
                            {
                                ?>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item"  style="background: #f5efd6">
                                        <img src="../admin/uploads/<?=$data['image']?>"  alt="products">
                                        <div class="single_product_text">
                                            <h4><?=$data['name_sp']?></h4>
                                            <h3><?=$data['selling_price']?>đ</h3>
                                            <a href="single-product.php?product=<?=$data['slug']?>" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        else
                        {
                            echo "No data available";
                            exit(0);
                        }
                        ?>


                        <div class="col-lg-12">
                            <div class="pageination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <?php
                                        // PHẦN HIỂN THỊ PHÂN TRANG
                                        // BƯỚC 7: HIỂN THỊ PHÂN TRANG

                                        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                                        if ($current_page > 1 && $total_page > 1){
                                            echo '<a href="products.php?page='.($current_page-1).'">Prev</a> | ';
                                        }

                                        // Lặp khoảng giữa
                                        for ($i = 1; $i <= $total_page; $i++){
                                            // Nếu là trang hiện tại thì hiển thị thẻ span
                                            // ngược lại hiển thị thẻ a
                                            if ($i == $current_page){
                                                echo '<span>'.$i.'</span> | ';
                                            }
                                            else{
                                                echo '<a href="products.php?page='.$i.'">'.$i.'</a> | ';
                                            }
                                        }

                                        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                                        if ($current_page < $total_page && $total_page > 1){
                                            echo '<a href="products.php?page='.($current_page+1).'">Next</a> | ';
                                        }
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
</section>
<!--================End Category Product Area =================-->


<!--::footer_part start::-->
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
<!-- jquery -->
<script src="js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- easing js -->
<script src="js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="js/lightslider.min.js"></script>
<!-- swiper js -->
<script src="js/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<!-- slick js -->
<script src="js/slick.min.js"></script>
<script src="js/swiper.jquery.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/stellar.js"></script>
<!-- custom js -->
<script src="js/theme.js"></script>
<script src="js/custom.js"></script>
</body>

</html>