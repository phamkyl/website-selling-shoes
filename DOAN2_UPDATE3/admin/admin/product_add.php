
<?php
include('includes/header.php');
include('includes/navbar.php');
include ('../admin/config/dbconfig.php');
include ('../function/myfunction.php');
?>
<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active" > Dashboard</li>
        <li class="breadcrumb-item"> ADMIN</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> categories add
                        <a href="view_categories.php" class="btn btn-danger float-right">BACK</a>
                    </h4>
                </div>
                <?php
                include ('message.php');
                ?>
                <div class="card-body">

                    <form action="code_product.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" ">
                        <div class="row">
                            <lable> Select category</lable>
                            <select name="categort_id" class="form-control">
                                <option selected> Selec category</option>
                                <?php
                                $categories = getAll("categories");
                                if (mysqli_num_rows($categories)>0)
                                {
                                    foreach ($categories as $item)
                                    {
                                        ?>

                                        <option value="<?=$item['id']?>"> <?=$item['name']?></option>

                                        <?php
                                    }
                                }
                                else
                                {
                                    echo " No category available!!";
                                }
                                ?>
                            </select>

                            <lable> Select type shoes</lable>
                            <select name="id_typeshoes" class="form-control">
                                <option selected> Select type shoes</option>
                            <?php
                            $danhmuc = getAll("tbl_danhmuc");
                            if (mysqli_num_rows($danhmuc)>0)
                            {
                                foreach ($danhmuc as $item)
                                {
                                    ?>

                                    <option value="<?=$item['id_danhmuc']?>"> <?=$item['tendanhmuc']?></option>

                                    <?php
                                }
                            }
                            else
                            {
                                echo " No category available!!";
                            }
                            ?>
                            </select>
                            <br>
                            <div class="col-md-6 mb-3">
                                <label> Name </label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label> Slug </label>
                                <input type="text" name="slug" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label> Description </label>
                                <textarea name="description" id="product_content" cols="20" rows="2" class="form-control"></textarea>
                                <!--                                <input type="text" name="description"  class="form-control">-->
                            </div>
                            <div class="col-md-6 mb-3">
                                <label> upload file </label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label> Meta Title </label>
                                <!--                                <input type="text" name="meta_title" class="form-control product_content">-->
                                <textarea name="meta_title" id="product_content" cols="20" rows="2" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label> Meta Description </label>
                                <textarea name="meta_description" id="ckeditor1" cols="20" rows="3" class="form-control"></textarea>
                                <!--                                <input type="text" name="meta_description" class="form-control ">-->
                            </div>
                            <div class="col-md-12 mb-3">
                                <label> Meta keywords </label>
                                <input type="text" name="meta_keywords" class="form-control product_content" >

                            </div>
                            <div class="col-md-6 mb-3">
                                <label> Status </label>
                                <input type="checkbox" name="status"  width="70px" height="70px">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label> trending </label>
                                <input type="checkbox" name="trending"  width="70px" height="70px">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label> small Description </label>
                                <textarea name="small_description" id="product_content" cols="20" rows="3" class="form-control"></textarea>
                                <!--                                <input type="text" name="meta_description" class="form-control ">-->
                            </div>
                            <div class="col-md-12 mb-3">
                                <label> selling price </label>
                                <input type="text" name="selling_price" id="product_content" cols="20" rows="3" class="form-control"></input>
                                <!--                                <input type="text" name="meta_description" class="form-control ">-->
                            </div>
                            <div class="col-md-12 mb-3">
                                <label> original price </label>
                                <input type="text" name="original_price" id="product_content" cols="20" rows="3" class="form-control"></input>
                                <!--                                <input type="text" name="meta_description" class="form-control ">-->
                            </div>
                            <div class="col-md-12 mb-3">
                                <label> quantity </label>
                                <input type="number" name="qty" id="product_content" cols="20" rows="3" class="form-control"></input>
                                <!--                                <input type="text" name="meta_description" class="form-control ">-->
                            </div>

                            <div class="col-md-12 mb-3">
                                <button type="submit" name="product_ins" class="btn btn-primary"> ADD products</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <?php
include ('includes/footer.php');
?>