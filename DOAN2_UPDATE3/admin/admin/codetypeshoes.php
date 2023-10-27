<?php
session_start();
include('../admin/config/dbconfig.php');


if (isset($_POST['update_type']))
{
    $id_type = $_POST['id_type'];
    $name = $_POST['name'];
    $status = isset($_POST['status']) ? '1' : '0';

    $update_type_query = "UPDATE tbl_danhmuc SET tendanhmuc='$name',status='$status'
     WHERE id_danhmuc='$id_type'";


    $query_run = mysqli_query($con, $update_type_query);

    if ($query_run) {

        $_SESSION['message'] = "add products successfully";
        header("Location: view_types_shose.php");
        exit(0);
    } else {
        $_SESSION['message'] = "somethinh went wrong!!";
        header("Location: update_type.php");
        exit(0);
    }

} else
{
    header("Location:index.php");
}


if (isset($_POST['add_type'])) {
    $name = $_POST['name'];
    $status = isset($_POST['status']) ? '1' : '0';
    $query = "INSERT INTO tbl_danhmuc(tendanhmuc,status)
               VALUES ('$name','$status')";
    $query_run = mysqli_query($con,$query);

    if ($query_run) {

        $_SESSION['message'] = "add type successfully";
        header("Location: view_types_shose.php");
        echo "haha";
        exit(0);
    } else {
        $_SESSION['message'] = "somethinh went wrong!!";
//        header("Location: add_categories.php");
        echo " wrong!!";
        exit(0);
    }

}


?>