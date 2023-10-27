
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
                    <h4>  Update Types
                        <a href="view_types_shose.php" class="btn btn-danger float-right">BACK</a>
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
                    $product = getByID_danhmuc("tbl_danhmuc",$id);

                    if (mysqli_num_rows($product)>0)
                    {
                    $data = mysqli_fetch_array($product);
                    ?>

                    <form action="codetypeshoes.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_type" value="<?=$data['id_danhmuc']?>">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label> Name type </label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label> Status </label>
                                <input type="checkbox" name="status"  width="70px" height="70px">
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="update_type" class="btn btn-primary"> ADD type</button>
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
