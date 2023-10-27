<?php
session_start();
include ('../admin/config/dbconfig.php');

if(isset($_POST['register_btn']))
{
    $fname = mysqli_real_escape_string($con, $_POST['fname']) ;
    $lname = mysqli_real_escape_string($con,$_POST['lname']);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['cpassword'];

    if ($password == $confirm_password)
    {
        $checkmail = "SELECT email FROM users WHERE email ='$email'";
        $checkmail_run = mysqli_query($con,$checkmail);

        if(mysqli_num_rows($checkmail_run)>0)
        {
            $_SESSION['message'] =" Already email exits";
            header("Location: register_user.php");
            exit(0);
        } else
        {
            $user_query ="INSERT INTO users(fname,lname,email,password) 
            VALUES('$fname','$lname','$email','$password')";
            $user_query_run = mysqli_query($con,$user_query);

                if($user_query_run)
                {
                    $_SESSION['message'] = " đăng kí thành công";
                    header("Location: login.php");
                    exit(0);
                } else
                {
                    $_SESSION['message'] = "  something went wrong!";
                    header("Location: register_user.php");
                    exit(0);

                }
        }
    }else
    {
   $_SESSION['message'] = "password and confirm Password does not match";
        header("Location: register_user.php");
        exit(0);
    }
}
else
{
    header("Location: register_user.php");
    exit(0);
}

?>
