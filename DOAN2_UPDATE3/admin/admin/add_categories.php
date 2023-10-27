
<?php
include('includes/header.php');
include('includes/navbar.php');
include ('../admin/config/dbconfig.php');
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

                    <form action="codecategories.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" ">
                        <div class="row">
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
                                <textarea name="meta_description" id="product_content" cols="20" rows="3" class="form-control"></textarea>
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
                                <label> popular </label>
                                <input type="checkbox" name="popular"  width="70px" height="70px">
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="add_product" class="btn btn-primary"> ADD products</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>