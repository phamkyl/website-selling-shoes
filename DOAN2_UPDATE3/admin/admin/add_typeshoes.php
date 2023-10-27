
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
                    <h4> types add
                        <a href="view_types_shose.php" class="btn btn-danger float-right">BACK</a>
                    </h4>
                </div>
                <?php
                include ('message.php');
                ?>
                <div class="card-body">

                    <form action="codetypeshoes.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" ">
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
                                <button type="submit" name="add_type" class="btn btn-primary"> ADD type</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>