<?php
include ('../function/userfunction.php');
include ('../admin/config/dbconfig.php');
include ('../USERS/include_User/header.php');
include ('../USERS/include_User/navbar.php');

$category_slug =$_GET['category'];
$category_pr = getSlugActive("categories",$category_slug);
$category = mysqli_fetch_array($category_pr);
$cid = $category['id'];

//$product_slug = $_GET['product'];
//$product_data = getSlugActive("products",$product_slug);
//$products = mysqli_fetch_array($product_data);
?>




    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Shop Category</h2>
                            <p>Home <span>-</span> Shop Category<span>-</span><?=$category['name']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <div class="section_tittle text-center">
        <br><br>
        <h2>PRODUCTS <?=$category['name']?> </h2>
    </div>

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <!--                    loại giày-->
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
                        <!-- thương hiệu-->
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
                        <!-- giá -->
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>PRICE</h3>
                            </div>
                            <div class="widgets_inner">
                                <?php
                                $price = getProdByPrice("products");
                                if (mysqli_num_rows($price)>0)
                                {
                                    foreach ($price as $item)
                                    {
                                        ?>
                                        <div class="widgets_inner">
                                            <ul class="list">
                                                <li>
                                                    <a href="products.php?price=<?= $item['id']?>">

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


                    <div class="row align-items-center latest_product_inner">

                        <?php
                        $products = getProdByCategory($cid);

                        if (mysqli_num_rows($products)>0)
                        {
                        foreach ($products as $item)
                        {
                        ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single_product_item"  style="background: #f5efd6">
                                <img src="../admin/uploads/<?=$item['image']?>"  alt="products">
                                <div class="single_product_text">
                                    <h4><?=$item['name']?></h4>
                                    <h3><?=$item['selling_price']?>đ</h3>

                                    <a href="single-product.php?product=<?=$item['slug']?>" class="add_cart">+ add to cart<i class="ti-heart"></i></a>

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
                        </div>
                        <div class="col-lg-12">
                            <div class="pageination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <i class="ti-angle-double-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <i class="ti-angle-double-right"></i>
                                            </a>
                                        </li>
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



<?php
include ('../USERS/include_User/footer.php')
?>