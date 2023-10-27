<?php
//include ('authentication.php');
include ('../admin/config/dbconfig.php');

if (isset($_POST['user_delete']))
{
    $users_id = $_POST['product_id'];
   $query ="DELETE FROM users WHERE id='$users_id'";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message'] = "delete successfully";
        header("Location: viewuser.php");
        exit(0);
    }else
    {
        $_SESSION['message'] = "Something went wrong!!";
        header("Location: viewuser.php");
        exit(0);
    }
}



if (isset($_POST['add_user']))
{
    $user_id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role_as'];
    $status = $_POST['status']== true?'1':'0';

    $query = "INSERT INTO users(fname, lname, email, password,role_as,status)
    VALUES ('$fname','$lname','$email','$password','$role','$status')
";
    $query_run = mysqli_query($con,$query);

    if ($query_run)
    {
        $_SESSION['message'] = "ADD successfully";
        header("Location: viewuser.php");
        exit(0);
    }else
    {
        $_SESSION['message'] = "Something went wrong!!";
        header("Location: viewuser.php");
        exit(0);
    }
}



if (isset($_POST['update_user']))
{
    $user_id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role_as'];
    $status = $_POST['status']== true?'1':'0';

    $query = " UPDATE users SET fname='$fname', lname = '$lname',email = '$email',
                  password = '$password', role_as = '$role', status = '$status'
                  WHERE id = '$user_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run)
    {
        $_SESSION['message'] = "Update successfully";
        header("Location: viewuser.php");
        exit(0);
    }

}


?>