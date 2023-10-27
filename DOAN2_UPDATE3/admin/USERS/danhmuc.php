<?php
//session_start();

include ('../admin/config/dbconfig.php');
include ('../function/userfunction.php');
?>
    <aside class="left_widgets p_filter_widgets">
        <div class="l_w_title">
            <h3>Products Categories</h3>
        </div>
        <div class="widgets_inner">
            <ul class="list">
                <li>
                    <a href="">NIKE</a>
                    <span>(250)</span>
                </li>
                <li>
                    <a href="#">Dried Fish</a>
                    <span>(250)</span>
                </li>
                <li>
                    <a href="#">Fresh Fish</a>
                    <span>(250)</span>
                </li>
                <li>
                    <a href="#">Meat Alternatives</a>
                    <span>(250)</span>
                </li>
                <li>
                    <a href="#">Fresh Fish</a>
                    <span>(250)</span>
                </li>
                <li>
                    <a href="#">Meat Alternatives</a>
                    <span>(250)</span>
                </li>
                <li>
                    <a href="#">Meat</a>
                    <span>(250)</span>
                </li>
            </ul>
        </div>
    </aside>
    <div class="left_sidebar_area">
        <?php
        $categories = getalactive("categoties");

        if (mysqli_num_rows($categories)>0)
        {
        foreach ($categories as $data)
        {
        ?>
        <aside class="left_widgets p_filter_widgets">
            <div class="l_w_title">
                <h3>Product filters</h3>
            </div>
            <div class="widgets_inner">
                <ul class="list">
                    <li>
                        <a href="products.php?category=<?= $data['slug']?>"><?=$data['name']?>></a>
                    </li>

                </ul>

            </div>
        </aside>
    </div>
</div>
<div class="col-lg-9">
    <div class="row">
        <div class="col-lg-12">
            <div class="product_top_bar d-flex justify-content-between align-items-center">
                <div class="single_product_menu">
                    <p><span>10000 </span> Prodict Found</p>
                </div>
                <div class="single_product_menu d-flex">
                    <h5>short by : </h5>
                    <select>
                        <option data-display="Select">name</option>
                        <option value="1">price</option>
                        <option value="2">product</option>
                    </select>
                </div>
                <div class="single_product_menu d-flex">
                    <h5>show :</h5>
                    <div class="top_pageniation">
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>
                    </div>
                </div>
                <div class="single_product_menu d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="search"
                               aria-describedby="inputGroupPrepend">
                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend"><i
                                                        class="ti-search"></i></span>
                        </div>
                    </div>
                </div>
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




