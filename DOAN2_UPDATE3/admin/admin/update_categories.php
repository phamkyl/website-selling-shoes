
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
                    <h4>  category update
                        <a href="view_categories.php" class="btn btn-danger float-right">BACK</a>
                    </h4>
                </div>
                <?php
                include ('message.php');
                ?>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id']))
                    {
                    $id = $_GET['id'];
                    $categoty = getByID("categories",$id);

                    if (mysqli_num_rows($categoty)>0)
                    {
                    $data = mysqli_fetch_array($categoty);
                    ?>
                                <form action="codecategories.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="user_id" ">
                                    <div class="row">
                                        <input type="hidden" name="id" value="<?=$data['id']?>">
                                        <div class="col-md-6 mb-3">
                                            <label> Name </label>
                                            <input type="text" name="name"  class="form-control"  value="<?=$data['name'];?>">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label> Slug </label>
                                            <input type="text" name="slug" value="<?=$data['slug']?>" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label> Description </label>
                                            <textarea name="description" id="product_content" value="<?=$data['description']?>" cols="20" rows="2" class="form-control"></textarea>
                                            <!--                                <input type="text" name="description"  class="form-control">-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label> upload image </label>
                                            <input type="hidden"   name="old_image"  value="<?=$data['image']?>" >
                                            <input type="file"   name="image"   class="form-control">
                                            <label for=""> Current Image</label>
                                            <img src="../admin/uploads/<?=$data['image']?>" alt="product image" height="50px" width="50px">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label> Meta Title </label>
                                            <!--                                <input type="text" name="meta_title" class="form-control product_content">-->
                                            <textarea name="meta_title" id="product_content" value="<?=$data['meta_title']?>" cols="20" rows="2" class="form-control"></textarea>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label> Meta Description </label>
                                            <textarea name="meta_description" id="product_content" value="<?=$data['meta_description']?>" cols="20" rows="3" class="form-control"></textarea>
                                            <!--                                <input type="text" name="meta_description" class="form-control ">-->
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label> Meta keywords </label>
                                            <input type="text" name="meta_keywords" value="<?=$data['meta_keywords']?>" class="form-control product_content" >

                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label> Status </label>
                                            <input type="checkbox" name="status" value="1"<?=$data['status']=='1'?'selected':'' ?> width="70px" height="70px">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label> popular </label>
                                            <input type="checkbox" name="popular" value="1"<?=$data['status']=='1'?'selected':'' ?> width="70px" height="70px">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" name="update_category" class="btn btn-primary"> Update categories</button>
                                        </div>
                                    </div>
                                </form>
                        <?php

                    }
                    else
                    {
                        echo "Product Not found for given id";
                    }

                    }
                    else
                    {
                        echo "ID missing from url";
                    }

                    ?>
                </div>

            </div>
        </div>
    </div>