<?php
//include ('authentication.php');
include('includes/header.php');
include('includes/navbar.php');
include ('../admin/config/dbconfig.php');

?>



<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active" > Dashboard</li>
        <li class="breadcrumb-item"> user</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Edit user</h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id']))
                    {
                        $user_id = $_GET['id'];
                        $users = "SELECT * FROM users WHERE id= '$user_id'";
                        $users_run = mysqli_query($con, $users);

                        if (mysqli_num_rows($users_run)>0)
                        {
                            foreach ($users_run as $user)
                            {
                            ?>
                                <form action="code.php" method="post">

                                    <input type="hidden" name="user_id" value="<?=$user['id'];?>">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label> First name </label>
                                            <input type="text" name="fname" value="<?=$user['fname']?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label> Last name </label>
                                            <input type="text" name="lname" value="<?=$user['lname']?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label> Email address </label>
                                            <input type="text" name="email" value="<?=$user['email']?>" class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label> password </label>
                                            <input type="text" name="password" value="<?=$user['password']?>" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label> Role as </label>
                                            <select name="role_as" required class="form-control">
                                                <option value="">---Select Role---</option>
                                                <option value="1"<?=$user['role_as']=='1'?'selected':'' ?>>Admin</option>
                                                <option value="0"<?=$user['role_as']=='0'?'selected':'' ?>>User</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label> Status </label>
                                            <input type="checkbox" name="status" <?=$user['status']=='1'?'checked':'' ?> width="70px" height="70px">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <button type="submit" name="update_user" class="btn btn-primary"> Update user</button>
                                        </div>
                                    </div>
                                </form>

                            <?php
                            }
                            ?>
                            <?php
                        }
                        else
                            {
                                ?>
                                <h4> No record found</h4>
                                <?php
                            }
                    }
                    ?>


                </div>

            </div>
        </div>
    </div>



<?php
//include('includes/scripts.php');
include('includes/footer.php');
?>