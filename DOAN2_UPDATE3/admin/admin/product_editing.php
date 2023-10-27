
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
                    <h4> edit products
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
                        $product = getByID("products",$id);

                        if (mysqli_num_rows($product)>0)
                        {
                            $data = mysqli_fetch_array($product);
                            ?>

                            <form action="code_product.php" method="post" enctype="multipart/form-data">
                               
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

                                                <option value="<?=$item['id']?>" <?=$data['categort_id']== $item['id']?'selected':'' ?> > <?=$item['name']?></option>

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

                                                <option value="<?=$item['id_danhmuc']?>" <?=$data['id_typeshoes']== $item['id_danhmuc']?'selected':'' ?> > <?=$item['tendanhmuc']?></option>

                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo " No category available!!";
                                        }
                                        ?>
                                    </select>
                                    <input type="hidden" name="product_id" value="<?=$data['id']?>">
                                    <div class="col-md-6 mb-3">
                                        <label> Name </label>
                                        <input type="text" name="name" value="<?=$data['name_sp']?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label> Slug </label>
                                        <input type="text" name="slug" value="<?=$data['slug']?>" class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label> Description </label>
                                        <textarea name="description"   cols="20" rows="2" class="form-control">
                                            <?=$data['description']?>
                                        </textarea>
                                        <!--                                <input type="text" name="description"  class="form-control">-->
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label> upload image </label>
                                        <input type="hidden"   name="old_image"  value="<?=$data['image']?>" >
                                        <input type="file"   name="image"   class="form-control">
                                        <label for=""> Current Image</label>
                                        <img src="../admin/uploads/<?=$data['image']?>" alt="product image" height="50px" width="50px">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label> Meta Title </label>
                                        <!--                                <input type="text" name="meta_title" class="form-control product_content">-->
                                        <textarea name="meta_title" id="product_content" cols="20" rows="2" class="form-control">
                                            <?=$data['meta_title']?>
                                        </textarea>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label> Meta Description </label>
                                        <textarea name="meta_description"  cols="20" rows="3" class="form-control">
                                            <?=$data['meta_description']?>
                                        </textarea>
                                        <!--                                <input type="text" name="meta_description" class="form-control ">-->
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label> Meta keywords </label>
                                        <input type="text" name="meta_keywords" value="<?=$data['meta_keywords']?>" class="form-control product_content" >

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label> Status </label>
                                        <input type="checkbox" name="status" <?=$data['status']==0?'':'checked'?>  width="70px" height="70px">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label> trending </label>
                                        <input type="checkbox" name="trending"  <?=$data['trending']==0?'':'checked'?> width="70px" height="70px">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label> small Description </label>
                                        <textarea name="small_description" id="product_content" cols="20" rows="3" class="form-control">
                                            "<?=$data['small_description']?>
                                        </textarea>
                                        <!--                                <input type="text" name="meta_description" class="form-control ">-->
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label> selling price </label>
                                        <input type="text" name="selling_price"  value="<?=$data['selling_price']?>" id="product_content" cols="20" rows="3" class="form-control"></input>
                                        <!--                                <input type="text" name="meta_description" class="form-control ">-->
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label> original price </label>
                                        <input type="text" name="original_price"  value="<?=$data['original_price']?>" id="product_content" cols="20" rows="3" class="form-control"></input>
                                        <!--                                <input type="text" name="meta_description" class="form-control ">-->
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label> quantity </label>
                                        <input type="number" name="qty" value="<?=$data['qty']?>" id="product_content" cols="20" rows="3" class="form-control"></input>
                                        <!--                                <input type="text" name="meta_description" class="form-control ">-->
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="update_product_ins" class="btn btn-primary"> UPDATE products</button>
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

<?php
include ('includes/footer.php');
?>