
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
                    <h4> Tư Vấn
                        <a href="tuvanlist.php" class="btn btn-danger float-right">BACK</a>
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
                                <label> Email </label>
                                <input type="email" name="slug" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label> Message </label>
                                <textarea name="description" id="product_content" cols="20" rows="2" class="form-control"></textarea>
                                <!--                                <input type="text" name="description"  class="form-control">-->
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="add_product" class="btn btn-primary"> Gửi MAIL</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>