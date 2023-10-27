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
                    <h4> add admin/admin
                        <a href="viewuser.php" class="btn btn-danger float-right">BACK</a>
                    </h4>
                </div>

                <div class="card-body">

                    <form action="code.php" method="post">
                        <input type="hidden" name="user_id" ">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label> First name </label>
                                <input type="text" name="fname" =" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label> Last name </label>
                                <input type="text" name="lname" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label> Email address </label>
                                <input type="text" name="email"  class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label> password </label>
                                <input type="text" name="password" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label> Role as </label>
                                <select name="role_as" required class="form-control">
                                    <option value="">---Select Role---</option>
                                    <option value="1">Admin</option>
                                    <option value="0">User</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label> Status </label>
                                <input type="checkbox" name="status"  width="70px" height="70px">
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="add_user" class="btn btn-primary"> Update user</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>