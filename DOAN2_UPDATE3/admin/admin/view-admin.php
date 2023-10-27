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
                    <h4> view admin
                        <a href="register-add.php" class="btn btn-primary float-right"> ADD admin</a>
                    </h4>

                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th> ID </th>
                            <th> first name</th>
                            <th> last name</th>
                            <th>Email </th>
                            <th>Role</th>
                            <th>EDIT </th>
                            <th>DELETE </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "SELECT * FROM users where role_as = '1'";
                        $query_run = mysqli_query($con,$query);
                        if (mysqli_num_rows($query_run)>0)
                        {
                            foreach ($query_run as $row)
                            {
                                ?>
                                <tr>
                                    <th><?=$row['id'] ?></th>
                                    <th><?=$row['fname'] ?></th>
                                    <th><?=$row['lname'] ?></th>
                                    <th><?=$row['email'] ?></th>

                                    <td>
                                        <?php
                                        if ($row['role_as']==1)
                                        {
                                            echo 'admin';
                                        }
                                        else
                                        {
                                            echo 'sai rùi';
                                        }
                                        ?>
                                    </td>
                                    <th><a href="register_editing.php?id=<?= $row['id']; ?>" class="btn btn-success"> edit</a>
                                    <th>

                                        <form action="code.php" method="post">
                                            <input type="hidden" name="user_delete" value="<?=$row['id']?>">
                                            <button type="button"  name="user_delete" class="btn btn-danger">delete</button>
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
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>
