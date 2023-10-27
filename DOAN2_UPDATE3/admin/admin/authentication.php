<?php
 session_start();

 include ('../admin/config/dbconfig.php');

 if(isset($_SESSION['auth']))
 {
     $_SESSION['message'] = "Login to access Dashboard";
     header("Location: ../admin/login.php");
     exit(0);
 }
 else
 {
     if ($_SESSION['auth_role']!=1)
     {
         $_SESSION['message'] = "you are not authorised as Admin";
         header("Location: ../admin/login.php");
         exit(0);
     }
 }
?>