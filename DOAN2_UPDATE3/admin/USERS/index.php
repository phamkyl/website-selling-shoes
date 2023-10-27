<?php
include ('../USERS/include_User/header.php');
include ('../USERS/include_User/navbar.php');
include ('../admin/config/dbconfig.php');
include ('../function/userfunction.php');
//?>


    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>FASHTION
                                                Sale</h1>
                                            <p> Mang đến chất lượng , giày chính hãng</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth & Wood
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Wood & Cloth
                                                Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth $ Wood Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">

                         <h2 style="color:#517af1">Featured Category </h2></h1>
                        <hr />


                        <style>
                            hr {

                                border: 0;
                                border-top: 5px solid #517af1;
                                border-bottom: 1px solid #517af1;
                                padding: 5px 0;
                            }
                        </style>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <?php
              $categories = getAllActive("categories");
                    if (mysqli_num_rows($categories)>0)
                    {
                    foreach ($categories as $item)
                    {
                ?>
                <div class="col-lg-4 col-sm-5">
                    <div class="single_feature_post_text">

                        <h3> <?=$item['name'];?></h3>
                        <a href="products.php?category=<?= $item['slug']?>" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                        <img src="../admin/uploads/<?=$item['image']?>" class=" mx-auto d-block " alt="...">
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

        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- product_list start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2 style="color:#517af1">awesome <span>shop</span></h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                <?php
                               $products = getaActive("products");

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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part start-->

    <!-- awesome_shop start-->
    <section class="our_offer section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="offer_img">
                        <img src="../admin/uploads/1669140423.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_text">
                        <h2>Weekly Sale on
                            60% Off All Products</h2>
                        <div class="date_countdown">
                            <div id="timer">
                                <div id="days" class="date"></div>
                                <div id="hours" class="date"></div>
                                <div id="minutes" class="date"></div>
                                <div id="seconds" class="date"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2" id="basic-addon2">book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- awesome_shop part start-->


<!--comments start-->
    <article class="col-md-12">
        <!-- Modern - Bootstrap Cards -->
        <header>
            <!-- BLOG CARDS -->
            <
            <div class="section_tittle text-center">
                <h2>Blog Cards</h2>
            </div>


            <!-- TESTIMONIAL CARDS -->
            <div class="section_tittle text-center">
                <h2>Testimonial Cards</h2>
            </div>

            <div class="cards-4 section-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-testimonial">
                                <div class="icon"> <i class="fa fa-quote-right"></i> </div>
                                <div class="table">
                                    <h5 class="card-description">
                                        "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!"
                                    </h5> </div>
                                <div class="ftr">
                                    <h4 class="card-caption">Debbon Amet</h4>
                                    <h6 class="category">@debbonamet</h6>
                                    <div class="card-avatar">
                                        <a href="#"> <img class="img" src="http://adamthemes.com/demo/code/cards/images/avatar3.png"> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-testimonial">
                                <div class="icon"> <i class="fa fa-quote-right"></i> </div>
                                <div class="table">
                                    <h5 class="card-description">
                                        "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!"
                                    </h5> </div>
                                <div class="ftr">
                                    <h4 class="card-caption">Mary Dunst</h4>
                                    <h6 class="category">@marydunst</h6>
                                    <div class="card-avatar">
                                        <a href="#"> <img class="img" src="http://adamthemes.com/demo/code/cards/images/avatar3.png"> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-testimonial">
                                <div class="icon"> <i class="fa fa-quote-right"></i> </div>
                                <div class="table">
                                    <h5 class="card-description">
                                        "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!"
                                    </h5> </div>
                                <div class="ftr">
                                    <h4 class="card-caption">Patrick Wood</h4>
                                    <h6 class="category">@patrickwood</h6>
                                    <div class="card-avatar">
                                        <a href="#"> <img class="img" src="http://adamthemes.com/demo/code/cards/images/avatar3.png"> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </article>
<!--    comment start-->

    <!-- subscribe_area part start-->
    <section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h5>Join Our Newsletter</h5>
                        <h2>Subscribe to get Updated
                            with new offers</h2>
                        <div class="input-group">
<!--                            <input type="text" class="form-control" placeholder="enter email address"-->
<!--                                aria-label="Recipient's username" aria-describedby="basic-addon2">-->
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2 " id="basic-addon2">subscribe now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

    <!-- subscribe_area part start-->
    <section class="client_logo padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_4.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_5.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

 <?php
include ('../USERS/include_User/footer.php')
?>