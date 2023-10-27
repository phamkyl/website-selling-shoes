<?php
//include ('authentication.php');
include('includes/header.php');
include('includes/navbar.php');
include ('../admin/config/dbconfig.php');

?>



    <div class="container-fluid">

    <!-- DataTales Example -->

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active" > Dashboard</li>
        <li class="breadcrumb-item"> view</li>
    </ol>
    <div class="row">

        <div class="col-md-12">
            <?php include ('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4> view categories
                        <a href="add_categories.php" class="btn btn-primary float-right"> categories</a>
                    </h4>

                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>IMAGE</th>
                            <th>STATUS </th>
                            <th>EDIT </th>
                            <th>DELETE </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "SELECT * FROM categories";
                        $query_run = mysqli_query($con,$query);
                        if (mysqli_num_rows($query_run)>0)
                        {
                            foreach ($query_run as $row)
                            {
                                ?>
                                <tr>
                                    <th><?=$row['id'] ?></th>
                                    <th><?=$row['name'] ?></th>
                                    <th>
                                        <img src="../admin/uploads/<?=$row['image'] ?>" width="70px" height="70px" alt="<?=$row['meta_keywords'] ?>">

                                    </th>

                                    <th><?=$row['status']=='0'?"visible":"hidden" ?></th>

                                    </td>
                                    <th><a href="update_categories.php?id=<?= $row['id']; ?>" class="btn btn-success"> edit</a>
                                    <th>

                                        <form action="codecategories.php" method="post">
                                            <button type="button" name="delete_products"  value="<?= $row['id']; ?>"  class="btn btn-danger">delete</button>
                                        </form>
                                    </th>




                                </tr>
                                <?php

                            }
                        }else
                        {
                            ?>
                            <tr>
                                <td colspan="6">
                                    No record found
                                </td>
                            </tr>
                            <?php
                        }
                        ?>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

<?php
//include('includes/scripts.php');
include('includes/footer.php');
?>
<?php
